<?php

namespace App\Http\Controllers;
use App\Practice;

class PracticeController extends Controller
{
    public function sample()
    {
        return view('practice');
    }

    public function sample2()
    {
        $test = 'practice2';
            return view('practice2', ['testParam' => $test]);
    }

    public function sample3()
    {
        $test2 = 'test';
            return view('practice3', ['testParam2' => $test2]);
    }

    public function getPractice()
    {
        $practices = Practice::all();
            return view('getPractice', ['practices' => $practices]);
    }
}