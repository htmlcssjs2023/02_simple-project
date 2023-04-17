@extends('layouts.master');

@section('page_title', 'Task Details')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4"></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Task Details</li>
    </ol>

  <div class="row ">
    <div class="col-md-12 mb-4">
        <a href="{{ route('task.index') }}" class="btn btn-success inner"> <i class="fa-solid fa-arrow-left"></i> Back </a>
    </div>
        <div class="col-md-5">
            <div class="card ">
                <div class="card-body bg-info fs-5">Task Details</div>
                <table class="table table-striped table-hover">
                    <tbody>
                        <tr>
                            <th scope="col">ID</th>
                            <td>{{ $task->id }}</td>
                        </tr>
                            <tr>
                                <th scope="col">Title</th>
                                <td>{{ $task->title }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Description</th>
                                <td>{{ $task->description }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Status</th>
                                <td>{{ $task->status == 1? 'Active': 'Deactive'}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Deadline</th>
                                <td>{{ $task->deadline != null ? \Carbon\Carbon::create($task->deadline) ->format('d-m-Y'):null }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Created At</th>
                                <td>{{ $task->created_at->diffForHumans()}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Update At</th>
                                <td>{{ $task->updated_at != $task->created_at->diffForHumans()? 'Not Update' : $task->updated_at->diffForHumans()}}</td>
                            </tr>

                    </tbody>
              </table>
        </div>
            </div>
            <div class="col-md-5">
                <div class="card ">
                    <div class="card-body bg-info fs-5">User Details</div>
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <th scope="col">ID</th>
                                <td>{{ $task->user?->id }}</td>
                            </tr>
                                <tr>
                                    <th scope="col">Name</th>
                                    <td>{{ $task->user?->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Email</th>
                                    <td>{{ $task->user?->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Registered At</th>
                                    <td>{{ $task->created_at->diffForHumans()}}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Update At</th>
                                    <td>{{ $task->updated_at != $task->created_at->diffForHumans()? 'Not Update' : $task->updated_at->diffForHumans()}}</td>
                                </tr>



                        </tbody>
                  </table>
            </div>
            </div>
 </div>

    </div>
        </div>
    </div>
    </div>

@endsection
