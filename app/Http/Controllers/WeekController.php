<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Week;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WeekController extends Controller
{
    public function show(String $slug) {
        $week = Week::where('slug', $slug)->get()[0];
        $user = Auth::user();

        $questions = Question::where('week_id', $week->id)->get()->all();

        $answers = [];

        for($i = 0; $i < sizeof($questions); $i++) {
            $question = Answer::where('user_id', $user->id)->where('question_id', $questions[$i]->id)->get()->all();
            $answers[] = $question;
        }

        $content = array_combine($questions, $answers);

        return inertia('week', [
            'week' => $week,
            'user' => $user,
            'content' => $content
        ]);
    }
}
