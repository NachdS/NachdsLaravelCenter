@extends('global_common.layout')
@section('content')
    <section>
        <div class="col-lg-12" style="background-color: #262626">
            <div class="row">
                @php
                    $header = App\Models\Coordonnee::first();
                @endphp
                <div class="col-md-4" style="text-align: center;">
                    <ul class="fotb_left">
                        <li>
                            @if (@$header)
                                <p style="margin-top: 4px; font-size: 14px; font-weight: 200; font-style: italic;">Phone Number: {{ @$header->telephone1 }}</p>
                            @endif
                        </li>
                    </ul>
                </div>
                <div class="col-md-4" style="text-align: center; font-size: 14px; font-weight: 200; font-style: italic;">
                    <ul class="fotb_left">
                        <li>
                            @if (@$header)
                                <p style="margin-top: 4px; font-size: 14px; font-weight: 200; font-style: italic;">Email: {{ @$header->email }}</p>
                            @endif
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="edu_social_links" style="text-align: center !important;">
                        <a href="{{ @$header->facebook }}"><i class="fab fa-facebook-f"></i></a>
                        <!-- <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a> -->
                        <a href="{{ @$header->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                        <!-- <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="nav-bar">
        <div class="nav-container">
            <div class="brand">
                <div class="main_logo main_logo15" id="logo">
                    <a href="{{ url('/index') }}"><img class="logo-main" src="{{ asset('assets/images/logob.png') }}"
                            alt="" /></a>
                    <a href="{{ url('/index') }}"><img class="logo-inverse"
                            src="{{ asset('assets/images/ct_logob.png') }}" alt="" /></a>
                </div>
            </div>
            @php
                $allMenus = App\Models\Menu::join('menu_items', 'menus.id', 'menu_items.menu_id')
                    ->where('name', '=', 'menuPublique')
                    ->get();
            @endphp

            <nav>
                <div class="nav-mobile">
                    <a id="nav-toggle" href="#!"><span></span></a>
                </div>
                <ul class="nav-list">
                    @foreach (@$allMenus as $menu)
                        <li>
                            <a href="{{ url(@$menu->url) }}">{{ @$menu->title }}</a>
                        </li>
                   
                        {{-- <li>
                        <a @if (@$page == 'about_us') style="color: red" @else style="color: rgb(255, 251, 0)" @endif href="{{route('about_us')}}">{{ @$menu->title }}</a></li>   --}}     
                    @endforeach
                </ul>
            </nav>
        </div>
    </section>

    {{-- start global public interface content --}}
    @yield('content_public')
    {{-- end global public interface content --}}
@endsection
