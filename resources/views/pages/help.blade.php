@extends('layouts.pages')

@section('title')
    {{ $data->title }}
@endsection

@section('content')

    <section id="help">
        <div class="page_container">
            <h1 class="page_title">{{ $data->heading }}</h1>
            <div class="faq_list text_block">
                @foreach($help_list as $item)
                    <div class="faq_item">
                        <div class="faq_question">{!! $item->question !!}</div>
                        <div class="faq_answer">{!! $item->answer !!}</div>
                        <div class="arrow open_answer"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="feedback_form">
        <div class="page_container">
            <div class="title">Can't find what you're looking for? Please contact us using the form below:</div>

            <div class="form_container">
                <form action="" class="custom_form" method="post">
                    <div class="form_group">
                        <label for="name">Full name</label>
                        <input id="name" type="text" name="name" value="">
                        <span class="error_msg">Field is required</span>
                    </div>
                    <div class="form_group">
                        <label for="email">Email</label>
                        <input id="email" type="text" name="email" value="">
                        <span class="error_msg">Field is required</span>
                    </div>
                    <div class="form_group">
                        <label for="email">Select help type</label>
                        <div>
                            <select name="help_type" class="selectpicker" title="Select" >
                                <option value="1">Value</option>
                                <option value="2">Value</option>
                                <option value="3">Value</option>
                            </select>
                        </div>
                        <span class="error_msg">Field is required</span>
                    </div>
                    <div class="form_group">
                        <label for="email">Message</label>
                        <textarea name="message"></textarea>
                        <span class="error_msg">Field is required</span>
                    </div>

                    <div class="btn_block">
                        <button type="button" class="btn_blue feedback_form_submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    @include('pages.modal.feedback')

@endsection