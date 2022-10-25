<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class musicQuestionController extends Controller
{
    // スタート画面のルーティング
    public function getStart()
    {
        return view('start');
    }

    // 音楽追加のルーティング
    public function getAdd()
    {
        return view('add');
    }

    // ここから下は問1のルーティング
    public function getFeel()
    {
        return view('feel');
    }

    // ここから下は問2のルーティング
    public function getLight()
    {
        return view('light.light');
    }

    public function getDark()
    {
        return view('dark.dark');
    }

    // ここから下は問3のルーティング
    public function getLightHigh()
    {
        return view('light.lightHigh');
    }

    public function getLightSlow()
    {
        return view('light.lightSlow');
    }

    public function getDarkHigh()
    {
        return view('dark.darkHigh');
    }

    public function getDarkSlow()
    {
        return view('dark.darkSlow');
    }
}
