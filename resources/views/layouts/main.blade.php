 <!DOCTYPE html>
 <html lang="zxx" class="no-js">

 <head>
     <!-- Mobile Specific Meta -->
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Favicon-->
     <link rel="shortcut icon" href="{{ asset('assets/img/fav.png') }}">
     <!-- Author Meta -->
     <meta name="author" content="abby">
     <!-- Meta Description -->
     <meta name="description" content="">
     <!-- Meta Keyword -->
     <meta name="keywords" content="">
     <!-- meta character set -->
     <meta charset="UTF-8">
     <!-- Site Title -->
     <title>@yield('site-title')</title>

     <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
     <!--
   CSS
   ============================================= -->
     <link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
     {{-- Sweet Alert --}}
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css">
 </head>

 <body>
     @include('includes.header')

     @yield('content')

     @include('includes.footer')

     <script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
         integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
     </script>
     <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
     <script src="{{ asset('assets/js/easing.min.js') }}"></script>
     <script src="{{ asset('assets/js/hoverIntent.js') }}"></script>
     <script src="{{ asset('assets/js/superfish.min.js') }}"></script>
     <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
     <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
     <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
     <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
     <script src="{{ asset('assets/js/mail-script.js') }}"></script>
     <script src="{{ asset('assets/js/main.js') }}"></script>
     {{-- Sweet Alert --}}
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
     @if (session()->has('success'))
         <script>
             Swal.fire(
                 'Message',
                 '{{ session('success') }}',
             )
         </script>
     @endif
 </body>

 </html>
