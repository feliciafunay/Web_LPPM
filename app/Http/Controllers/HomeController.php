<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //Query Builder

class HomeController extends Controller
{
    public function index()
    {
        // $researches = DB::table('researches')->get(); //Query Builder
        $researches = \App\Researche::orderBy('id', 'desc')->take(5)->get(); //Model
        return view('/index', ['researches' => $researches]);
    }

    public function show($title)
    {
        // die($slug);
        // $research = \App\Researche::where('title', $title)->first();
        // return view('/berita-penelitian/detail-1', compact('research'));
    }
}
