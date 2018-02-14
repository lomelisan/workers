@extends('layouts.app')

@section('content')
<main role="main" class="container">
    <h1 class="mt-5">Companies</h1>
    <br>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            {{ implode('', $errors->all(':message')) }}
        </div>
        <br>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Headquarters</th>
                <th scope="col">Industry</th>
                <th scope="col">Type</th>
                <th scope="col">Workers</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <th scope="row">{{++$loop->index}}</th>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->headquarters }}</td>
                        <td>{{ $company->industry }}</td>
                        <td>{{ $company->type }}</td>
                        <td>{{ $company->workers->count() }}</td>
                        <td>
                            <a href="{{ route('companies.edit', $company->id) }}"><i class="fas fa-pencil-alt"></i></a>

                            {{ Form::open(array('url' => 'companies/' . $company->id, 'id'=>$company->id, 'style'=>'display: inline-block;')) }}

                            {{ Form::hidden('_method', 'DELETE') }}
                                <a href="#" onclick="document.getElementById('{{ $company->id }}').submit(); return false;"><i class="fas fa-trash"></i></a>

                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
    <div class="form-group">
            <a class="btn btn-primary" style="width: 100%;" href="/companies/create" role="button">Add Company</a>
    </div>
    <a class="btn btn-secondary" style="width: 100%;" href="{{ url('/') }}" role="button">Get Back</a>

</main>


@endsection