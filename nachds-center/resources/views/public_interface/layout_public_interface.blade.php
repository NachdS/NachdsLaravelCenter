@extends('global_common.layout')
@section('content')

  <section>
    <div class="col-lg-12" style="background-color: #262626">
      <div class="row">
        <div class="col-md-6">
          <ul class="fotb_left">
            <li>
              <p><strong>phone Number</strong></p>
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <div class="edu_social_links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="nav-bar">
     <div class="nav-container">
       <div class="brand">
         <div class="main_logo main_logo15" id="logo">
           <a href="{{url('/index')}}"
             ><img class="logo-main" src="{{ asset('assets/images/logob.png') }}" alt=""
           /></a>
           <a href="{{url('/index')}}"
             ><img class="logo-inverse" src="{{ asset('assets/images/ct_logob.png') }}" alt=""
           /></a>
         </div>
       </div>
      {{--  @php
       $allMenus = App\Models\Menu::get();
       dd($allMenus);
       @endphp --}}
      {{--  @foreach (@$cour->chapitres as $chap)  --}}

       <nav>
         <div class="nav-mobile">
           <a id="nav-toggle" href="#!"><span></span></a>
         </div>
         <ul class="nav-list">
           <li>
             <a href="{{url('/index')}}">Accueil</a>
           </li>
           <li>
             <a href="{{url('/event')}}">Événements</a>
           </li>
           <li>
            <a href="{{url('/search_result_formation')}}">Formations</a>
          </li>
           <li>
             <a href="{{url('/news')}}">Actualités</a>
           </li>

           <li>
             <a href="{{url('/gallery')}}">Galerie</a>
           </li>
           <li>
             <a href="{{url('/faqs')}}">FAQs</a>
           </li>
           <li>
            <a href="{{url('/about_us')}}">A propos de nous</a>
          </li>
          <li>
              <a href="{{url('/contact_us')}}">Contact</a>
         </li>
         <li>
             
              @auth
                <a href="{{ route('logout') }}">se déconnecter</a>
              @else
                <a href="{{ route('login') }}">Connecter</a>
              @endauth
             
          </li>
         </ul>
       </nav>
     </div>
   </section>

     {{-- start global public interface content--}}
     @yield('content_public')
     {{-- end global public interface content --}}
    
@endsection