<?php

namespace App\Http\Controllers;

use App\Models\LightHighLirics;
use Illuminate\Http\Request;

//　設問の結果を表示するためのコントローラーです
class musicResultController extends Controller
{
    public function getLightHighLiricsResult()
    {
        $repository = new LightHighLirics();
        $repo = $repository->getData();
        return view('light.lightHighLirics', ['repo' => $repo]);
    }

    public function getLightHighNoLiricsResult()
    {
        return view('light.lightHighNoLirics');
    }

    public function getLightSlowLiricsResult()
    {
        return view('light.lightSlowLirics');
    }

    public function getLightSlowNoLiricsResult()
    {
        return view('light.lightSlowNoLirics');
    }

    public function getDarkHighLiricsResult()
    {
        return view('dark.darkHighLirics');
    }

    public function getDarkHighNoLiricsResult()
    {
        return view('dark.darkHighNoLirics');
    }

    public function getDarkSlowLiricsResult()
    {
        return view('dark.darkSlowLirics');
    }

    public function getDarkSlowNoLiricsResult()
    {
        return view('dark.darkSlowNoLirics');
    }

}
