

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
        <h3 class="text-center">Task Form</h3>
        {!! Form::open(['class'=>'container']) !!}
        {!! Form::label('title', 'Title',['class'=>'text-danger fs-5 fw-bolder']) !!}
        {!! Form::text('title',null, ['class'=>'form-control mt-1', 'placeholder'=>'Enter Title']) !!}
        {!! Form::label('description','Description', ['class'=>'text-danger fs-5 fw-bolder']) !!}
        {!! Form::textarea('description',null, ['class'=>'form-control mt-1','rows'=>3, 'placeholder'=>'Enter your description here']) !!}
        {!! Form::label('status', 'Select Status', ['class'=>'text-danger fs-5 fw-bolder']) !!}
        {!! Form::select('status',[1=>'active', 0=>'deactive'], null, ['class'=>'form-select', 'placeholder'=>'Choose status']) !!}
        {!! Form::label('deadline', 'Select Deadline',['class'=>'text-danger fs-5 fw-bolder']) !!}
        {!! Form::date('deadline',\Carbon\Carbon::now(),['class'=>'form-control', 'placeholder'=> 'Deadline']) !!}
        {!! Form::label('user', 'Select User', ['class'=>'text-danger fs-5 fw-bolder']) !!}
        {!! Form::select('user',[1=>'Halim', 2=>'Asraf',3=>'Rahim'], null, ['class'=>'form-select', 'placeholder'=>'Choose status']) !!}
        {!! Form::label('password', 'Password', ['class'=>'text-danger fs-5 fw-bolder']) !!}
        {!! Form::password('password',['class'=>'form-control', 'placeholder'=>'Enter Password']) !!}
        {!! Form::button('Submit', ['class'=>'btn btn-warning mt-1']) !!}

        {!! Form::close() !!}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>
