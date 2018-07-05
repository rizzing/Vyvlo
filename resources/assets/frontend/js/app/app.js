$(document).ready(function () {
    JS.init();
});

var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

var JS = {
    is_page_animation: false,
    animation_delay: 800,
    active_frame: 0,
    clickEvent: '',
    allowScroll: false,

    init: function () {
        if(isMobile.any()){
            JS.clickEvent = 'touchstart';
        }else {
            JS.clickEvent = 'click';
        }

        JS.faqFunc();
        JS.subscribeFunc();
        JS.feedbackFunc();
        JS.contactFunc();
        JS.blogFunc();
    },

    /*START MAIN FUNC*/
    mainPageFunc: function(){
        if(isMobile.any()){
            $('body').removeClass('static');
        }else{
            JS.mainPageAnimateEvent();
            JS.animateEvent();

            JS.transformIphone();
            JS.setNavPosition();
            $(window).resize(function(){
                JS.transformIphone();
                JS.transformFeatures();
            });

            $('#last_block .scroll_block').animate({scrollTop: 0}, 1);
        }


    },

    animateEvent: function(){
        $('body').on('click', '.scroll_down', function(){
            $('#fullpage').addClass('scrollabled');
            $('#header').addClass('white_header');
            JS.setAnimationDealay();
            return false;
        });

        $('body').on('keyup', function(e){
            if(e.keyCode == 32 || e.keyCode == 40){
                if($('#last_block').hasClass('active') && JS.allowScroll === true){
                    $('#last_block .scroll_block').animate({scrollTop: 1000}, 500);
                }
            }
        });

        $('#fullpage').fullpage({
            anchors:['top-block', 'feature-1', 'feature-2', 'feature-3', 'feature-4', 'feature-5', 'feature-6', 'feature-7', 'feature-8', 'feature-9'],
            menu: '#menu',
            navigation: true,
            lockAnchors: true,
            css3: true,
            scrollingSpeed: 800,
            fitToSectionDelay: false,
            onLeave: function(index, nextIndex, direction){
                //if(JS.is_page_animation === true) return false;
                var isScrollabled = $('#fullpage').hasClass('scrollabled');
                JS.active_frame = index;
                if(!isScrollabled && direction === 'down'){if(JS.is_page_animation === true) return false;
                    $('#fullpage').addClass('scrollabled');
                    $('#header').addClass('white_header');
                    JS.setAnimationDealay();
                    return false;
                }else if(isScrollabled && direction === 'down'){
                    if(index === 1){
                        if(JS.is_page_animation === true) return false;
                    }
                    $('#feature_navigation').fadeIn(1000);
                }

                if(nextIndex === 10){
                    $('#feature_navigation').fadeOut(1000);
                    setTimeout(function(){JS.allowScroll = true;}, 500);
                }

                if(isScrollabled && direction === 'up' && nextIndex === 1){
                    $('#feature_navigation').fadeOut(1000);
                }

                if(isScrollabled && direction === 'up' && nextIndex === 9){

                    if($('#last_block .scroll_block').scrollTop() !== 0){
                        $('#last_block .scroll_block').animate({scrollTop: 0}, 500);
                        //return false;
                    }
                    JS.allowScroll = false;
                    $('#feature_navigation').fadeIn(1000);

                }

                JS.animateTopBlock(direction);
                JS.setNavActiveItem(nextIndex-1);
                //JS.setAnimationDealay();
            }
        });
    },

    mainPageAnimateEvent: function(){
        $("body").on(JS.clickEvent, '.feature_link, #feature_navigation li a', function(e) {
            var num = $(this).attr('data-num')*1;
            $('#fp-nav ul li').eq(num).find('a').click();
        });


        if (window.addEventListener){// mozilla, safari, chrome
            window.addEventListener('DOMMouseScroll', wheel, false);
        }

        window.onmousewheel = document.onmousewheel = wheel; // IE, Opera.

        function wheel(event) {
            var delta;
            event = event || window.event;
            if (event.wheelDelta) {
                delta = event.wheelDelta / 120;
                if (window.opera) delta = -delta;
            }
            else if (event.detail) {
                delta = -event.detail / 3;
            }

            JS.animateTopBlock(delta);
        }

    },

    animateTopBlock: function(delta){
        //if(JS.is_page_animation === true) return false;
        var scroll_way = delta > 0 ? 'up' : 'down';
        var isScrollabled = $('#fullpage').hasClass('scrollabled');
        var isTop = $('#top_block').hasClass('active');

        JS.setAnimationDealay();
        if(isScrollabled && scroll_way === 'up' && isTop){
            $('#fullpage').removeClass('scrollabled');
            $('#header').removeClass('white_header');
        }
    },

    mainPageAnimate: function(delta){
        //if(JS.is_page_animation === true) return false;

        var scroll_way = delta > 0 ? 'up' : 'down';
        var isScrollabled = $('#fullpage').hasClass('scrollabled');

        if(!isScrollabled && scroll_way === 'down'){
            if(JS.is_page_animation === true) return false;
            $('#fullpage').addClass('scrollabled');
            $('#header').addClass('white_header');
            JS.setAnimationDealay();
        }else if(isScrollabled && scroll_way === 'up' && JS.active_frame === 0){
            $('#fullpage').removeClass('scrollabled');
            $('#header').removeClass('white_header');
            JS.setAnimationDealay();
        }else if(isScrollabled && scroll_way === 'down'){
            var h = $(window).height()*1;
            if(JS.active_frame === 0){
                if(JS.is_page_animation === true) return false;
                $('.feature_box').removeClass('active');
                $('.feature_box[data-num="1"]').addClass('active');
                $('#feature_navigation').fadeIn(1000);
                JS.active_frame = 1;
            }else{
                var index = $('.feature_box.active').attr('data-num')*1;
                index++;
                if( $('.feature_box[data-num="'+index+'"]').length > 0){
                    JS.active_frame = index;
                    $('.feature_box').removeClass('active');
                    $('.feature_box[data-num="'+index+'"]').addClass('active');

                }
                if(index === 9){
                    $('#feature_navigation').fadeOut(1000);
                }

            }
            JS.changeWindow();

            JS.changeWindow();
            JS.setNavActiveItem();
            JS.setAnimationDealay();
        }else if(isScrollabled && scroll_way === 'up'){
            if(JS.active_frame === 1){
                JS.active_frame = 0;
                $('.feature_box').removeClass('active');
                $('#feature_navigation').fadeOut(500);
            }else{
                var index = $('.feature_box.active').attr('data-num')*1;
                index--;
                if( $('.feature_box[data-num="'+index+'"]').length > 0){
                    JS.active_frame = index;
                    $('.feature_box').removeClass('active');
                    $('.feature_box[data-num="'+index+'"]').addClass('active');
                }
                $('#feature_navigation').fadeIn(500);
            }
            JS.changeWindow();

            JS.setNavActiveItem();
            JS.setAnimationDealay();
        }
    },

    setAnimationDealay: function(delay){
        if(JS.active_frame === 9) return;

        if(typeof delay === 'undefined'){
            delay = JS.animation_delay;
        }
        JS.is_page_animation = true;
        setTimeout(function(){
            JS.is_page_animation = false;
        }, delay);
    },

    transformIphone: function(){
        var h = $(window).height()*1;
        if(h < 1024){
            var scale = (h / 1024);
        }else{
            var scale = 1;
        }
        var new_h = 680*scale;
        var new_w = 420*scale;
        $('#top_block .iphone_container .iphone').css('transform', 'scale('+scale+')');

        $('#top_block #blue_screen .bs_content').css('transform', 'scale('+scale+')');
        $('#top_block .main_page_nav').css('height', new_h+'px');
        $('#top_block .main_page_nav .central_block').css('width', new_w+'px');
    },

    transformFeatures: function(){
        JS.changeWindow();
        JS.setNavPosition();
    },

    setNavPosition: function(){
        var nav_h = $('#feature_navigation').height()*1;
        var top = nav_h/2;
        $('#feature_navigation').css('margin-top', '-'+top+'px')
    },

    goToFeatures: function(num){
        JS.active_frame = num;

        $('.feature_box').removeClass('active');
        $('.feature_box[data-num="'+num+'"]').addClass('active');

        JS.changeWindow();

        $('#feature_navigation').fadeIn(1000);
        JS.setNavActiveItem();
    },

    setNavActiveItem: function(num){
        $('#feature_navigation li a').removeClass('active');
        $('#feature_navigation li a[data-num="'+num+'"]').addClass('active');
    },

    changeWindow: function(){
        var h = $(window).height()*1;
        var margin = JS.active_frame*h;
        $('#fullpage').css('transform', 'translate3d(0px, -'+margin+'px, 0px)');
    },
    /*END MAIN FUNC*/

    /*START SUBSCRIBE FUNC*/
    subscribeFunc: function(){
        $('body').on(JS.clickEvent, '.subs_form_submit', function(){
            var error = false;
            var form = $(this).closest('form');
            JS.formClearError(form);

            var name = form.find('input[name=name]').val();
            var email = form.find('input[name=email]').val();

            if(name === ''){
                form.find('input[name=name]')
                    .closest('.form_group').addClass('group_error');
                error = true;
            }

            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(!pattern.test(email)){
                form.find('input[name=email]')
                    .closest('.form_group').addClass('group_error')
                    .find('.error_msg').text('Incorrect email');
                error = true;
            }

            if(email === ''){
                form.find('input[name=email]')
                    .closest('.form_group').addClass('group_error')
                    .find('.error_msg').text('Field is required');
                error = true;
            }

            if(error === false){
                JS.formClearError(form);
                $('#subscribeForm').modal('hide');
                $('#subscribeFormSuccess').modal('show');
            }
        })
    },

    formClearError: function(form){
        form.find('.form_group').removeClass('group_error');
    },
    /*END SUBSCRIBE FUNC*/

    feedbackFunc: function(){
        $('body').on(JS.clickEvent, '.feedback_form_submit', function(){
            var error = false;
            var form = $(this).closest('form');
            JS.formClearError(form);

            var name = form.find('input[name=name]').val();
            var email = form.find('input[name=email]').val();
            var help_type = form.find('select[name=help_type]').val();
            var message = form.find('textarea[name=message]').val();

            if(name === ''){
                form.find('input[name=name]')
                    .closest('.form_group').addClass('group_error');
                error = true;
            }

            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(!pattern.test(email)){
                form.find('input[name=email]')
                    .closest('.form_group').addClass('group_error')
                    .find('.error_msg').text('Incorrect email')
                error = true;
            }

            if(email === ''){
                form.find('input[name=email]')
                    .closest('.form_group').addClass('group_error')
                    .find('.error_msg').text('Field is required');
                error = true;
            }

            if(help_type === ''){
                form.find('select[name=help_type]')
                    .closest('.form_group').addClass('group_error');
                error = true;
            }

            if(message === ''){
                form.find('textarea[name=message]')
                    .closest('.form_group').addClass('group_error');
                error = true;
            }

            if(error === false){
                JS.formClearError(form);
                $('#feedbackFormSuccess').modal('show');
            }
        })
    },

    contactFunc: function(){
        $('body').on(JS.clickEvent, '.contact_form_submit', function(){
            var error = false;
            var form = $(this).closest('form');
            JS.formClearError(form);

            var name = form.find('input[name=name]').val();
            var email = form.find('input[name=email]').val();
            var message = form.find('textarea[name=message]').val();

            if(name === ''){
                form.find('input[name=name]')
                    .closest('.form_group').addClass('group_error');
                error = true;
            }

            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(!pattern.test(email)){
                form.find('input[name=email]')
                    .closest('.form_group').addClass('group_error')
                    .find('.error_msg').text('Incorrect email');
                error = true;
            }

            if(email === ''){
                form.find('input[name=email]')
                    .closest('.form_group').addClass('group_error')
                    .find('.error_msg').text('Field is required');
                error = true;
            }

            if(message === ''){
                form.find('textarea[name=message]')
                    .closest('.form_group').addClass('group_error');
                error = true;
            }

            if(error === false){
                JS.formClearError(form);
                $('#contactFormSuccess').modal('show');
            }
        })
    },

    faqFunc: function(){
        $("body").on(JS.clickEvent, '.open_answer', function(e) {
            var item = $(this).parents('.faq_item');
            if(item.hasClass('open')){
                item.removeClass('open');
                item.find('.faq_answer').slideUp(300);
            }else{
                item.addClass('open');
                item.find('.faq_answer').slideDown(300);
            }

        });
    },

    blogFunc: function(){
        $("body").on(JS.clickEvent, '.read_more', function(e) {
            var id = $(this).attr('data-id');
            $('#blogCarousel .item').removeClass('active');
            $('#item_'+id).addClass('active');

            $('#blogCarouselModal').modal('show');
            setTimeout(function(){
                JS.disqusInit();
            }, 1000);

        });

        $('#blogCarousel').on('slid.bs.carousel', function () {
            JS.disqusInit();
        })

        $("body").on('click', '.get_more_records', function(){
            var post,
                slide,
                video = '',
                image = '',
                title = '';
            if($(this).hasClass('blocked')){
                return false;
            }
            var this_page = $(this).attr('data-page')*1;
            var next_page = this_page + 1;
            var pages = $(this).attr('data-pages')*1;
            var url = $(this).attr('data-url');
            if(next_page >= pages){
                $(this).hide();
            }
            $(this).attr('data-page', next_page);
            $(this).addClass('blocked');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': window.Laravel.csrfToken.toString(),
                },
                type: 'POST',
                dataType: 'json',
                data: {
                    page_num: next_page
                },
                url: url+'?page='+next_page,
                success: function (response) {
                    //console.log(response.blog.data);
                    $(response.blog.data).each(function(index, val){
                        if(val.video != ''){
                            //$v = explode('?v=', val.video);
                            var v = val.video.split('?v=');
                            video = '<div class="image">' +
                                        '<iframe src="https://www.youtube.com/embed/' + v[1] + '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>' +
                                    '</div>';
                        }else if(val.image != ''){
                            image = '<div class="image">' +
                                        '<img src="' + response.img_path + '/' + val.image + '" alt="">' +
                                    '</div>';
                        }
                        post = '<div class="blog_item">' +
                                    '<div class="top_block">' +
                                        '<div class="author">' + val.author + '</div>' +
                                        '<div class="date">' + val.date + '</div>' +
                                    '</div>' +
                                    video +
                                    image +
                                    '<div class="title">' + val.title + '</div>' +
                                    '<div class="anons">' +
                                        val.description.substr(0, 400) +
                                    '</div>' +
                                    '<a data-id="' + val.id + '" class="btn_white read_more" href="#">Read more</a>' +
                                '</div>';

                        if(val.video != ''){
                            var v = val.video.split('?v=');
                            video = '<div class="image video_block">' +
                                        '<iframe src="https://www.youtube.com/embed/' + v[1] + '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>' +
                                    '</div>' +
                                    '<div class="blog_content">' +
                                        '<div class="video_title">' + val.title + '</div>' +
                                    '</div>';
                        }else if(val.image != ''){
                            image = '<div class="image">' +
                                        '<img src="' + response.img_path + '/' + val.image + '" alt="">' +
                                        '<div class="title_block">' +
                                            '<div class="title">' + val.title + '</div>' +
                                        '</div>' +
                                    '</div>';
                        }else{
                            title = '<div class="blog_content">' +
                                        '<div class="empty_title">' + val.title + '</div>' +
                                    '</div>';
                        }

                        slide = '<div id="item_' + val.id + '" class="item">' +
                                    video +
                                    image +
                                    title +
                                    '<div class="blog_content">' +
                                        '<div class="author_block">' +
                                            '<span class="name">' + val.author + '</span> /' + val.date +
                                        '</div>' +
                                        '<div class="description text_block">' +  val.description.substr(0, 400) + '</div>' +
                                    '</div>' +
                                    '<div class="disqus_block"></div>' +
                                '</div>';


                        $('#blog .blog_list').append(post);
                        $('#blogCarouselModal .carousel-inner').append(slide);
                    });


                    $(this).removeClass('blocked');
                }
            });

            return false;

        })
    },

    disqusInit: function(){
        var item_active = $('#blogCarousel .item.active').find('.disqus_block');
        var id = item_active.attr('data-id')
        $('#blogCarousel .item').find('.disqus_block').empty();
        item_active.html('<div id="disqus_thread"></div>');

        setTimeout(function(){
            DISQUS.reset({
                reload: true,
                config: function () {
                    this.page.identifier = id;
                    this.page.url = "http://vyvlo-blog.loc/blog/b"+id;
                }
            });
        }, 1000);
    }

};
