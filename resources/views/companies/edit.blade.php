@extends('layouts.app')

@section('content')

<main role="main" class="container">
    <h1 class="mt-5">Companies</h1>
    <br>
    {!! Form::open(['method' => 'PATCH','action' => ['CompanyController@update', $company->id]]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', $company->name, ['class' => 'form-control']) !!}                            
        </div>
        <div class="form-group">
            {!! Form::label('headquarters', 'Headquarters') !!}
            {!! Form::text('headquarters', $company->headquarters, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('industry', 'Industry') !!}
            {!! Form::text('industry', $company->industry, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('type', 'Type') !!}
            {!! Form::select('type', ['private' => 'private', 'public' => 'public'], $company->type, ['class' => 'form-control', 'placeholder' => 'Pick a type...']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update Company', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}

    <a class="btn btn-secondary" style="width: 100%;" href="{{ url('companies') }}" role="button">Get Back</a>

 </main>               

@endsection