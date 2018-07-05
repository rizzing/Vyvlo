@extends('layouts.pages')

@section('title')
    {{ $data->title }}
@endsection

@section('content')

    <section id="blog">
        <div class="page_container">
            <h1 class="page_title"> {{ $data->heading }}</h1>
            <div class="blog_list">
                @foreach($blog_list as $item)
                    <div class="blog_item">
                        <div class="top_block">
                            <div class="author">{!! $item->author !!}</div>
                            <div class="date">{{ $item->date }}</div>
                        </div>
                        @if(!empty($item->video))
                            <?php
                                $v = explode('?v=', $item->video);
                            ?>
                            <div class="image">
                                <iframe src="https://www.youtube.com/embed/{{ $v[1] }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        @elseif(!empty($item->image))
                            <div class="image">
                                <img src="{{ asset(config('images.blog.middle.public_path') . $item->image) }}" alt="">
                            </div>
                        @endif
                        <div class="title">{{ $item->title }}</div>
                        <div class="anons">
                            {!! substr($item->description, 0, 400) !!}
                        </div>
                        <a data-id="{{ $item->id }}" class="btn_white read_more" href="#">Read more</a>
                    </div>
                @endforeach
            </div>
            @if($pages > 1)
                <div class="btn_block">
                    <a data-url="{{ route('page.blog_page') }}" data-pages="{{ $pages }}" data-page="1" class="btn_blue get_more_records" href="#">More stories</a>
                </div>
            @endif
        </div>
    </section>

    <div id="blogCarouselModal" class="modal fade blog_modal" role="dialog" tabindex="-1">
        <button type="button" class="btn_close" data-dismiss="modal">&times;</button>
        <div class="modal-dialog">

            <div class="modal_content">
                <div id="blogCarousel" class="carousel slide" data-interval="0" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        @foreach($blog_list as $i => $item)
                            <div id="item_{{ $item->id }}" class="item">
                                @if(!empty($item->video))
                                    <?php
                                    $v = explode('?v=', $item->video);
                                    ?>
                                    <div class="image video_block">
                                        <iframe src="https://www.youtube.com/embed/{{ $v[1] }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                    <div class="blog_content">
                                        <div class="video_title">{{ $item->title }}</div>
                                    </div>

                                @elseif(!empty($item->image))
                                    <div class="image">
                                        <img src="{{ asset(config('images.blog.middle.public_path') . $item->image) }}" alt="">
                                        <div class="title_block">
                                            <div class="title">{{ $item->title }}</div>
                                        </div>
                                    </div>
                                @else
                                    <div class="blog_content">
                                        <div class="empty_title">{{ $item->title }}</div>
                                    </div>
                                @endif

                                <div class="blog_content">
                                    <div class="author_block">
                                        <span class="name">{!! $item->author !!}</span> / {{ $item->date }}
                                    </div>
                                    <div class="description text_block">{!! $item->description !!}</div>
                                </div>
                                <div class="disqus_block">
                                    @if($i == 0)
                                        <div id="disqus_thread"></div>
                                        <script>

                                            var disqus_shortname = 'vyvlo-com'; // required: replace example with your forum shortname

                                            var disqus_config = function () {
                                                this.page.url = 'http://vyvlo-blog.loc/blog/b1';  // Replace PAGE_URL with your page's canonical URL variable
                                                this.page.identifier = 'b1'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                                this.page.title = 'bla bla';
                                            };

                                            /* * * DON'T EDIT BELOW THIS LINE * * */
                                            (function() {
                                                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                                dsq.setAttribute('data-timestamp', +new Date());
                                                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                                            })();

                                        </script>
                                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#blogCarousel" data-slide="prev"></a>
                    <a class="right carousel-control" href="#blogCarousel" data-slide="next"></a>
                </div>
            </div>
        </div>
    </div>

@endsection
