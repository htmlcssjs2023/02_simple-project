{!! Form::label('title', 'Title',['class'=>'abc']) !!}
{!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=> 'Enter Title']) !!}
{!! Form::label('description', 'Description',['class'=>'mt-3']) !!}
{!! Form::textarea('description',null,['class'=>'form-control', 'placeholder'=> 'Enter Description', 'rows'=>3]) !!}
{!! Form::label('status', 'Status',['class'=>'mt-3']) !!}
{!! Form::select('status', [1=>'active', 0=>'inactive'], null,['class'=>'form-select', 'placeholder'=> 'Select Status'] ) !!}
{!! Form::label('deadline', 'Deadline',['class'=>'mt-3']) !!}
{!! Form::date('deadline', \Carbon\Carbon::now(),['class'=>'form-control', 'placeholder'=> 'Deadline'])!!}
{!! Form::label('user_id', 'Select User',['class'=>'mt-3']) !!}
{!! Form::select('user_id',$users,['class'=>'form-select', 'placeholder'=> 'Select User'] ) !!}
