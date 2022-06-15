@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>@lang('user.title.update_user')</h1>
        <div class="lead">
            
        </div>
        
        <div class="container mt-4">
            <form method="post" action="{{ route('users.update', $user->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">@lang('user.form.name')</label>
                    <input value="{{ $user->name }}" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="@lang('user.form.name')" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="mobile_number" class="form-label">@lang('user.form.mobile_no')</label>
                    <input value="{{ $user->mobile_number }}" 
                        type="text" 
                        class="form-control" 
                        name="mobile_number" 
                        placeholder="@lang('user.form.mobile_no')" required>

                    @if ($errors->has('mobile_number'))
                        <span class="text-danger text-left">{{ $errors->first('mobile_number') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="ic_number" class="form-label">@lang('user.form.ic_no')</label>
                    <input value="{{ $user->ic_number }}" 
                        type="text" 
                        class="form-control" 
                        name="ic_number" 
                        placeholder="@lang('user.form.ic_no')" required>

                    @if ($errors->has('ic_number'))
                        <span class="text-danger text-left">{{ $errors->first('ic_number') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">@lang('user.form.email')</label>
                    <input value="{{ $user->email }}"
                        type="email" 
                        class="form-control" 
                        name="email" 
                        placeholder="@lang('user.form.email')" required>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">@lang('user.form.username')</label>
                    <input value="{{ $user->username }}"
                        type="text" 
                        class="form-control" 
                        name="username" 
                        placeholder="@lang('user.form.username')" required>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Update user</button>
                <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</button>
            </form>
        </div>

    </div>
@endsection
