<?php

namespace App\Http\Controllers;

use App\Upload;
use Illuminate\Http\Request;

class IndexController extends Controller
{
        public function index()
        {
            $uploads = Upload::all();
            return view('index',['uploads' => $uploads]);
        }
}
