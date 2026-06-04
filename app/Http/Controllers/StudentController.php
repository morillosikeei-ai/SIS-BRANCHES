<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'course' => 'required',
            'year_level' => 'required|integer|min:1|max:4',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')
            ->with('success', 'Student added!');
    }

    public function edit(string $id){}
    public function update(Request $request, string $id){}
    public function destroy(string $id){}
    public function show(string $id){}
}