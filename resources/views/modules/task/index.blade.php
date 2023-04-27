@extends('layouts.master');
@section('page_title', 'Task List')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4"></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Task List</li>
    </ol>
    <div class="row">

        <div class="col-md-12">

           @if(Session::has('msg'))
            <p class="alert alert-info">
                {{ Session('msg') }}
            </p>
           @endif

                <div class="card">
                <div class="card-body bg-info fs-5">Task List</div>

                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        <th scope="col">Deadline</th>
                        <th scope="col">Assign User</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th style="text-align: center">Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                        {{-- @php
                            $sl;
                        @endphp --}}

                       @foreach ($tasks as $task)
                            <tr>
                               <td>{{ $loop->index+1 }}</td>
                               <td>{{ $task->title }}</td>
                               <td>{{ $task->description }}</td>
                               <td>{{ $task->status == 1 ? 'Active' : 'Deactive' }}</td>
                               <td>{{ $task->deadline != null ? \Carbon\Carbon::create($task->deadline) ->format('d-m-Y'):null }}</td>
                               <td>{{ $task->user?->name }}</td>
                               <td>{{ $task->created_at->diffForHumans() }}</td>
                               <td>{{ $task->updated_at }}</td>

                                <td id="outer">
                                    <small><a href="{{ route('task.show', $task->id) }}" class="btn btn-success inner"><i class="fa fa-eye"></i></a></small>
                                   <small> <a href="{{ route('task.edit', $task->id) }}" class="btn btn-info inner"><i class="fa fa-edit"></i></a></small>
                                   {!! Form::open(['method'=>'delete', 'route'=>['task.destroy', $task->id]]) !!}
                                   {!! Form::button('<i class="fa fa-trash"></i>',['class'=>'btn btn-danger', 'type'=>'submit', 'onclick'=> 'return confirm("Are you sure ?")']) !!}
                                   {!! Form::close() !!}

                                </td>
                            </tr>
                       @endforeach
                    </tbody>
              </table>
              {{$tasks->links() }}
            </div>
            </div>
        </div>
    </div>
@endsection


