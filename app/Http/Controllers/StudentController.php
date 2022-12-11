<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
      return view("students.index", [
        'students' => Student::get(),
      ]);
    }

    public function create() {
      return view("students.create");
    }

    public function store(Request $request) {
      $student = new Student();

      $student->name = $request->name;
      $student->address = $request->address;
      $student->phone_number = $request->phone_number;
      $student->class = $request->class;

      $student->save();

      session()->flash("success", "Data Berhasil Ditambahkan.");

      return redirect()->route('students.index');
    }

    public function edit(int $id) {
      $student = Student::find($id);
      return view("students.edit", ["student" => $student]);
    }

    public function update(Request $request, int $id) {
      $student = Student::find($id);

      $student->name = $request->name;
      $student->address = $request->address;
      $student->phone_number = $request->phone_number;
      $student->class = $request->class;

      $student->save();

    //   session()->flash("success", "Data Berhasil Diubah.");

      return redirect()->route('students.index')->with("info", "Data Berhasil Diubah.");
    }

    public function destroy(int $id) {
      $student = Student::find($id);

      $student->delete();

      session()->flash("danger", "Data Berhasil Dihapus.");

      return redirect()->route("students.index");
    }
}
