<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getall()
    {
        return student::all();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $students =$request->validate([
            'name'=>'required|string',
            'email'=>'required|string',
            'nic'=>'required|string',
            'age'=>'required|string',
            'school'=>'required|string',
            'grade'=>'required|string',
           
        ]);

        return student::create($students)->all();
    }

    /**
     * Display the specified resource.
     */
    public function getById(string $id)
    {
        return student::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $student =student::find($id);
       $student->update($request->all());
       return $student;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function search(string $name)
    {
       return student::where('name', 'like', '%'.$name.'%')->get();
    }

    public function delete(string $id){

        student::destroy($id);
        return student::all();
    }
}
