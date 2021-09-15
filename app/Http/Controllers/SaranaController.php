<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function Sarana1() {
        return view('perkantoran');
    }

    public function Sarana2() {
        return view('laboratorium');
    }

    public function Sarana3() {
        return view('kelas');
    }

    public function Sarana4() {
        return view('lainnya');
    }
}
