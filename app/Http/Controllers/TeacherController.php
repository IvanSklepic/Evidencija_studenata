<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::paginate();
        return view ('teachers.index', compact ('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|unique:teachers|max:255',
            'last_name' => 'required|unique:teachers|max:255',
            'birth_date' => 'required|unique:teachers|max:255',
            'phone_number' => 'required|unique:teachers|max:255',
            'email' => 'required|unique:teachers|max:255',
            'title' => 'required|unique:teachers|max:255',
        ]);
        $teacher = Teacher::create($validated);
        return view('teachers.show', compact('teacher'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view ('teachers.show', compact ('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view ('teachers.edit', compact ('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'first_name' => 'required:teachers|max:255',
            'last_name' => 'required:teachers|max:255',
            'birth_date' => 'required:teachers|max:255',
            'phone_number' => 'required:teachers|max:255',
            'email' => 'required:teachers|max:255',
            'title' => 'required:teachers|max:255',
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->fill($validated);
        $teacher->save();

        return view('teachers.show', compact('teacher'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
