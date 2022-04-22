@extends('global_common.layout')
@section('content')
    <header class="header clearfix">
        <button type="button" id="toggleMenu" class="toggle_menu">
            <i class='uil uil-bars'></i>
        </button>
        <button id="collapse_menu" class="collapse_menu">
            <i class="uil uil-bars collapse_menu--icon "></i>
            <span class="collapse_menu--label"></span>
        </button>
        <div class="main_logo" id="logo">
            <a href="{{ url('/index') }}"><img class="logo-main" src="{{ asset('assets/images/logo.png') }}"
                    alt=""></a>
            <a href="{{ url('/index') }}"><img class="logo-inverse" src="{{ asset('assets/images/ct_logo.png') }}"
                    alt=""></a>
        </div>
        <div class="search120">
            <div class="ui search">
                <div class="ui left icon input swdh10">
                    <input class="prompt srch10" type="text"
                        placeholder="Search for Tuts Videos, Tutors, Tests and more..">
                    <i class='uil uil-search-alt icon icon1'></i>
                </div>
            </div>
        </div>
        <div class="header_right">
            <ul>
                <li>
                    <a href="{{ url('/create_new_course') }}" class="upload_btn" title="Create New Course">Create New
                        Course</a>
                </li>
                <li>
                <li class="ui dropdown">
                    <a href="#" class="opts_account" title="Account">
                        <img src="{{ asset('assets/images/hd_dp.jpg') }}" alt="">
                    </a>
                    <div class="menu dropdown_account">
                        <div class="channel_my">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/hd_dp.jpg') }}" alt="">
                                <div class="pd_content">
                                    @auth
                                        <div class="rhte85">
                                            <h6>{{ Auth::user()->name }}</h6>
                                            <div class="mef78" title="Verify">
                                                <i class='uil uil-check-circle'></i>
                                            </div>
                                        </div>

                                        <span><a href="https://gambolthemes.net/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="0364626e616c6f3a373043646e626a6f2d606c6e">{{ Auth::user()->email }}</a></span>
                                    @endauth
                                </div>
                            </div>
                            <a href="{{ url('/my_instructor_profile_view') }}" class="dp_link_12">Consulter
                                Profil Enseignant</a>
                        </div>
                        <a href="#">
                            @auth
                                <a href="{{ route('logout') }}" class="item channel_item">se déconnecter</a>
                            @else
                                <a href="{{ route('login') }}">Connecter</a>
                            @endauth
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </header>



    <nav class="vertical_nav">
        <div class="left_section menu_left" id="js-menu">
            <div class="left_section mt-30 ">
                <ul>
                    <li class="menu--item avatar">
                        <div class="menu--link ">
                            @php
                                $user = App\Models\Enseignant::join('users', 'enseignants.id', 'users.id')
                                    ->where('enseignants.id', Auth::user()->id)
                                    ->first();
                            @endphp
                            <div class="tutor_img">
                                <a href="{{ url('/my_instructor_profile_view') }}"><img
                                        src="{{ asset(@$user->avatar) }}" alt=""></a>
                            </div>
                            <div class="tutor_content_dt">
                                <div class="tutor150">
                                    <a href="{{ url('/my_instructor_profile_view') }}"
                                        class="tutor_name">{{ auth()->user()->name }}</a>
                                    <div class="mef78" title="Verify">
                                        <i class="uil uil-check-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            @php
                $allMenus = App\Models\Menu::join('menu_items', 'menus.id', 'menu_items.menu_id')
                    ->where('name', '=', 'menuEnseignant')
                    ->get();
            @endphp
            <div class="left_section">

                <ul>
                    @foreach (@$allMenus as $menu)
                        <!-- <li class="menu--item">
                        <a href="" class="menu--link active" title="Dashboard">
                        </a>
                    </li> -->
                        <li class="menu--item">
                            <a href="{{ url(@$menu->url) }}" class="menu--link" title="Dashboard">
                                <i class="{{ @$menu->icon_class }}"></i>
                                <span class="menu--label">{{ @$menu->title }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="left_section pt-2">
                <ul>
                    <li class="menu--item">
                        <a href="{{ url('/index') }}" class="menu--link" title="Send Feedback">
                            <i class='uil uil-home-alt  menu--icon'></i>
                            <span class="menu--label">Retour Vers Accueil</span>
                        </a>
                    </li>
                </ul>
            </div>
            @php
                $publicMenus = App\Models\Menu::join('menu_items', 'menus.id', 'menu_items.menu_id')
                    ->where('name', '=', 'menuPublique')
                    ->get();
            @endphp

            <div class="left_footer">
                <ul>
                    @foreach (@$publicMenus as $pmenu)
                        <li><a href="{{ @$pmenu->url }}">{{ @$pmenu->title }}</a></li>
                    @endforeach
                </ul>
                <div class="left_footer_content">
                    <p>© 2020 <strong>Cursus</strong>. All Rights Reserved.</p>
                </div>
            </div>

    </nav>


    {{-- start global public interface content --}}
    @yield('content_public_teacher_interface')
    {{-- end global public interface content --}}
@endsection
