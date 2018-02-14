@extends('layouts.app')

@section('content')
<main role="main" class="container">
    <h1 class="mt-5">Workers</h1>
    <br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
                <th scope="col">Position</th>
                <th scope="col">Company</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($workers as $worker)
                    <tr>
                        <th scope="row">{{++$loop->index}}</th>
                        <td>{{ $worker->first_name }}</td>
                        <td>{{ $worker->last_name }}</td>
                        <td>{{ $worker->age }}</td>
                        <td>{{ $worker->position }}</td>
                        <td>{{ $worker->company->name }}</td>
                        <td>
                            <a href="{{ route('workers.edit', $worker->id) }}"><i class="fas fa-pencil-alt"></i></a>

                            {{ Form::open(array('url' => 'workers/' . $worker->id, 'id'=>$worker->id, 'style'=>'display: inline-block;')) }}

                            {{ Form::hidden('_method', 'DELETE') }}
                                <a href="#" onclick="document.getElementById('{{ $worker->id }}').submit(); return false;"><i class="fas fa-trash"></i></a>

                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
    <div class="form-group">
            <a class="btn btn-primary" style="width: 100%;" href="/workers/create" role="button">Add a Worker</a>
    </div>
    <a class="btn btn-secondary" style="width: 100%;" href="{{ url('/') }}" role="button">Get Back</a>

</main>


@endsection