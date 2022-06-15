@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>@lang('user.title.add_new_user')</h1>
        <div class="lead">
            @lang('user.title.add_new_user_and_assign_role')
        </div>

        <div class="container mt-4">
            <form method="POST" action="">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{ old('name') }}" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="Name" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="ic_number" class="form-label">IC Number</label>
                    <input value="{{ old('ic_number') }}" 
                        type="text" 
                        class="form-control" 
                        name="ic_number" 
                        placeholder="IC Number" required>

                    @if ($errors->has('ic_number'))
                        <span class="text-danger text-left">{{ $errors->first('ic_number') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ old('email') }}"
                        type="email" 
                        class="form-control" 
                        name="email" 
                        placeholder="Email address" required>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input value="{{ old('username') }}"
                        type="text" 
                        class="form-control" 
                        name="username" 
                        placeholder="Username" required>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="mobile_number" class="form-label">Mobile Number</label>
                    <input value="{{ old('mobile_number') }}" 
                        type="text" 
                        class="form-control" 
                        name="mobile_number" 
                        placeholder="Mobile Number" required>

                    @if ($errors->has('mobile_number'))
                        <span class="text-danger text-left">{{ $errors->first('mobile_number') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Save user</button>
                <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection
