<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>



<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
<!-- Themefisher Icon font -->
<link rel="stylesheet" href="{{asset('Css-Js-Files/User/plugins/themefisher-font/style.css')}}">
<!-- bootstrap.min css -->
<link rel="stylesheet" href="{{asset('Css-Js-Files/User/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('Css-Js-Files/User/plugins/bootstrap/js/bootstrap.min.js')}}">
<link rel="stylesheet" href="{{asset('Css-Js-Files/User/plugins/jquery/dist/jquery.min.js')}}">



{{-- <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('Css-Js-Files/User/css/style.css')}}"> --}}


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <!-- Main Stylesheet -->

  <link rel="stylesheet" href="{{asset('Css-Js-Files/User/css/style.css')}}">
  
  {{-- {{-- {{asset('User/')}} --}}
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  --}}

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

 
</head>
<body>
    
    @include('User.includes.header')
    
    @yield('main')
   
    
    @include('User.includes.footer')
    
    
    
    
<script>

AOS.init();

// You can also pass an optional settings object
// below listed default settings
AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 1000, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: true, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});

</script>

    
</body>
</html>