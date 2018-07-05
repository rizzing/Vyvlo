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
                                        <div class="os-icon os-icon-calendar-time"></div>
                                    </div>
                                    <div class="element-info-text">
                                        <h5 class="element-inner-header">
                                            Blog / Edit
                                        </h5>
                                    </div>
                                </div>
                            </div>

                            <form method="post" action="{{route('blog.update_item', $blog->id)}}" enctype="multipart/form-data">
                                <div class="row">
                                    {{ csrf_field() }}
                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('title') ? ' has-error has-danger' : '' }}">
                                            <label for="">Title</label>
                                            <input required value="{{(old('title'))?old('title'):$blog->title}}" name="title" class="form-control" placeholder="Title" type="text">
                                            @if ($errors->has('title'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('title')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group{{ $errors->has('author') ? ' has-error has-danger' : '' }}">
                                            <label for="">Author</label>
                                            <input required value="{{(old('author'))?old('author'):$blog->author}}" name="author" class="form-control" placeholder="Author" type="text">
                                            @if ($errors->has('author'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('author')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group{{ $errors->has('date') ? ' has-error has-danger' : '' }}">
                                            <label for="">Date</label>
                                            <div class="date-input">
                                                <input value="{{(old('date'))?old('date'):$blog->date}}" name="date" class="form-control single-daterange" placeholder="Date" type="text">
                                            </div>

                                            @if ($errors->has('date'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('date')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('description') ? ' has-error has-danger' : '' }}">
                                            <label> Description</label>
                                            <textarea id="description" required class="form-control" name="description" rows="10" placeholder="Description">{{(old('description'))?old('description'):$blog->description}}</textarea>
                                            @if ($errors->has('description'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('description')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('video') ? ' has-error has-danger' : '' }}">
                                            <label for="">Video</label><input value="{{(old('video'))?old('video'):$blog->video}}"
                                                                              name="video" class="form-control" placeholder="Video" type="text">
                                            @if ($errors->has('video'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('video')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('image') ? ' has-error has-danger' : '' }}">
                                            <label for=""> Image</label>
                                            <input value="" name="image" class="form-control" placeholder="Image" type="file">
                                            @if ($errors->has('image'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('image')}}
                                                </div>
                                            @endif
                                            @if(isset($blog->image))
                                                <image style="max-width: 100%;margin: 30px 0;" src="{{ asset(config('images.blog.middle.public_path') . $blog->image) }}" alt="">
                                            @endif
                                        </div>
                                    </div>

                                </div>

                                <div class="form-buttons-w"><button class="btn btn-primary" type="submit"> Update</button></div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        var editor = CKEDITOR.replace( 'description' );
    </script>
@endsection
