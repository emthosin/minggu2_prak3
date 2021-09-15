<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function Comment($nm, $psn){
        return view('comment', ['nama' => $nm, 'pesan' => $psn]);
    }
}
