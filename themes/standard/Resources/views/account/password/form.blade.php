@extends('standard::layouts.default')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Change you password
    </div>
    <div class="panel-body">
        @include('standard::layouts.partials.global_error')
        <form role="form" action="{{ route('account.password') }}" method="post">
            {!! Form::token() !!}
            <div class="form-group @if ($errors->has('old_password')) has-error @endif">
                <label for="old_password">Old password</label>
                <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Enter your old password">
                @if ($errors->has('old_password'))
                    <span class="help-block">{{ $errors->first('old_password') }} </span>
                @endif
            </div>
            <div class="form-group @if ($errors->has('new_password')) has-error @endif">
                <label for="new_password">New password</label>
                <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Enter your old password">
                @if ($errors->has('new_password'))
                    <span class="help-block">{{ $errors->first('new_password') }} </span>
                @endif
            </div>
            <div class="form-group @if ($errors->has('new_password_again')) has-error @endif">
                <label for="new_password_again">New password again</label>
                <input type="password" class="form-control" name="new_password_again" id="new_password_again" placeholder="Enter your old password">
                @if ($errors->has('new_password_again'))
                    <span class="help-block">{{ $errors->first('new_password_again') }} </span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Change password</button>
        </form>
    </div>
</div>
@stop