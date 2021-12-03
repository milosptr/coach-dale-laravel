<?php

namespace App\Http\Controllers;

use App\Models\WeeklyAnswers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WeeklyAnswersController extends Controller
{
    public function store(Request $request)
    {
      $week = [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()];

      $report = WeeklyAnswers::whereBetween('created_at', $week)->get();

      if($report->isEmpty()) {
        $report = WeeklyAnswers::create($request->all());
      } else {
        $report = $report->first()->update($request->all());
      }

      return redirect()->back();
    }
}
