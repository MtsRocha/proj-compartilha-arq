<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function index(){

        return view('archives.index');
    }

    public function create(){

        return view('archives.create');
    }
}
