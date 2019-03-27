<?php

namespace App\Http\Controllers;

use App\tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tasks=tasks::orderby('id','DESC')->get();
       return view('tasks',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $title=$request->title;
       $description=$request->description;
       $time=$request->date;
       $date=$request->time;


       tasks::insert(['title'=>$title,
                       'description'=>$description,
                       'date'=>$date,
                       'time'=>$time,'status'=>1]);


                       $tasks=tasks::orderby('id','DESC')->get();
                       return view('tasks',compact('tasks'));



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function show(tasks $tasks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $tasks=tasks::find($id);
        // $tasks=tasks::orderby('id','DESC')->get();
          return view('edit',compact('tasks'));
       // return $tasks;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;
        $title=$request->title;
       $description=$request->description;
       $time=$request->date;
       $date=$request->time;

        tasks::where('id',$id)->update([
            'title'=>$title,
                       'description'=>$description,
                       'date'=>$date,
                       'time'=>$time
        ]);

        $tasks=tasks::orderby('id','DESC')->get();
        return view('tasks',compact('tasks'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tasks::where('id',$id)->delete();
        
            $tasks=tasks::orderby('id','DESC')->get();
            return view('tasks',compact('tasks'));
           
    }
    public function finish($id)
    {

        tasks::where('id',$id)->update([
            'status'=>0]);
            $tasks=tasks::orderby('id','DESC')->get();
            return view('tasks',compact('tasks'));
           // return $id;
    }
    
}
