<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $courses = DB::table('courses')->get();

        return view('home', ['courses' => $courses]);
    }
}
