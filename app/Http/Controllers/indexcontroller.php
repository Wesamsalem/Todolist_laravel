<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function index(){
    $items = Task::all();
          return view('index',compact('items'));
    }
    public function add()
    {
    $name=request('name');
    $new=new Task();
    $new->name=$name;
    $new->save();
    return redirect()->back();

    } 
    
    public function delete($id){

    Task::destroy($id);
    return redirect()->back();

    }
    public function complete($id){
    $item=Task::find($id);
    $item->complete=1;
    $item->save();
    return redirect()->back();


    }

}
