@extends('layouts.app-master')

@section('content')
    
    <h1 class="mb-3">@lang('user.title.list_of_user_registed')</h1>

    <div class="bg-light p-4 rounded">
        <h1>@lang('user.title.users')</h1>
        <div class="lead">
            @lang('user.title.manage_your_users_here')
            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right">@lang('user.button.add_new_user')</a>
        </div>
        
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-responsive">
           
            <thead>
            <tr>
                <th scope="col" style="text-align: center">@lang('user.table.no')</th>
                <th scope="col" style="text-align: center">@lang('user.table.name')</th>
                <th scope="col" style="text-align: center">@lang('user.table.mobile_no')</th>
                <th scope="col" style="text-align: center">@lang('user.table.ic_no')</th>
                <th scope="col" style="text-align: center">@lang('user.table.email')</th>
                <th scope="col" style="text-align: center">@lang('user.table.username')</th>
                <th scope="col" width="1%" colspan="3" style="text-align: center">@lang('user.table.action')</th>    
            </tr>
            </thead>
           
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th style="text-align: center">{{ $loop->iteration }}</th>
                        <td style="text-align: center">{{ $user->name }}</td>
                        <td style="text-align: center">{{ $user->mobile_number }}</td>
                        <td style="text-align: center">{{ $user->ic_number }}</td>
                        <td style="text-align: center">{{ $user->email }}</td>
                        <td style="text-align: center">{{ $user->username }}</td>
                        <td style="text-align: center"><a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btn-sm">@lang('user.button.show')</a></td>
                        <td style="text-align: center"><a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">@lang('user.button.edit')</a></td>
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
