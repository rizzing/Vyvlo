@extends('layouts.home')

@section('title')
   {{ $data->title }}
@endsection

@section('content')

<div id="fullpage">
    <section id="top_block" class="full_block section gray_bg" data-anchor="top-block">

        <div id="blue_screen">
            <div class="modile_visible rel_20">
                <h1>It’s about your Health</h1>
            </div>

            <div class="table_box phone_block">
                <div class="table_cell">
                    <div class="bs_content">

                        <div class="bs_left">
                            <div class="booble_1">
                                <img class="desktop" src="/assets/frontend/img/svg/oval-2.svg" alt="">
                                <img class="mobile" src="/assets/frontend/img/svg/mobile/oval-2.svg" alt="">
                            </div>
                            <img class="phone" src="/assets/frontend/img/phone.png" alt="">
                        </div>
                        <div class="bs_right">
                            <div class="bs_text">
                                <div class="table_box">
                                    <div class="table_cell">
                                        <h1>It’s about your Health</h1>
                                        <div class="buttons">
                                            <a class="btn_app_store" href="#"></a>
                                            <a class="btn_gogle_play" ></a>
                                            <div class="booble_2">
                                                <img src="/assets/frontend/img/svg/oval-1.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modile_visible buttons">
                <a class="btn_app_store" href="#"></a>
                <a class="btn_gogle_play" ></a>
            </div>
            <div class="booble_3">
                <img class="desktop" src="/assets/frontend/img/svg/oval-3.svg" alt="">
                <img class="mobile" src="/assets/frontend/img/svg/mobile/oval-3.svg" alt="">
            </div>
            <div class="booble_2 modile_visible">
                <img src="/assets/frontend/img/svg/oval-1.svg" alt="">
            </div>

        </div>
        <div class="bottom_box scroll_down">
            <div class="mouse_icon"></div>
            <div class="mouse_arrow_icon"></div>
        </div>
        <div class="block_top text_bottom">
            <h2>{{ $data->heading }}</h2>
        </div>

        <div class="iphone_container">
            <div class="table_box">
                <div class="table_cell">
                    <div class="iphone">
                        <img class="img_iphone" src="/assets/frontend/img/iphone.png" alt="">
                        <div class="iphone_screen">
                            <img src="/assets/frontend/img/menu.png" alt="">
                            <img class="dashboard" src="/assets/frontend/img/dashboard.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_page_nav_conteiner">
            <div class="table_box">
                <div class="table_cell">
                    <div class="main_page_nav">
                        <div class="pn_block left_block">
                            <ul>
                                <li>
                                    <div class="table_box">
                                        <div class="table_cell">
                                            <div class="pn_icon">
                                                <img class="icon_pill" src="/assets/frontend/img/svg_nav/pill.svg" alt="Your digital pillbox">
                                            </div>
                                            <br />
                                            <a class="feature_link" data-num="1" href="#">Your digital pillbox</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="table_box">
                                        <div class="table_cell">
                                            <div class="pn_icon">
                                                <img class="icon_heart" src="/assets/frontend/img/svg_nav/heart.svg" alt="Universal health card">
                                            </div>
                                            <br />
                                            <a class="feature_link" data-num="2" href="#">Universal health card</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="table_box">
                                        <div class="table_cell">
                                            <div class="pn_icon">
                                                <img class="icon_heart_2" src="/assets/frontend/img/svg_nav/heart_2.svg" alt="Care Management">
                                            </div>
                                            <br />
                                            <a class="feature_link" data-num="3" href="#">Care Management</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="table_box">
                                        <div class="table_cell">
                                            <div class="pn_icon">
                                                <img class="icon_list" src="/assets/frontend/img/svg_nav/list.svg" alt="Tasks">
                                            </div>
                                            <br />
                                            <a class="feature_link" data-num="4" href="#">Tasks</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="pn_block central_block">

                        </div>
                        <div class="pn_block right_block">
                            <ul>
                                <li>
                                    <div class="table_box">
                                        <div class="table_cell">
                                            <div class="pn_icon">
                                                <img class="icon_users" src="/assets/frontend/img/svg_nav/users.svg" alt="Multiple users on single device">
                                            </div>
                                            <br />
                                            <a class="feature_link" data-num="5" href="#">Multiple users on single device</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="table_box">
                                        <div class="table_cell">
                                            <div class="pn_icon">
                                                <img class="icon_checkmark" src="/assets/frontend/img/svg_nav/checkmark.svg" alt="Take your drugs safely">
                                            </div>
                                            <br />
                                            <a class="feature_link" data-num="6" href="#">Take your drugs safely</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="table_box">
                                        <div class="table_cell">
                                            <div class="pn_icon">
                                                <img class="icon_messages" src="/assets/frontend/img/svg_nav/messages.svg" alt="Messages">
                                            </div>
                                            <br />
                                            <a class="feature_link" data-num="7" href="#">Messages</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="table_box">
                                        <div class="table_cell">
                                            <div class="pn_icon">
                                                <img class="icon_security" src="/assets/frontend/img/svg_nav/security.svg" alt="Security">
                                            </div>
                                            <br />
                                            <a class="feature_link" data-num="8" href="#">Security</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block_bottom">
            <a class="and_more" href="#">And more</a>
            <div class="text">
                <span>Smart notification system</span>
                <span>Track everything you want</span>
            </div>
        </div>
    </section>

    <section id="feature_1" class="feature_box white_bg section" data-num="1" data-anchor="feature-1">
        <div class="buble_green buble_item"></div>
        <div class="buble_blue buble_item"></div>
        <div class="buble_red buble_item"></div>
        <div class="page_container">
            <div class="table_box feature_item">
                <div class="table_cell img_container">
                    <img style="height: 663px" src="/assets/frontend/img/feature_images/feature_img_1.png" alt="">
                </div>
                <div class="table_cell">
                    <img class="image" src="/assets/frontend/img/feature_icons/feature_icon_1.svg" alt="Your digital pillbox">
                    <h2>Your digital pillbox</h2>
                    <div class="sub_title">All your pills in one place.</div>
                    <div class="description">
                        You will never forget to take your medication on time. Even better, you can keep track of all the past medication you’ve taken, no matter how long ago it was. If you change your doctor, or you see multiple doctors, Vyvlo keeps a copy of your consolidated medical records for easy transfer between physician offices.
                    </div>

                </div>
                <div class="modile_visible mobile_image">
                    <img style="height: 663px" src="/assets/frontend/img/feature_images/feature_img_1.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="feature_2" class="feature_box section gray_bg" data-num="2" data-anchor="feature-2">
        <div class="buble_green buble_item"></div>
        <div class="buble_blue buble_item"></div>
        <div class="buble_red buble_item"></div>
        <div class="page_container">
            <div class="table_box feature_item">
                <div class="table_cell img_container">
                    <img style="height: 621px" src="/assets/frontend/img/feature_images/feature_img_2.png" alt="">
                </div>
                <div class="table_cell">
                    <img class="image" src="/assets/frontend/img/feature_icons/feature_icon_2.svg" alt="Universal health card">
                    <h2>Universal health card</h2>
                    <div class="description">
                        Vyvlo consolidates the healthcare needs and history for you and your family into one convenient and easy to use platform. You can easily track allergies, immunizations, medications, past or upcoming physician visits, or any other healthcare needs for each family member, and ensure that you are on top of the game when it comes to the health of your family.
                    </div>
                </div>
                <div class="modile_visible mobile_image">
                    <img style="height: 621px" src="/assets/frontend/img/feature_images/feature_img_2.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="feature_3" class="feature_box white_bg section" data-num="3" data-anchor="feature-3">
        <div class="buble_green buble_item"></div>
        <div class="buble_blue buble_item"></div>
        <div class="buble_red buble_item"></div>
        <div class="page_container">
            <div class="table_box feature_item">
                <div class="table_cell img_container">
                    <img style="height: 778px" src="/assets/frontend/img/feature_images/feature_img_3.png" alt="">
                </div>
                <div class="table_cell">
                    <img class="image" src="/assets/frontend/img/feature_icons/feature_icon_3.svg" alt="Care Management">
                    <h2>Care Management</h2>
                    <div class="description">
                        Keep track of all important to-dos and events, such as appointments and screenings.  You can also add tasks to your calendar. Tasks are quick little reminders about healthcare needs that will be coming up soon or way out in the future – say every three years heart echo for a cancer survivor.
                    </div>
                </div>
                <div class="modile_visible mobile_image">
                    <img  src="/assets/frontend/img/feature_images/feature_img_3_mob.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="feature_4" class="feature_box section gray_bg" data-num="4" data-anchor="feature-4">
        <div class="buble_yellow buble_item"></div>
        <div class="buble_blue buble_item"></div>
        <div class="buble_red buble_item"></div>
        <div class="page_container">
            <div class="table_box feature_item">
                <div class="table_cell img_container">
                    <img style="height: 661px" src="/assets/frontend/img/feature_images/feature_img_4.png" alt="">
                </div>
                <div class="table_cell">
                    <img class="image" src="/assets/frontend/img/feature_icons/feature_icon_4.svg" alt="Reminders">
                    <h2>Reminders</h2>
                    <div class="description">
                        The Unique Care Management functionality allows someone else to co-manage a member’s health.  An aging father can list his son as his Caregiver. That way, the caregiver has the visibility that he or she needs to make the most informed decision regarding the patient’s health.
                    </div>
                </div>
                <div class="modile_visible mobile_image">
                    <img style="height: 661px" src="/assets/frontend/img/feature_images/feature_img_4.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="feature_5" class="feature_box white_bg section" data-num="5" data-anchor="feature-5">
        <div class="buble_yellow buble_item"></div>
        <div class="buble_blue buble_item"></div>
        <div class="buble_red buble_item"></div>
        <div class="page_container">
            <div class="table_box feature_item">
                <div class="table_cell img_container">
                    <img style="height: 621px" src="/assets/frontend/img/feature_images/feature_img_5.png" alt="">
                </div>
                <div class="table_cell">
                    <img class="image" src="/assets/frontend/img/feature_icons/feature_icon_5.svg" alt="Multiple users on single device">
                    <h2>Multiple users on single device</h2>
                    <div class="description">
                        Vyvlo is created as a family platform, so you can create one account and add multiple users. This will consolidate everyone’s healthcare needs into one easy to read home screen.
                    </div>
                </div>
                <div class="modile_visible mobile_image">
                    <img style="height: 621px" src="/assets/frontend/img/feature_images/feature_img_5.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="feature_6" class="feature_box section gray_bg" data-num="6" data-anchor="feature-6">
        <div class="buble_purple buble_item"></div>
        <div class="buble_blue buble_item"></div>
        <div class="buble_red buble_item"></div>
        <div class="page_container">
            <div class="table_box feature_item">
                <div class="table_cell img_container">
                    <img style="height: 621px" src="/assets/frontend/img/feature_images/feature_img_6.png" alt="">
                </div>
                <div class="table_cell">
                    <img class="image" src="/assets/frontend/img/feature_icons/feature_icon_6.svg" alt="Take your drugs safely">
                    <h2>Take your drugs safely</h2>
                    <div class="description">
                        Check your medications with one another and be alerted to drug interactions and any potential side effects. If you want to take an over the counter drug and test it against your current medication regimen, Vyvlo allows for spot checks as well.
                    </div>
                </div>
                <div class="modile_visible mobile_image">
                    <img style="height: 621px" src="/assets/frontend/img/feature_images/feature_img_6.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="feature_7" class="feature_box white_bg section" data-num="7" data-anchor="feature-7">
        <div class="buble_green buble_item"></div>
        <div class="buble_blue buble_item"></div>
        <div class="buble_red buble_item"></div>
        <div class="page_container">
            <div class="table_box feature_item">
                <div class="table_cell img_container">
                    <img  style="height: 621px" src="/assets/frontend/img/feature_images/feature_img_7.png" alt="">
                </div>
                <div class="table_cell">
                    <img class="image" src="/assets/frontend/img/feature_icons/feature_icon_7.svg" alt="Messages">
                    <h2>Messages</h2>
                    <div class="description">
                        Use Vyvlo to send and receive texts and photos between Vyvlo account holders. This way, you can easily and securely send messages and photographs to your physicians, without the hassle of a doctors visit.
                    </div>
                </div>
                <div class="modile_visible mobile_image">
                    <img style="height: 621px" src="/assets/frontend/img/feature_images/feature_img_7.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="feature_8" class="feature_box section gray_bg" data-num="8" data-anchor="feature-8">
        <div class="buble_green buble_item"></div>
        <div class="buble_blue buble_item"></div>
        <div class="buble_red buble_item"></div>
        <div class="page_container">
            <div class="table_box feature_item">
                <div class="table_cell img_container">
                    <img style="height: 621px" src="/assets/frontend/img/feature_images/feature_img_8.png" alt="">
                </div>
                <div class="table_cell">
                    <img class="image" src="/assets/frontend/img/feature_icons/feature_icon_8.svg" alt="Security">
                    <h2>Security</h2>
                    <div class="description">
                        Vyvlo puts privacy and security first.  Like a banking app, a user can setup Vyvlo to be unlocked by a password or TouchID. Vyvlo also encrypts all data on the Vyvlo servers, to ensure maximum security.
                    </div>
                </div>
                <div class="modile_visible mobile_image">
                    <img  src="/assets/frontend/img/feature_images/feature_img_8_mob.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="last_block" class="feature_box white_bg scroll_block section" data-num="9" data-anchor="feature-9">
        <div class="scroll_block">
            <div id="faq" class="white_bg">
                <div class="block_top text_bottom">
                    <h2>FAQ</h2>
                    <div class="row faq_list">
                        <?php
                        $middle = ceil(count($faq_list)/2);
                        ?>

                        <div class="col-xs-100 col-md-50">
                            @foreach($faq_list as $key => $item)
                                @if($key < $middle)
                                    <div class="faq_item">
                                        <div class="faq_question">{!! $item->question !!}</div>
                                        <div class="faq_answer">{!! $item->answer !!}</div>
                                        <div class="arrow open_answer"></div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-xs-100 col-md-50">
                            @foreach($faq_list as $key => $item)
                                @if($key >= $middle)
                                    <div class="faq_item">
                                        <div class="faq_question">{!! $item->question !!}</div>
                                        <div class="faq_answer">{!! $item->answer !!}</div>
                                        <div class="arrow open_answer"></div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <h2>Subscribe to our newsletter</h2>
                    <div class="btn_block">
                        <a href="#subscribeForm" data-toggle="modal" class="btn_blue mobile_hidden">Subscribe Now</a>
                        <div class="modile_visible">
                            <a href="{{ route('page.subscribe') }}" class="btn_blue">Subscribe Now</a>
                        </div>
                    </div>
                    <div class="bottom_text">*Side effect feature is not available in current version</div>
                </div>
            </div>
            <footer id="footer">
                <div class="page_container">
                    <div class="row">
                        <div class="col-xs-100 col-md-30">
                            <a href="/" class="logo"></a>
                        </div>
                        <div class="col-xs-100 col-md-40">
                            <ul class="footer_nav">
                                <li><a href="{{ route('page.help') }}">Help</a></li>
                                <li><a href="{{ route('page.terms') }}">Terms of Use</a></li>
                                <li><a href="{{ route('page.about') }}">About Us</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-100 col-md-30">
                            <div class="soc_links">
                                <a class="icon_tw" href="#"></a>
                                <a class="icon_fb" href="#"></a>
                            </div>
                        </div>
                    </div>
                    <div class="copy_text">
                        By using this site, you agree to the <a href="{{ route('page.policy') }}"><span class="b">Privacy Policy</span></a><br /> and <a href="{{ route('page.terms') }}"><span class="b">Terms of Use</span></a>.<br />
                        © 2018 Vyvlo All rights reserved
                    </div>
                </div>
            </footer>
        </div>

    </section>

</div>

<div id="feature_navigation">
    <ul>
        <li data-menuanchor="feature-1"><a data-num="1" href="#feature-1"></a></li>
        <li data-menuanchor="feature-2"><a data-num="2" href="#feature-2"></a></li>
        <li data-menuanchor="feature-3"><a data-num="3" href="#feature-3"></a></li>
        <li data-menuanchor="feature-4"><a data-num="4" href="#feature-4"></a></li>
        <li data-menuanchor="feature-5"><a data-num="5" href="#feature-5"></a></li>
        <li data-menuanchor="feature-6"><a data-num="6" href="#feature-6"></a></li>
        <li data-menuanchor="feature-7"><a data-num="7" href="#feature-7"></a></li>
        <li data-menuanchor="feature-8"><a data-num="8" href="#feature-8"></a></li>
    </ul>
</div>

@include('pages.modal.subscribe')

@endsection

@section('js')
    <script>
        $(document).ready(function(){
            JS.mainPageFunc();
        });
    </script>
@endsection