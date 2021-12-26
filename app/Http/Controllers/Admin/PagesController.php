<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\ProgressImage;
use App\Models\WeeklyAnswers;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

  public function dashboard()
  {
    return view('dashboard');
  }

  public function inbox()
  {
    $messages = Message::forUser();
    return view('inbox', compact('messages'));
  }

  public function questions()
  {
    $allQuestions = WeeklyAnswers::getQuestions();
    $answers = WeeklyAnswers::getUserAnswers();
    return view('questions', compact('allQuestions', 'answers'));
  }

  public function progress()
  {
    $images = ProgressImage::where('user_id', auth()->user()->id)->get();
    return view('progress', compact('images'));
  }

  public function adminInbox()
  {
    $users = Message::tree();
    return view('admin.inbox', compact('users'));
  }

  public function adminTable()
  {
    $allQuestions = WeeklyAnswers::getQuestions();
    $users = User::where('role', 2)->get();
    foreach ($users as $user) {
      $user->answers = WeeklyAnswers::where('user_id', $user->id)->get()->toArray();
    }
    return view('admin.table', compact('users', 'allQuestions'));
  }

  public function adminProgress()
  {
    $users = User::where('role', 2)->get();
    return view('admin.progress', compact('users'));
  }
}
