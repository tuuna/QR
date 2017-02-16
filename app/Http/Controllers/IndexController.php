<?php

namespace App\Http\Controllers;

use App\Upload;
use Illuminate\Http\Request;

class IndexController extends Controller
{
        public function index()
        {
            $ip = $this->getIp();
            $uploads = Upload::all();
            return view('index',['uploads' => $uploads,'ip' => $ip]);
        }

        public function getIp()
        {
            $sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
            socket_connect($sock, "8.8.8.8", 53);
            socket_getsockname($sock, $name); // $name passed by reference

            $localAddr = $name;
            return $localAddr;
        }
}
