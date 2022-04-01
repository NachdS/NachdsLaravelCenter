<!DOCTYPE html>
<html lang="en">

<!-- Copyright NACHD IT, Tue, 08 Mar 2022 13:31:36 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Cursus - About Us</title>

    <link rel="icon" type="image/png" href="{{asset('assets/images/fav.png')}}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,500" rel='stylesheet'>
    <link
    href="https://fonts.googleapis.com/css?family=Righteous&display=swap"
    rel="stylesheet"
  />
    <link href="{{ asset('assets/vendor/unicons-2.0.1/css/unicons.css') }}" rel='stylesheet'>
    <link href="{{ asset('assets/css/vertical-responsive-menu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/vertical-responsive-menu1.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/instructor-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/instructor-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/night-mode.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/jquery-steps.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsvendor/jquery-ui-1.12.1/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/datepicker.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/OwlCarousel/assets/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/OwlCarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/semantic/semantic.min.css')}}">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <link
      href="{{ asset('assets/vendor/OwlCarousel/assets/owl.carousel.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('assets/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}"
      rel="stylesheet"
    />
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/vendor/semantic/semantic.min.css') }}"
    />

    <link
      rel="shortcut icon"
      href="/sites/default/files/favicon.ico"
      type="image/vnd.microsoft.icon"
    />


</head>
<body>

  {{-- start global content--}}
  @yield('basic_content')
  {{-- end global content --}}



  <script data-cfasync="false" src="{{ asset('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
  <script src="{{ asset('assets/js/vertical-responsive-menu.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/OwlCarousel/owl.carousel.js') }}"></script>
  <script src="{{ asset('assets/vendor/semantic/semantic.min.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <script src="{{ asset('assets/js/custom1.js') }}"></script>
  <script src="{{ asset('assets/js/night-mode.js') }}"></script>
  <script src="{{ asset('assets/js/vertical-responsive-menu.min.js') }}"></script>
  <script src="{{ asset('assets/unpkg.com/es6-promise%404.2.4/dist/es6-promise.auto.min.js') }}"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-ui-1.12.1/jquery-ui.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-steps.min.js') }}"></script>
  <script src="{{ asset('assets/js/function.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/js/i18n/datepicker.en.js') }}"></script>
  <script>$(document).ready(function () {
      $('#dtBasicExample').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
  </script>
  <script>
      $('#add-course-tab').steps({
          onFinish: function () {
              alert('Wizard Completed');
          }
      });		
  </script>
  <script>
      $(function () {
          $(".sortable").sortable();
          $(".sortable").disableSelection();
      });

  </script>
  <script>
    // Open the Modal
    function openModal() {
      document.getElementById("myModal").style.display = "block";
    }
    
    // Close the Modal
    function closeModal() {
      document.getElementById("myModal").style.display = "none";
    }
    
    var slideIndex = 1;
    showSlides(slideIndex);
    
    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    

    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>


</body>

<!-- Copyright  contact_us.html Nachd IT 13:31:52 GMT -->

</html>