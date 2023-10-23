<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function morning()
    {
        return view('comments.morning');
    }

    public function afternoon()
    {
        return view('comments.afternoon');
    }

    public function evening()
    {
        return view('comments.evening');
    }

    public function night()
    {
        return view('comments.night');
    }

    // 自由なメッセージ
    public function word($msg)
    {
        return view('comments.freeword', ['msg' => $msg]);
    }

    // ランダムなメッセージ
    public function random()
    {
        $messages = ["おはよう", "こんにちは", "こんばんは", "おやすみ"];
        $randMessage = $messages[array_rand($messages)];
        return view('comments.random', ['randMessage' => $randMessage]);
    }
}
