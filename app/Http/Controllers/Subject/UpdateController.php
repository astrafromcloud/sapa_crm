<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use App\Http\Requests\Exam\StoreRequest;
use App\Http\Requests\Subject\UpdateRequest;
use App\Models\Subject;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Subject $subject)
    {
        $data = $request->validated();
        $subject->update($data);
        $subject->fresh();
        return $subject;
    }
}
