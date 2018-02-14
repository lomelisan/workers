@extends('layouts.app')

@section('content')

<main role="main" class="container">
    <h1 class="mt-5">Workers</h1>
    <br>
    {!! Form::open(['method' => 'PATCH','action' => ['WorkerController@update', $worker->id]]) !!}
        <div class="form-group">
            {!! Form::label('first_name', 'First Name') !!}
            {!! Form::text('first_name', $worker->first_name, ['class' => 'form-control']) !!}                            
        </div>
        <div class="form-group">
            {!! Form::label('last_name', 'Last Name') !!}
            {!! Form::text('last_name', $worker->last_name, ['class' => 'form-control']) !!}                            
        </div>
        <div class="form-group">
            {!! Form::label('age', 'Age') !!}
            {!! Form::number('age', $worker->age, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('position', 'Position') !!}
            {!! Form::text('position', $worker->position, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('company_id', 'Company') !!}
            {!! Form::select('company_id', $companies, $worker->company_id, ['class' => 'form-control']) !!}

        </div>
        <div class="form-group">
            {!! Form::submit('Update Worker', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}

    <a class="btn btn-secondary" style="width: 100%;" href="{{ url('workers') }}" role="button">Get Back</a>

 </main>               

@endsection