<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebdevController extends Controller
{
    public function page() {

        return view('webdev.page');
    }
}
