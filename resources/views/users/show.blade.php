@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>@lang('user.title.show_user')</h1>
        <div class="lead">
            
        </div>
        
        <div class="container mt-4">
            
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">@lang('user.form.name')</label>
                <div class="col-lg-3 col-xl-3">
                    <label class="form-control form-control-solid form-control-sm">{{ $user->name }}</label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">@lang('user.form.mobile_no')</label>
                <div class="col-lg-3 col-xl-3">
                    <label class="form-control form-control-solid form-control-sm" ><b id="p1">{{ $user->mobile_number }}</b></label>
                </div>
                <div class="col-lg-3 col-xl-3">
                    <button class="btn btn-secondary btn-sm" onclick="copyToClipboard('#p1')">@lang('user.button.copy')</button>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">@lang('user.form.ic_no')</label>
                <div class="col-lg-3 col-xl-3">
                    <label class="form-control form-control-solid form-control-sm">{{ $user->ic_number }}</label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">@lang('user.form.email')</label>
                <div class="col-lg-3 col-xl-3">
                    <label class="form-control form-control-solid form-control-sm"><b  id="p2">{{ $user->email }}</b></label>
                </div>
                <div class="col-lg-3 col-xl-3">
                    <button class="btn btn-secondary btn-sm" onclick="copyToClipboard('#p2')">@lang('user.button.copy')</button>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">@lang('user.form.username')</label>
                <div class="col-lg-3 col-xl-3">
                    <label class="form-control form-control-solid form-control-sm">{{ $user->username }}</label>
                </div>
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">@lang('user.button.edit')</a>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">@lang('user.button.back')</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        // Copy to clipboard function
        function copyToClipboard(element) {
            // Create temporary variable
            var $temp = $("<input>");
            $("body").append($temp);
            // Select all content from element
            $temp.val($(element).html()).select();
            // Copy selected content
            document.execCommand("copy");
            // Remove temporary variable
            $temp.remove();
        }
    </script>
@endsection
