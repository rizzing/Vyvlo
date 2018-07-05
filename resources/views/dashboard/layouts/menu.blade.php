@php
    $menu_admin = [
            'map'=>[
                        'name'=>'Map marker',
                        'route_name'=>'map.show',
                        'parent_class'=>'has-sub-menu',
                        'icon'=>'os-icon os-icon-window-content',
                        'sub_items'=>[
                            [
                                'name'=>'Add marker',
                                'route_name'=>'map.create',
                            ],
                            [
                                'name'=>'List of markers',
                                'route_name'=>'map.list',
                            ],
                            [
                                'name'=>'Map',
                                'route_name'=>'map.show',
                            ],

                        ],
                    ],
            ];

    $menu_admin = [];

    $menu_user = [

            'dashboard'=>[
                        'name'=>'Dashboard',
                        'route_name'=>'dashboard.index',
                        'parent_class'=>'',
                        'icon'=>'os-icon os-icon-window-content',
                        'sub_items'=>false,
                        ],
            'home'=>[
                        'name'=>'Home page',
                        'route_name'=>'main.show',
                        'parent_class'=>'has-sub-menu',
                        'icon'=>'os-icon os-icon-star-full',
                        'sub_items'=>true,
                        'sub_items'=>[
                            /*[
                                'name'=>'Features',
                                'route_name'=>'main.features',
                            ],*/
                            [
                                'name'=>'FAQ',
                                'route_name'=>'main.faq',
                            ],
                        ]
                ],

                'blog'=>[
                        'name'=>'Blog',
                        'route_name'=>'blog.index',
                        'parent_class'=>'has-sub-menu',
                        'icon'=>'os-icon os-icon-calendar-time',
                        'sub_items'=>true,
                        'sub_items'=>[
                            [
                                'name'=>'Blog list',
                                'route_name'=>'blog.list',
                            ],
                            [
                                'name'=>'Add new',
                                'route_name'=>'blog.create',
                            ],
                        ]
                ],

                'help'=>[
                        'name'=>'Help',
                        'route_name'=>'help.index',
                        'parent_class'=>'has-sub-menu',
                        'icon'=>'os-icon os-icon-others-43',
                        'sub_items'=>true,
                        'sub_items'=>[
                            [
                                'name'=>'Help list',
                                'route_name'=>'help.list',
                            ],
                            [
                                'name'=>'Add new',
                                'route_name'=>'help.create',
                            ],
                        ]
                ],
                /*'about'=>[
                        'name'=>'About us',
                        'route_name'=>'about.index',
                        'parent_class'=>'',
                        'icon'=>'os-icon os-icon-user-male-circle',
                        'sub_items'=>false,
                        ],*/
                'terms'=>[
                        'name'=>'Terms and conditions',
                        'route_name'=>'static.terms',
                        'parent_class'=>'',
                        'icon'=>'os-icon os-icon-documents-03',
                        'sub_items'=>false,
                        ],
                'privacy'=>[
                        'name'=>'Privacy policy',
                        'route_name'=>'static.privacy',
                        'parent_class'=>'',
                        'icon'=>'os-icon os-icon-documents-03',
                        'sub_items'=>false,
                        ],
            ];
@endphp
<!--------------------
START - Mobile Menu
-------------------->
<div class="menu-mobile menu-activated-on-click color-scheme-dark">
    <div class="mm-logo-buttons-w">
        <a class="mm-logo" href="{{route('dashboard.index')}}"><img src="/assets/backend/img/logo-white.svg"></a>
        <div class="mm-buttons">
            <div class="content-panel-open">
                <div class="os-icon os-icon-grid-circles"></div>
            </div>
            <div class="mobile-menu-trigger">
                <div class="os-icon os-icon-hamburger-menu-1"></div>
            </div>
        </div>
    </div>
    <div class="menu-and-user">
        <div class="logged-user-w">
            <div class="logged-user-info-w">
                <div class="logged-user-name">
                    {{auth()->user()->name}} {{auth()->user()->last_name}}
                </div>
                <div class="logged-user-role">
                    {{auth()->user()->role->name}}
                </div>
            </div>
        </div>
        <!--------------------
        START - Mobile Menu List
        -------------------->
        <ul class="main-menu">
            {{--admin--}}

                @foreach($menu_user as $item)
                <li class="{{$item['parent_class']}}">
                    <a href="{{route($item['route_name'])}}">
                        <div class="icon-w">
                            <div class="{{$item['icon']}}"></div>
                        </div>
                        <span>{{$item['name']}}</span></a>
                    <ul class="sub-menu">
                        @if($item['sub_items'])
                            @foreach($item['sub_items'] as $item)
                                <li>
                                    <a href="{{route($item['route_name'])}}">{{$item['name']}}</a>
                                </li>
                            @endforeach
                        @endif

                    </ul>
                </li>
                @endforeach

            @if(Gate::allows('admin'))
            {{--admin--}}
            @foreach($menu_admin as $item)
                <li class="{{$item['parent_class']}}">
                    <a href="{{route($item['route_name'])}}">
                        <div class="icon-w">
                            <div class="{{$item['icon']}}"></div>
                        </div>
                        <span>{{$item['name']}}</span></a>
                    <ul class="sub-menu">
                        @if($item['sub_items'])
                            @foreach($item['sub_items'] as $item)
                                <li>
                                    <a href="{{route($item['route_name'])}}">{{$item['name']}}</a>
                                </li>
                            @endforeach
                        @endif

                    </ul>
                </li>
            @endforeach
            @endif
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">

                    <div class="icon-w">
                        <div class="os-icon os-icon-signs-11"></div>
                    </div>
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
        <!--------------------
        END - Mobile Menu List
        -------------------->
    </div>
</div>
<!--------------------
END - Mobile Menu
-------------------->
<!--------------------
START - Menu side v2
-------------------->
<div class="desktop-menu menu-side-v2-w menu-activated-on-hover flying-menu">
    <ul class="main-menu">
            @foreach($menu_user as $item)
                <li class="{{$item['parent_class']}}">
                <a href="{{route($item['route_name'])}}">
                    <div class="icon-w">
                        <div class="{{$item['icon']}}"></div>
                    </div>
                    <span>{{$item['name']}}</span></a>

                {{--sub--}}
                @if($item['sub_items'])
                    <div class="sub-menu-w">
                        <div class="sub-menu-header">
                            {{$item['name']}}
                        </div>
                        <div class="sub-menu-i">
                            <ul class="sub-menu">
                               @foreach($item['sub_items'] as $item)
                                    <li>
                                        <a href="{{route($item['route_name'])}}">{{$item['name']}}</a>
                                    </li>
                               @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            </li>
            @endforeach



        @if(Gate::allows('admin'))

        @foreach($menu_admin as $item)
            <li class="{{$item['parent_class']}}">
                <a href="{{route($item['route_name'])}}">
                    <div class="icon-w">
                        <div class="{{$item['icon']}}"></div>
                    </div>
                    <span>{{$item['name']}}</span></a>
                {{--sub--}}
                @if($item['sub_items'])
                    <div class="sub-menu-w">
                        <div class="sub-menu-header">
                            {{$item['name']}}
                        </div>
                        <div class="sub-menu-i">
                            <ul class="sub-menu">
                                @foreach($item['sub_items'] as $item)
                                    <li>
                                        <a href="{{route($item['route_name'])}}">{{$item['name']}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            </li>
        @endforeach
        @endif
    </ul>
</div>
<!--------------------
END - Menu side v2
-------------------->