<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(5);

        return response()->json($students);
    }

    public function show(Student $student)
    {
        return response()->json($student);
    }

    public function store(StoreStudentRequest $request)
    {
        Student::create($request->validated());

        return response()->json('Student created');
    }

    public function update(StoreStudentRequest $request, Student $student)
    {
        $student->update($request->validated());

        return response()->json('Student updated');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return response()->json('Student deleted');
    }
}
