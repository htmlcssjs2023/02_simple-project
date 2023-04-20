@extends('layouts.master');
@section('page_title', 'Contact Us')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Task Create</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Task Create</li>
    </ol>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                   Task Create
                </div>
                <div class="card-body">
                    @if($errors)
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error )
                                <li class="alert alert-danger p-1 mb-1" style="list-style: none">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::open(['route'=>'task.store', 'method'=>'post']) !!}
                    @include('modules.task.form')

                    {!! Form::button('<i class="fas fa-edit"></i>Create', ['class'=>'btn btn-primary mt-2', 'type'=>'submit']) !!}
                    {!! Form::close() !!}
                </div>
              </div>
        </div>
    </div>

</div>
@endsection

