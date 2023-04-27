<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::with('user')->latest()->paginate(10);
        return view('modules.task.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::pluck('name', 'id');
        return view('modules.task.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request  $request
     * @return Response
     */
    public function store(StoreTaskRequest $request):RedirectResponse
    {
        // Insert data
        Task::create($request->all());
        session()->flash('msg', 'Your record saved successfully');
        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        $task->load('user');
        return view('modules.task.show',compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task):View
    {
        $users = User::pluck('name', 'id');
        // $task = Task::findOrFail($id);
        return view('modules.task.edit',compact('users', 'task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskRequest $request, Task $task):RedirectResponse
    {
    //    $task = Task::findOrFail($id);
       $task->update($request->all());
       session()->flash('msg','Updated Successfully');
       return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        session()->flash('msg','Deleted Successfully');
        return redirect()->route('task.index');
    }
}
