<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewTeachers;

class NewTeachersController extends Controller
{
    public function store(Request $request){

        $fillable = $request->validate([
            'name'=>'required|string',
            'nic' =>'required|string',
            'age' =>'required|string',
            'learnSubject'=>'required|string',
            'workSchool'=>'required|string'
        ]);

        return NewTeachers::create($fillable)->all();
    }


    public function update(Request $request, String $id){

        $findTeacher = NewTeachers::find($id);
        $findTeacher->update($request->all());
        return $findTeacher;

    }
    public function getall(Request $request){
        
        return NewTeachers::all();

    }
    public function getById(string $id){

        return NewTeachers::find($id);

    }
    public function delete(String $id){

        NewTeachers::destroye($id);
        return NewTeachers::all();
    }

    public function search(string $name){
        return NewTeachers::where('name','like','%'.$name.'%')->get();
    }
}
