<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\pemain;


class pemainController extends Controller
{
    public function index(){
        $data_pemain = pemain::all();
        return view ('index', compact('data_pemain'));
    }
}
