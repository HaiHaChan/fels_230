@extends('layouts.app')

@section('title')
    {{ trans('settings.title.register') }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    {{ trans('settings.title.register') }}
                </div>
                <div class="panel-body">
                    {{ Form::open([
                        'class' => 'form-horizontal',
                        'role' => 'form',
                        'method' => 'POST',
                        'action' => 'Auth\RegisterController@register',
                        'enctype' => 'multipart/form-data',
                    ]) }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">
                                {{ trans('settings.label.name_user') }}
                            </label>

                            <div class="col-md-6">
                                {{ Form::text('name', old('name'), [
                                    'class' => 'form-control',
                                    'id' => 'name',
                                    'required',
                                    'autofocus'
                                ]) }}

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">
                                {{ trans('settings.label.email_address') }}
                            </label>

                            <div class="col-md-6">
                                {{ Form::email('email', old('email'), [
                                    'class' => 'form-control',
                                    'id' => 'email',
                                    'required',
                                ]) }}

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">
                                {{ trans('settings.label.password') }}
                            </label>

                            <div class="col-md-6">
                                {{ Form::password('password', [
                                    'class' => 'form-control',
                                    'id' => 'password',
                                    'required',
                                ]) }}

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">
                                {{ trans('settings.label.confirm_password') }}
                            </label>

                            <div class="col-md-6">
                                {{ Form::password('password_confirmation', [
                                    'class' => 'form-control',
                                    'id' => 'password-confirm',
                                    'required',
                                ]) }}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="avatar" class="col-md-4 control-label">
                                {{ trans('settings.label.avatar') }}
                            </label>

                            <div class="col-md-6">
                                {{ Form::file('avatar', [
                                    'id' => 'avatar',
                                ]) }}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {{ Form::submit(trans('settings.button.register'), [
                                    'class' => 'btn btn-primary',
                                ]) }}
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
