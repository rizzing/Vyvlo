@extends('layouts.pages')

@section('title')
    Subscribe
@endsection

@section('content')

    <section id="subscribe_form" class="">
        <div class="page_container">
            <h2 class="page_title">Thank you</h2>
            <div class="title fs14">
                Thank you for considering subscribing to our newsletter
            </div>

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
                    <div class="btn_block">
                        <button type="button" class="btn_blue subs_form_submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    @include('pages.modal.subscribe')
@endsection