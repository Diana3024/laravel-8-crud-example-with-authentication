@extends('layouts.app-master')

@section('content')
    
    <h1 class="mb-3">List of User Registed</h1>

    <div class="bg-light p-4 rounded">
        <h1>Users</h1>
        <div class="lead">
            Manage your users here.
            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right">Add new user</a>
        </div>
        
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-responsive">
           
            <thead>
            <tr>
                <th scope="col" style="text-align: center">No</th>
                <th scope="col" style="text-align: center">Name</th>
                <th scope="col" style="text-align: center">Email</th>
                <th scope="col" style="text-align: center">Username</th>
                <th scope="col" style="text-align: center">Mobile Number</th>
                <th scope="col" width="1%" colspan="3" style="text-align: center">Action</th>    
            </tr>
            </thead>
           
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th style="text-align: center">{{ $loop->iteration }}</th>
                        <td style="text-align: center">{{ $user->name }}</td>
                        <td style="text-align: center">{{ $user->email }}</td>
                        <td style="text-align: center">{{ $user->username }}</td>
                        <td style="text-align: center">{{ $user->mobil_number }}</td>
                        <td style="text-align: center"><a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btn-sm">Show</a></td>
                        <td style="text-align: center"><a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                        <td>
                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex">  
            {!! $users->links() !!}
        </div>

    </div>
@endsection
