<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HogeController extends Controller
{
    public function index($name, Request $request) {

        $keyword = $request->keyword;

        return view('/hoge', ['name' => $name, 'keyword' => $keyword]);
    }
}
