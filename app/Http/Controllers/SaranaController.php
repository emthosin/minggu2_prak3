<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function Sarana1() {
        return 'Halaman Sarana Perkantoran';
    }

    public function Sarana2() {
        return 'Halaman Sarana Laboratorium';
    }

    public function Sarana3() {
        return 'Halaman Sarana Kelas';
    }

    public function Sarana4() {
        return 'Halaman Sarana Lainnya';
    }
}
