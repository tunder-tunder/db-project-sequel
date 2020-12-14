
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Positions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<a class="btn btn-primary" href="/pw" role="button">back</a>
<div class="container">
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class = "alert alert-danger">
                {{$error}}
            </div>
        @endforeach
    @endif


    <h1> Edit entry </h1>
    {!! Form::open(['action' => ['App\Http\Controllers\PivotController@update', $position->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('position_id', 'position_id')}}
        {{Form::text('position_id', $position->position_id, ['class' => 'form-control', 'placeholder' => $position->name ])}}
    </div>
        <div class="form-group">
        {{Form::label('worker_id', 'worker_ide')}}
        {{Form::text('worker_id', $position->worker_id, ['class' => 'form-control', 'placeholder' => 'worker_id'])}}
    </div>
{{Form::hidden('_method','PUT')}}
{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
</body>
</html>
