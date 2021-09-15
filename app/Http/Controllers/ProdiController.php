<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function Prodi1() {
        return view('ti');
    }

    public function Prodi2() {
        return view('mi');
    }
}
