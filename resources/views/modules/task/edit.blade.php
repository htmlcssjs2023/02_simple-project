@extends('layouts.master');
@section('page_title', 'Edit Task')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Task</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Edit Task</li>
    </ol>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                 Edit Task
                </div>
                <div class="card-body">

                    {!! Form::model($task,['route'=>['task.update', $task->id], 'method'=>'put']) !!}
                  @include('modules.task.form')
                  {{-- {!! Form::label('title', 'Title',['class'=>'abc']) !!}
                  {!! Form::text('title',$task->title,['class'=>'form-control', 'placeholder'=> 'Enter Title']) !!}
                  {!! Form::label('description', 'Description',['class'=>'mt-3']) !!}
                  {!! Form::textarea('description', $task->description,['class'=>'form-control', 'placeholder'=> 'Enter Description', 'rows'=>3]) !!}
                  {!! Form::label('status', 'Status',['class'=>'mt-3']) !!}
                  {!! Form::select('status', [1=>'active', 0=>'inactive'], $task->status,['class'=>'form-select', 'placeholder'=> 'Select Status'] ) !!}
                  {!! Form::label('deadline', 'Deadline',['class'=>'mt-3']) !!}
                  {!! Form::date('deadline', \Carbon\Carbon::create($task->deadline),['class'=>'form-control', 'placeholder'=> 'Deadline'])!!}
                  {!! Form::label('user_id',  'Select User') !!}
                  {!! Form::select('user_id',$users,$task->user_id,['class'=>'form-select', 'placeholder'=> 'Select User'] ) !!} --}}
                  {!! Form::button('<i class="fas fa-edit"></i>Update', ['class'=>'btn btn-primary mt-2', 'type'=>'submit']) !!}
                  {!! Form::close() !!}

                </div>
              </div>
        </div>
    </div>

</div>
@endsection
