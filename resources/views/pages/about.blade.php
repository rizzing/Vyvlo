@extends('layouts.pages')

@section('title')
    About us
@endsection

@section('content')

    <section id="about">
        <div class="buble_green"></div>
        <div class="mobile_hidden">
            <div class="buble_yellow"></div>
            <div class="buble_blue"></div>
            <div class="buble_red"></div>
        </div>


        <div class="page_container">
            <h1 class="page_title">About us</h1>

            <div class="top_block">
                <div class="text_1">
                    At Vyvlo, we believe that the best illnesses are the ones that never occur. That’s why we are working towards a future where no one will be diagnosed with a disease that could have been easily prevented. We believe that educating and empowering individuals with targeted knowledge specific to their medical needs is the key to achieving our goal. Humans don’t stay sick forever, but the decisions made during an illness can have lasting repercussions for the years to come.
                    <div class="buble_yellow modile_visible"></div>
                </div>
                <div class="text_2">
                    That’s why we are working to create a virtual patient roadmap that monitors patient healthcare decisions and history as the patient makes their journey through life. When the need arises, Vyvlo has a consolidated and easily accessible copy of patient records, so that any team of doctors can use the patients past to best make decisions for the patients future. Vyvlo puts you first, and is created with only one goal in mind- to give you the best health possible.
                </div>
            </div>

            <h2 class="page_title">
                <span>Our founding</span>
                <div class="buble_blue modile_visible"></div>
            </h2>

            <div class="bottom_block">
                <div class="photo_block">
                    <img src="/assets/frontend/img/about/photo.png" alt="Nilu with his dog Rancho">
                    <div class="sign">— Nilu with his dog Rancho</div>
                </div>

                <div class="text_1">
                    Vyvlo was founded by Nilu Kundagrami in 2017.  When Nilu’s daughter was diagnosed with cancer, Nilu noticed a distinct lack of record sharing and a lack of a proper medical alerting system. The negligence within the healthcare system was impacting patient care, as Nilu’s own daughter had to undergo extraneous procedures that could have been easily avoided if the information was available and the proper preventative maintenance had been taken.
                    <div class="buble_red modile_visible"></div>
                </div>

                <div class="text_2">
                    After his daughter’s recovery, Nilu founded Vyvlo, to fix the fallacies in the system, so that no one had to suffer from unnecessary procedures ever again. Vyvlo was created to be your biggest advocate, and to consolidate all your needs into one easy to use platform, so that you can take charge of your own healthcare.
                </div>
            </div>
        </div>
    </section>

    <section id="feedback_form" class="about_us">
        <div class="page_container">
            <h2 class="page_title">Contact Us</h2>
            <div class="title fs14">
                Please don't hesitate to contact us about any <br class="mobile_hidden" />
                question you might be interested in.
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
                    <div class="form_group">
                        <label for="email">Message</label>
                        <textarea name="message"></textarea>
                        <span class="error_msg">Field is required</span>
                    </div>

                    <div class="btn_block">
                        <button type="button" class="btn_blue contact_form_submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    @include('pages.modal.contact')
@endsection