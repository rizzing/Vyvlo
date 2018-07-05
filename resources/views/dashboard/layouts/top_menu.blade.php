<div class="top-menu-secondary with-overflow color-scheme-dark">
    <!--------------------
    START - Messages Link in secondary top menu
    -------------------->
    <div class="logo-w menu-size">
        <a class="logo" href="{{route('dashboard.index')}}"><img src="/assets/backend/img/logo-white.svg"></a>
    </div>

    <div class="top-menu-controls">

        <div class="logged-user-w">
            <div class="logged-user-i">
                <div class="avatar-w">
                    {{auth()->user()->name}} {{auth()->user()->last_name}}
                </div>
                <div class="logged-user-menu">
                    <div class="logged-user-avatar-info">
                        <div class="avatar-w">
                            <img alt="user avatar" src="/assets/backend/img/avatar1.jpg">
                        </div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">
                                {{auth()->user()->name}} {{auth()->user()->last_name}}
                            </div>
                            <div class="logged-user-role">
                                {{auth()->user()->role->name}}
                            </div>
                        </div>
                    </div>
                    <div class="bg-icon">
                        <i class="os-icon os-icon-wallet-loaded"></i>
                    </div>
                    <ul>
                        <li>
                            <a href="{{route('profile.show')}}"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="os-icon os-icon-signs-11">
                                </i>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--------------------
        END - User avatar and menu in secondary top menu
        -------------------->
    </div>
</div>