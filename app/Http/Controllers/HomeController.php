<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;

class HomeController extends Controller
{
    public function index() {
        $data = Mitra::get();
        return view('index',compact('data'));
    }
}
