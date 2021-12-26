<?php

namespace App\Http\Controllers;

use App\Models\ProgressImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgressImageController extends Controller
{
    public function store(Request $request)
    {
      $request->validate([
        'file' => 'required',
        'user_id' => 'required'
      ]);

      $fileModel = new ProgressImage();
      if($request->file()) {
        $fileName = time().'-'.$request->file->getClientOriginalName();
        $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
        $fileModel->file_path = $filePath;
        $fileModel->user_id = $request->get('user_id');

        $fileModel->save();

        return response($fileModel, 200);
      }
      return response('Something went wrong!', 412);
    }
}
