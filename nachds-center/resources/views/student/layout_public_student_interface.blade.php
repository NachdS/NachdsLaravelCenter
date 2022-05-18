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
        {{-- <div class="top-category">
        <div class="ui compact menu cate-dpdwn">
            <div class="ui simple dropdown item">
                <a href="#" class="option_links p-0" title="categories"><i class="uil uil-apps"></i></a>
                <div class="menu dropdown_category5">
                    <a href="#" class="item channel_item">Development</a>
                    <a href="#" class="item channel_item">Business</a>
                    <a href="#" class="item channel_item">Finance & Accounting</a>
                    <a href="#" class="item channel_item">IT & Software</a>
                    <a href="#" class="item channel_item">Office Productivity</a>
                    <a href="#" class="item channel_item">Personal Development</a>
                    <a href="#" class="item channel_item">Design</a>
                    <a href="#" class="item channel_item">Marketing</a>
                    <a href="#" class="item channel_item">Lifestyle</a>
                    <a href="#" class="item channel_item">Photography</a>
                    <a href="#" class="item channel_item">Health & Fitness</a>
                    <a href="#" class="item channel_item">Music</a>
                    <a href="#" class="item channel_item">Teaching & Academics</a>
                </div>
            </div>
        </div>
    </div> --}}
       <!--  <div class="search120">
            <div class="ui search">
                <div class="ui left icon input swdh10">
                    <input class="prompt srch10" type="text"
                        placeholder="Search for Tuts Videos, Tutors, Tests and more..">
                    <i class='uil uil-search-alt icon icon1'></i>
                </div>
            </div>
        </div> -->
        <div class="header_right">
            <ul>
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
                            <a href="{{ url('/student_profile_view') }}" class="dp_link_12">Consulter Profil Elève</a>
                        </div>
                        {{-- <div class="night_mode_switch__btn">
                        <a href="#" id="night-mode" class="btn-night-mode">
                            <i class="uil uil-moon"></i> Night mode
                            <span class="btn-night-mode-switch">
                                <span class="uk-switch-button"></span>
                            </span>
                        </a>
                    </div>
                    <a  href="{{url('/instructor_dashboard')}}"> class="item channel_item">Cursus dashboard</a>
                    <a href="membership.html" class="item channel_item">Paid Memberships</a>
                    <a href="setting.html" class="item channel_item">Setting</a>
                    <a href="help.html" class="item channel_item">Help</a>
                    <a href="feedback.html" class="item channel_item">Send Feedback</a> --}}
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
                                $user = App\Models\Candidat::join('users', 'candidats.id', 'users.id')
                                    ->where('candidats.id', Auth::user()->id)
                                    ->first();
                            @endphp

                            <div class="tutor_img">
                                <a href="{{ url('/student_profile_view') }}"><img src="{{ asset(@$user->avatar) }}"
                                        alt=""></a>
                            </div>
                            <div class="tutor_content_dt">
                                <div class="tutor150">
                                    <a href="{{ url('/student_profile_view') }}"
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
            <div class="left_section">
                @php
                    $allMenus = App\Models\Menu::join('menu_items', 'menus.id', 'menu_items.menu_id')
                        ->where('name', '=', 'menuCondidat')
                        ->get();
                @endphp
                <ul>
                    <!-- <li class="menu--item">
                        <a href="" class="menu--link active" title="Dashboard">
                            <i class="uil uil-apps menu--icon"></i>
                            <span class="menu--label">Acceuil</span>
                        </a>
                    </li> -->
                    @foreach (@$allMenus as $menu)
                        <li class="menu--item">
                            <a @if (@$page == @$menu->url) class="menu--link active"  @else class="menu--link " @endif href="{{ url(@$menu->url)}}"><i class="{{ @$menu->icon_class }}"></i><span class="menu--label">{{ @$menu->title }}</span></a></li> 
                        </li>
                    @endforeach
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
    @yield('content_public_student_interface')
    {{-- end global public interface content --}}
@endsection
