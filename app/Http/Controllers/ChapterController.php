<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Problem;
use App\Models\User;

class ChapterController extends Controller
{
    

    public function index()
    {
        return view('index');
    }
    public function show()
    {
        return view('/part/show');
    }
    
    
    
}
