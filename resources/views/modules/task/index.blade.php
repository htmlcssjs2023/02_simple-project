<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/parsley.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}">;
    <style>
        #outer
        {
            text-align: center;
        }
        .inner
        {
            display: inline-block;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

   <div class="row">
       <div class="col-md-6 offset-3 mt-5">
        <h3 class="text-center">Task List</h3>
        <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Deadline</th>
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
                        </tr>
                   @endforeach
                </tbody>
          </table>
       </div>
   </div>


   {{-- <a href="{{ route('test.1') }}" class="btn btn-info">go</a> --}}

   <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" ></script>
   <script>
       $('#form').parsley();
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
   <script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>
   <script>
        @if (Session::has('alert-success'))
            toastr["success"]("{{ Session::get('alert-success') }}");
        @endif

        @if (Session::has('alert-info'))
            toastr["info"]("{{ Session::get('alert-info') }}");
        @endif

        @if (Session::has('alert-danger'))
            toastr["success"]("{{ Session::get('alert-danger') }}");
        @endif

        @if (Session::has('alert-message'))
            toastr["info"]("{{ Session::get('alert-message') }}");
        @endif


   </script>
</body>
</html>
