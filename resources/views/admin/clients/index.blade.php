@extends('admin.layouts.app')

@section('title', 'Clients')

@section('content')
<div class="content">
    <div class="card card-default">

        <div class="card-header card-header-border-bottom">
            <h2>Create New Client</h2>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-12">
                    <h1>Clients</h1>
                    <a href="{{ route('admin.clients.create') }}" class="btn btn-primary">Create Client</a>
                    <br><br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                                <tr>
                                    <td>{{ $client->firstname }} {{ $client->lastname }}</td>
                                    <td>{{ $client->address1 }}</td>
                                    <td>{{ $client->mobilenumber }}</td>
                                    <td>
                                        <a href="{{ route('admin.clients.edit', ['client' => $client->id]) }}" class="btn btn-default btn-sm">Edit</a>
                                        <a href="{{ route('admin.clients.destroy', ['client' => $client->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $clients->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    