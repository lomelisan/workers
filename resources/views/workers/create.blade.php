@extends('layouts.app')

@section('content')

<main role="main" class="container">
    <h1 class="mt-5">Workers</h1>
    <br>
    {!! Form::open(['url' => 'workers']) !!}
        <div class="form-group">
            {!! Form::label('first_name', 'First Name') !!}
            {!! Form::text('first_name', null, ['class' => 'form-control']) !!}                            
        </div>
        <div class="form-group">
            {!! Form::label('last_name', 'Last Name') !!}
            {!! Form::text('last_name', null, ['class' => 'form-control']) !!}                            
        </div>
        <div class="form-group">
            {!! Form::label('age', 'Age') !!}
            {!! Form::number('age', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('position', 'Position') !!}
            {!! Form::text('position', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('company_id', 'Company') !!}
            {!! Form::select('company_id', $companies, null, ['class' => 'form-control', 'placeholder' => 'Pick a company...']) !!}

        </div>
        <div class="form-group">
            {!! Form::submit('Add Worker', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}

    <a class="btn btn-secondary" style="width: 100%;" href="{{ url('workers') }}" role="button">Get Back</a>

 </main>               

@endsection