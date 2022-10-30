<?php

namespace App\Request;

use Illuminate\Support\Facades\Request;

class addMusicRequest
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required'
        ]);
    }   

    public function messages()
    {
        return [
            'name.required' => '入力してください',
            'title.required' => '入力してください',
        ];
    }
}