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
                <div class="card-body bg-info fs-5">User List</div>

                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Task List</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th style="text-align: center">Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                        {{-- @php
                            $sl;
                        @endphp --}}

                       @foreach ($users as $user)
                            <tr>
                               <td>{{ $loop->index+1 }}</td>
                               <td>{{ $user->name }}</td>
                               <td>{{ $user->email }}</td>
                               <td>
                                    <ul>
                                        @foreach ($user->tasks as $task)
                                               <li>{{$task->title }}</li>
                                        @endforeach
                                    </ul>
                               </td>
                               {{-- <td>{{ $task->user?->name }}</td> --}}
                               <td>{{ $user->created_at?->diffForHumans() == NULL? 'Not Created Yet' : $user->created_at>diffForHumans()}}</td>
                               <td>{{ $user->updated_at?->diffForHumans() == NUll? 'Not Updated Yet' : $user->updated_at->diffForHumans() }}</td>

                               <td>
                                <small><a href="#" class="btn btn-success inner"><i class="fa fa-eye"></i></a>
                                </small>
                                </td>

{{-- {{ route('user.show', $user->id) }} --}}
                            </tr>
                       @endforeach
                    </tbody>
              </table>
            </div>
            </div>
        </div>
    </div>
@endsection


