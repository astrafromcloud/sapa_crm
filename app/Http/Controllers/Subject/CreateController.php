<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('subjects.create');
    }
}
