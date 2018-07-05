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
                                        <div class="os-icon os-icon-user-male-circle"></div>
                                    </div>
                                    <div class="element-info-text">
                                        <h5 class="element-inner-header">
                                            About Us
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <form method="post" action="">
                                <div class="row">
                                    {{ csrf_field() }}
                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('heading_1') ? ' has-error has-danger' : '' }}">
                                            <label for="">Heading 1</label><input value="{{old('heading_1')}}"
                                                                                name="heading_1" class="form-control" placeholder="Heading 1" type="text">
                                            @if ($errors->has('heading_1'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('heading_1')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('title') ? ' has-error has-danger' : '' }}">
                                            <label for="">Title (SEO)</label><input value="{{old('title')}}"
                                                                                    name="title" class="form-control" placeholder="Title" type="text">
                                            @if ($errors->has('title'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('title')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('text_1') ? ' has-error has-danger' : '' }}">
                                            <label> Text 1</label>
                                            <textarea class="form-control" name="text_1" rows="5" placeholder="Text 1">{{old('text_1')}}</textarea>
                                            @if ($errors->has('text_1'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('text_1')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('text_2') ? ' has-error has-danger' : '' }}">
                                            <label> Text 2</label>
                                            <textarea class="form-control" name="text_2" rows="5" placeholder="Text 2">{{old('text_2')}}</textarea>
                                            @if ($errors->has('text_2'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('text_2')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('heading_2') ? ' has-error has-danger' : '' }}">
                                            <label for="">Heading 2</label><input value="{{old('heading_2')}}"
                                                                                  name="heading_2" class="form-control" placeholder="Heading 2" type="text">
                                            @if ($errors->has('heading_2'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('heading_2')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('text_3') ? ' has-error has-danger' : '' }}">
                                            <label> Text 3</label>
                                            <textarea class="form-control" name="text_3" rows="5" placeholder="Text 3">{{old('text_3')}}</textarea>
                                            @if ($errors->has('text_3'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('text_3')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('text_4') ? ' has-error has-danger' : '' }}">
                                            <label> Text 4</label>
                                            <textarea class="form-control" name="text_4" rows="5" placeholder="Text 4">{{old('text_4')}}</textarea>
                                            @if ($errors->has('text_4'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('text_4')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('photo') ? ' has-error has-danger' : '' }}">
                                            <label for=""> Photo</label>
                                            <input value="" name="photo" class="form-control"
                                                   placeholder="Photo" type="file">
                                            @if ($errors->has('photo'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('photo')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('caption') ? ' has-error has-danger' : '' }}">
                                            <label for="">Photo caption</label><input value="{{old('caption')}}"
                                                                                  name="caption" class="form-control" placeholder="Photo caption" type="text">
                                            @if ($errors->has('caption'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('caption')}}
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
