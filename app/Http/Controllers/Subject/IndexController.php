<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use App\Models\Subject;

class IndexController extends Controller
{
    public function __invoke()
    {
        $subjects = Subject::all();
        return $subjects;

    }
}
