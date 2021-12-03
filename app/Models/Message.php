<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['from', 'to', 'message', 'read_at'];

    public static function coach() {
      return User::where('role', 1)->get()->first();
    }

    public static function tree() {
      $users = User::where('role', 2)->get();
      foreach($users as $user) {
        $user->messages = self::getMessagesForUser($user);
      }
      return $users;
    }

    public static function forUser() {
      $user = Auth::user();

      return Message::where(function ($q) use ($user) {
        $q->where('from', $user->email)->orWhere('to', $user->email);
      })->get();
    }

    public static function getMessagesForUser($user)
    {
      return Message::where(function ($q) use ($user) {
        $q->where('from', $user->email)->orWhere('to', $user->email);
      })->get();
    }
}
