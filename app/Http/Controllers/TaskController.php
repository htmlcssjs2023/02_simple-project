<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()// For showing data list
    {

        $tasks = Task::with('user')->get();
        // dd($tasks);
        return view('modules.task.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // For create data using form.
    {
        $users = User::pluck('name', 'id');
        return view('modules.task.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // To insert data into Table.
    {
        // dd('TASK');
        // $this->validate($request,[
        //     'title'=> 'requi;red',
        //     'description'=> 'required',
        // ]);
        // dd($request->all());


        // Insert data
        Task::create($request->all());
        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // When you are use model binding then syntax of relationship
        //$task->load('user');
        // compact('task')

        // Id binding
        //=========== Single data fetching
        // 1. find() this will return single data
        //2. findOrFail()  this will return 404 page if data is not found

        // Multiple data fetching
        //1. get()->paginate()

        $task =Task::with('user')->findOrFail($id);
        // dd($tasks);
        return view('modules.task.show',compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $users = User::pluck('name', 'id');
        $task = Task::findOrFail($id);
        return view('modules.task.edit',compact('users', 'task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $task = Task::findOrFail(1);
       $task->update($request->all());
       return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('task.index');
    }
}
