<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Rsponse;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function store(Request $request){
        //validation
        $fillable = $request->validate([
            'name'=>'required|string',
            'address'=>'required|string',
            'mobileNo'=>'required|string',
            'dob'=>'required|string',
            'nic'=>'required|string',
            'role'=>'required|string',
        ]);

        return Employee::create($fillable)->all();

    }
    public function getall(Request $request){

        return Employee::all();

    }
    public function getById(Request $request , string $id){

        return Employee::find($id);
    }
    public function update(Request $request , string $id){

        $getData =Employee::find($id);
        $getData->update($request->all());
        return $getData;

    }
    public function delete(string $id){
         Employee::destroy($id);
         return Employee::all();

    }
    public function search(string $name){
        return Employee::where('name','like','%'.$name.'%')->get();
    }

}
