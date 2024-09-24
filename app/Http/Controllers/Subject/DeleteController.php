<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subject\StoreRequest;
use App\Models\Subject;

class DeleteController extends Controller
{
    public function __invoke(Subject $subject)
    {
        $subject->delete();
        return response([]);
    }
}
