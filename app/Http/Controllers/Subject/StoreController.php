<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subject\StoreRequest;
use App\Models\Subject;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $subject = Subject::create($data);
        return $subject;
    }
}
