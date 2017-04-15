<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JoinMitraController extends Controller
{
    public function index ()
    {
        return view('themes.profile.join_mitra.mitra');
    }
}
