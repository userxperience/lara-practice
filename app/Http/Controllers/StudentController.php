<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

        public function index()
        {
        $student = Student::all();

         return view('students.index', compact('Student'));
        }

    public function show($id)
    {
 $students = Student::all();
        return view('students.show', ['students' => Student::find($id)]);
    }


        public function create() {
            return view('students\create');
        }

        public function edit($id)
        {
            $students = Student::find($id);
            return view('students.edit', compact('students'));
        }

        public function store(Request $request)
        {
            $request->validate([
                'name' => ['required'],
                'id' => ['required']
            ]);

            $students = new Student();

            $students->name = request('name');
            $students->id = request('id');
            $students->cohort = request('cohort');
            $students->img_url = request('img_url');

            $students->save();

            return redirect('students.index');
        }

        public function view()
        {

            return view('', ['students'=>Student::all()]);

    //        $students = Student::all();
    //        return view('students.index', $students);
        }

        public function update($id, Request $request)
        {
            $request->validate([
                'question' => ['required'],
                'answer' => ['required']
            ]);

            $students = Student::find($id);

            $students->question = request('question');
            $students->answer = request('answer');

            $students->save();

            return redirect('/students.index');
        }

        public function destroy($id)
        {
            $students = Student::find($id);
            $students->delete();
            return redirect('/students.index');

        }



    }
