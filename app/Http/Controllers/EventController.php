<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function store(Request $request){
        $fillable = $request->validate([
            'name'=>'required|string',
            'venue'=>'required|string',
            'startDate'=>'required|string',
            'startTime'=>'required|string',
            'Organizer'=>'required|string',
            'cost'=>'required|string'
        ]);

        return Event::create( $fillable)->all();
    }

    public function getall(){
        return Event::all();
    }
    public function getById(string $id){
        $findData = Event::find($id);
        return $findData;

    }
    public function update(Request $request, string $id){
        $data = Event::find($id);
        $data->update($request->all());
        return $data;
    }
    public function search(string $name){
        return Event::where('name','like','%'.$name.'%')->get();

    }
    public function delete(string $id){
        Event::destroy($id);
        return Event::all();
    }
}
