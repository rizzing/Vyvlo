@extends('dashboard.layouts.app')
@section('content')
    <div class="content-i">
        <div class="content-box"><div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="element-box">
                            <form method="post" action="{{route('profile.update')}}" enctype="multipart/form-data" {{--id="formValidate"--}}{{--novalidate="true"--}}>
                                {{ csrf_field() }}
                                <div class="element-info">
                                    <div class="element-info-with-icon">
                                        <div class="element-info-icon">
                                            <div class="os-icon os-icon-wallet-loaded"></div>
                                        </div>
                                        <div class="element-info-text">
                                            <h5 class="element-inner-header">
                                                Profile Settings
                                            </h5>
                                            <div class="element-inner-desc">
                                                Profile settings page.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--password --}}
                                {{--<div class="row element-info">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Password</label><input class="form-control" data-minlength="6" placeholder="Password" type="password">
                                            <div class="help-block form-text text-muted form-control-feedback">
                                                Minimum of 6 characters
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Confirm Password</label><input class="form-control" data-match-error="Passwords don't match" placeholder="Confirm Password" type="password">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                --}}
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('name') ? ' has-error has-danger' : '' }}">
                                            <label for=""> Name</label><input value="{{(old('name'))?old('name'):$user->name}}"
                                                              name="name" class="form-control" placeholder="Name" type="text">
                                            @if ($errors->has('name'))
                                                    <div class="help-block form-text with-errors form-control-feedback">
                                                        {{$errors->first('name')}}
                                                    </div>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('last_name') ? ' has-error has-danger' : '' }}">
                                            <label for=""> Last name</label><input value="{{(old('last_name'))?old('last_name'):$user->last_name}}"
                                               name="last_name" placeholder="last name" class="form-control" type="text">
                                            @if ($errors->has('last_name'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('last_name')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="form-group{{ $errors->has('avatar') ? ' has-error has-danger' : '' }}">--}}
                                    {{--<label for=""> Upload your avatar</label>--}}
                                    {{--<input value="" name="avatar" class="form-control"--}}
                                           {{--placeholder="Upload your avatar" type="file">--}}
                                    {{--@if ($errors->has('avatar'))--}}
                                        {{--<div class="help-block form-text with-errors form-control-feedback">--}}
                                            {{--{{$errors->first('avatar')}}--}}
                                        {{--</div>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                                <div class="form-buttons-w">
                                    <button class="btn btn-primary cursor_pointer" type="submit"> Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection