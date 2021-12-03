<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyAnswers extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'answer_1',
      'answer_2',
      'answer_3',
      'answer_4',
      'answer_5',
      'answer_6',
      'answer_7',
      'answer_8',
      'answer_9',
      'answer_10',
      'answer_11',
    ];

    public $timestamps = true;

    protected $casts = [
      'answers' => 'array',
  ];

    public static function getQuestion($id) {
      $questionsMapper = self::getQuestions();
      return $questionsMapper[$id];
    }

    public static function getAnswers()
    {
      return WeeklyAnswers::all();
    }

    public static function getUserAnswers()
    {
      $range = [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()];
      $answers = WeeklyAnswers::whereBetween('created_at', $range)->get();

      if($answers->isNotEmpty())
        return $answers->first();
      return [];
    }

    public static function getQuestions()
    {
      return [
        1 => __('Ime i prezime '),
        2 => __('Kako se osjecas od kad si poceo/la sa planom?'),
        3 => __('Koliko i kako si spavao/la ove nedelje?'),
        4 => __('Koliko treninga si odradio/la ove nedelje?'),
        5 => __('Kako si se osjecao/la na treninzima? Da li si imao/la snage?'),
        6 => __('Koliko si postovao/la plan?'),
        7 => __('Da li si jeo/la nesto van plana?'),
        8 => __('Koliko si vode pio/la u toku dana?'),
        9 => __('Da li si imao/la potrebu za slatkisima i kad?'),
        10 => __('Da li osjecas da ti nesto ne odgovara i da bi trebalo promijeniti?'),
        11 => __('Da li imas upale misica i kako se oporavljas?')
      ];
    }
}
