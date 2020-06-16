<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;


class MainController extends Controller
{
    public function index() {

        $students = Student::all();
        // dd($students);

        return view("index", compact("students"));
    }
}
