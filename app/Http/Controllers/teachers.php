<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;

class teachers extends Controller
{
    public function store(Request $request){

        $fillable = $request->validate([
            'name'=>'required|string',
            'nic' =>'required|string',
            'age' =>'required|string',
            'learnSubject'=>'required|string',
            'workSchool'=>'required|string'
        ]);

        teacher::create( $fillable->all());

        


    }
    public function update(Request $request, String $id){

        $findTeacher = teacher::find($id);
        $findTeacher->update($request->all());
        return $findTeacher;

    }
    public function getall(Request $request){
        
        return teacher::all();

    }
    public function getById(Request $request){

        return teacher::find($id);

    }
    public function delete(String $id){
        teacher::destroye($id);
        return teacher::all();
    }
    public function search(string $name){
        teacher::where('name','like','%'.$name.'%')->get();
    }
}
