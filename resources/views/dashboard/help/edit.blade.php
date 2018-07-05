@extends('dashboard.layouts.app')

@section('content')

    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="element-box">
                            <div class="element-info">
                                <div class="element-info-with-icon">
                                    <div class="element-info-icon">
                                        <div class="os-icon os-icon-others-43"></div>
                                    </div>
                                    <div class="element-info-text">
                                        <h5 class="element-inner-header">
                                            Help / Edit
                                        </h5>
                                    </div>
                                </div>
                            </div>

                            <form method="post" action="{{route('help.update_item', $help->id)}}">
                                <input type="hidden" name="active" value="1">

                                <div class="row">
                                    {{ csrf_field() }}
                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('question') ? ' has-error has-danger' : '' }}">
                                            <label for="">Question</label>
                                            <input value="{{(old('question'))?old('question'):$help->question}}" name="question" class="form-control" placeholder="Question" type="text">
                                            @if ($errors->has('question'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('question')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('answer') ? ' has-error has-danger' : '' }}">
                                            <label> Answer</label>
                                            <textarea id="answer" class="form-control" name="answer" rows="8" placeholder="Answer">{{(old('answer'))?old('answer'):$help->answer}}</textarea>
                                            @if ($errors->has('answer'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('answer')}}
                                                </div>
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
        var editor = CKEDITOR.replace( 'answer' );
    </script>
@endsection