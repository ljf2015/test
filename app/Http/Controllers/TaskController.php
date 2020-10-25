<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return 'index';
    }
    public function reads($id){
        return 'ID:'.$id;
    }
    public function store(Request $request)
    {
         $name = $request->input('name');
         $path = $request->path();
         $method = $request->method();
         if ($request->isMethod('get')) {
           echo '1#';
        }
         return 'url-name:'.$name.' path:'.$path.' method:'.$method;
    }
}
