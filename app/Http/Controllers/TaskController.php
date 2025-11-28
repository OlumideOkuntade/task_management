<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('all_task',[
            'tasks'=> $tasks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();
        return view('create_task',[
            
            'projects'=>$projects
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>'required',
            "priority"=>'required',
            "project_id"=>'required',
        ]);
        Task::create([
            "name"=>$request->name,
            "priority"=>$request->priority,
            "project_id"=>$request->project_id,
        ]);
        return redirect('/task/create')->with('success','Task created successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        $task = $task->load('project');
        return view('show_task',[
            "task"=>$task
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        $projects= Project::all();
        $task = $task->load('project');
        return view('edit_task',[
            "task" => $task,
            "projects"=>$projects
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        // dd('here');
        $request->validate([
            "name"=>'required',
            "priority"=>'required',
            "project_id"=>'required',
        ]);
        $task->update([
            "name"=>$request->name,
            "priority"=>$request->priority,
            "project_id"=>$request->project_id
        ]);
        return redirect('/task/index')->with('success','task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/task/index')->with('success','task deleted successfully');
        
    }
}
