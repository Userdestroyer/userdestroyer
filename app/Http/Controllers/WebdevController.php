<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class WebdevController extends Controller
{
    public function page() {
        if(!$job = Job::where('codename', 'webdev')->first()){
            return abort('404');
        }
        return view('webdev.page', ['job' => $job]);
    }
}
