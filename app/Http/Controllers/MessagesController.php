<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
  public function store(Request $request)
  {
    $message = [
      'message' => $request->get('message'),
      'from' => $request->get('email'),
      'to' => $request->has('to') ? $request->get('to') : Message::coach()->email,
    ];

    Message::create($message);

    return redirect()->back();
  }
}
