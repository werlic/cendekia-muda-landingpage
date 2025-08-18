<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearningAppController extends Controller
{
    public function login()
    {
        return view('learning.auth.login');
    }

    public function dashboard()
    {
        return view('learning.dashboard.index');
    }

    public function learn()
    {
        return view('learning.learn.index');
    }

    public function learnMath()
    {
        return view('learning.learn.math');
    }

    public function practice()
    {
        return view('learning.practice.index');
    }

    public function practiceEnglish()
    {
        return view('learning.practice.english');
    }

    public function leaderboard()
    {
        return view('learning.leaderboard.index');
    }

    public function quests()
    {
        return view('learning.quests.index');
    }

    public function ahsanuAmala()
    {
        return view('learning.ahsanu-amala.index');
    }

    public function ahsanuAmalaDetail()
    {
        return view('learning.ahsanu-amala.detail');
    }

    public function profile()
    {
        return view('learning.profile.index');
    }

    public function mbtiTest()
    {
        return view('learning.profile.mbti-test');
    }

    public function mbtiResult()
    {
        return view('learning.profile.mbti-result');
    }
}
