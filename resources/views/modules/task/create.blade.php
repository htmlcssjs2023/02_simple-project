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

                    <form method="POST" action="{{route('task.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="first_name" class="form-label">Title</label>
                            <input name="title" type="text" class="form-control" id="first_name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                          </div>

                          <div class="form-group">
                            <label for="">Select Status</label>
                            <select name="status" class="form-select" aria-label="Default select example">
                                <option selected disabled>Choose option</option>
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                                >
                              </select>
                      </div>

                          <div class="mb-3">
                            <label for="password" class="form-label">Select Deadline</label>
                            <input type="date" name="deadline" class="form-control" id="password">
                          </div>
                          <div class="form-group mb-3">
                                <label for="">Select User</label>
                                <select name="user_id" class="form-select" aria-label="Default select example">
                                    @foreach ($users as $id=>$user)
                                    <option value="{{ $id }}">{{ $user }}</option>
                                    @endforeach
                                </select>
                          </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
              </div>
        </div>
    </div>

</div>
@endsection
