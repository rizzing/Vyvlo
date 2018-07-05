@extends('dashboard.layouts.app')

@section('content')

    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">
                        <div class="element-box">
                            <div class="element-info">
                                <div class="element-info-with-icon">
                                    <div class="element-info-icon">
                                        <div class="os-icon os-icon-star-full"></div>
                                    </div>
                                    <div class="element-info-text">
                                        <h5 class="element-inner-header">
                                            Home page / Features / Edit
                                        </h5>
                                    </div>
                                </div>
                            </div>

                            <form method="post" action="">
                                <div class="row">
                                    {{ csrf_field() }}
                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('title') ? ' has-error has-danger' : '' }}">
                                            <label for="">Title</label><input value="{{old('title')}}"
                                                                                 name="title" class="form-control" placeholder="Title" type="text">
                                            @if ($errors->has('title'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('title')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('sub_title') ? ' has-error has-danger' : '' }}">
                                            <label for="">Sub title</label><input value="{{old('sub_title')}}"
                                                                              name="title" class="form-control" placeholder="Sub title" type="text">
                                            @if ($errors->has('sub_title'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('sub_title')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('description') ? ' has-error has-danger' : '' }}">
                                            <label> Description</label>
                                            <textarea class="form-control" name="description" rows="5" placeholder="Description">{{old('description')}}</textarea>
                                            @if ($errors->has('description'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('description')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('image') ? ' has-error has-danger' : '' }}">
                                            <label for=""> Image</label>
                                            <input value="" name="image" class="form-control"
                                                   placeholder="Image" type="file">
                                            @if ($errors->has('image'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('image')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                                <div class="form-buttons-w"><button class="btn btn-primary" type="button"> Update</button></div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
