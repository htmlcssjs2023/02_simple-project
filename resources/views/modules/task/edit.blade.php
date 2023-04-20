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
                    @if(count($errors) > 0)
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                        <li class="alert alert-danger p-1 mb-1" style="list-style: none">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::model($task,['route'=>['task.update', $task->id], 'method'=>'put']) !!}
                  @include('modules.task.form')
                  {!! Form::button('<i class="fas fa-edit"></i>Update', ['class'=>'btn btn-primary mt-2', 'type'=>'submit']) !!}
                  {!! Form::close() !!}

                </div>
              </div>
        </div>
    </div>

</div>
@endsection

<script>

</script>
