<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
//this method is called index method 
    public function index()
    {
        $students = Student::all();
        return view ('students.index')->with('students', $students);
    }
 
    
    public function create()
    {
        return view('students.create');
    }
 
   
    public function store(Request $request)
    {
        
        

        $student=new Student();
        $student->name=$request->name;
        $student->address=$request->address;
        $student->mobile=$request->mobile;
        $student->save();
        
       return redirect('student')->with('flash_message', 'Student Addedd!');  //rediriger
    }
 
    
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }
 
    
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    }
 
  
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'student Updated!');  //rediriger
    }
 
   
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!');  //rediriger
    }
}
