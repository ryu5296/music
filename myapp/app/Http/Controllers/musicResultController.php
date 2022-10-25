<?php

namespace App\Http\Controllers;

use App\Models\DarkHighLirics;
use App\Models\DarkHighNoLirics;
use App\Models\DarkSlowLirics;
use App\Models\DarkSlowNoLirics;
use App\Models\LightHighLirics;
use App\Models\lightHighNoLirics;
use App\Models\LightSlowLirics;
use App\Models\LightSlowNoLirics;
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
        $repository = new lightHighNoLirics();
        $repo = $repository->getData();
        return view('light.lightHighNoLirics', ['repo' => $repo]);
    }

    public function getLightSlowLiricsResult()
    {
        $repository = new LightSlowLirics();
        $repo = $repository->getData();
        return view('light.lightSlowLirics', ['repo' => $repo]);
    }

    public function getLightSlowNoLiricsResult()
    {
        $repository = new LightSlowNoLirics();
        $repo = $repository->getData();
        return view('light.lightSlowNoLirics', ['repo' => $repo]);
    }

    public function getDarkHighLiricsResult()
    {
        $repository = new DarkHighLirics();
        $repo = $repository->getData();
        return view('dark.darkHighLirics', ['repo' => $repo]);
    }

    public function getDarkHighNoLiricsResult()
    {
        $repository = new DarkHighNoLirics();
        $repo = $repository->getData();
        return view('dark.darkHighNoLirics', ['repo' => $repo]);
    }

    public function getDarkSlowLiricsResult()
    {
        $repository = new DarkSlowLirics();
        $repo = $repository->getData();
        return view('dark.darkSlowLirics', ['repo' => $repo]);
    }

    public function getDarkSlowNoLiricsResult()
    {
        $repository = new DarkSlowNoLirics();
        $repo = $repository->getData();
        return view('dark.darkSlowNoLirics', ['repo' => $repo]);
    }

}
