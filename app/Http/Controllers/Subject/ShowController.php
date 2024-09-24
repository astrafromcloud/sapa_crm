<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use App\Models\Subject;

class ShowController extends Controller
{
    public function __invoke(Subject $subject)
    {
        return $subject;
    }
}
