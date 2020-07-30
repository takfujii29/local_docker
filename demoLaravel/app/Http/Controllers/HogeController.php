<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HogeController extends Controller
{
    public function index(Request $request) {

        $keyword = $request->keyword;

        return view('/hoge', ['keyword' => $keyword]);
    }
}
