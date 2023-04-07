@extends('layouts.master');
@section('page_title', 'Contact Us')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Contact us</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Contact Us</li>
    </ol>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Contact Us
                </div>
                <div class="card-body">
                    <form>

                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first_name">
                          </div>
                          <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" class="form-control" id="password">
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
              </div>
        </div>
    </div>

</div>
@endsection
