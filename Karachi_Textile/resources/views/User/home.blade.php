@extends('User/master')

@section('title','Home')

@section('main')
    

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	{{-- <title>Home</title> --}}
	
<!-- Revolution Slider -->
{{-- <link rel="stylesheet" type="text/css" href="{{asset('Css-Js-Files/User/plugins/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('Css-Js-Files/User/plugins/revolution-slider/revolution/fonts/font-awesome/css/font-awesome.css')}}">

<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="{{asset('Css-Js-Files/User/plugins/revolution-slider/revolution/css/settings.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('Css-Js-Files/User/plugins/revolution-slider/revolution/css/layers.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('Css-Js-Files/User/plugins/revolution-slider/revolution/css/navigation.css')}}"> --}}
<style>
/* Make the image fully responsive */
.carousel-inner img {
  width: 100%;
  height: 100%;
}
</style>
</head>
<body>
		{{-- <div style="width: 100%"> --}}
					<img src="{{asset('Images/User/industry/knit.jpg')}}" style="width:100%;height:500px"/>
		{{-- </div> --}}
  
	<br>
	<br>
	
	<!-- this is design from Decolux -->
		<!--our-starts-->
		<div class="our" id="furniture">
			<div class="container">
				<h2 style="text-align: center;margin-top: 80px;color: black;font-weight: bold;font-size: 300%;font-family: 'Ubuntu Condensed', sans-serif;margin-bottom: 80px;">Our Designed Products</h2>
				<div class="our-top">
					<div class="col-md-7 col-sm-7 col-xs-12 our-left heading">
						<h3>Trousers Fabrics</h3>
						<p style="line-height:1.5em;text-align:justify"
						data-aos="fade-up"
						>
						Curabitur volutpat turpis et metus molestie tincidunt. Morbi blandit dapibus efficitur. Fusce a efficitur massa. Donec a fermentum libero.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras condimentum euismod mollis. </p>
					</div>
					<div class="col-md-5 col-sm-5 col-xs-12 our-right">
						<a href="#"><img data-aos="fade-left"  src="Images/User/products/01.jpg" alt="trousers-img" height="370"/></a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="our-top">
					<div class="col-md-5 col-sm-7 col-xs-12 o-left">					
						<a href="#"><img data-aos="fade-right" src="Images/User/products/05.jpg" alt="socks-img" height="370" width="370"/></a>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-5 col-sm-5 col-xs-12 o-right  heading">
						<h3>Socks Fabrics</h3>
						<p 	data-aos="fade-up"
						style="line-height:1.5em;text-align:justify">Curabitur volutpat turpis et metus molestie tincidunt. Morbi blandit dapibus efficitur. Fusce a efficitur massa. Donec a fermentum libero.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="our-top">
					<div class="col-md-7 col-sm-7 col-xs-12 our-left heading">
						<h3>Underwear Fabrics</h3>
						<p 	data-aos="fade-up" 
						style="line-height:1.5em;text-align:justify">Curabitur volutpat turpis et metus molestie tincidunt. Morbi blandit dapibus efficitur. Fusce a efficitur massa. Donec a fermentum libero.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras condimentum euismod mollis. </p>
					</div>
					<div class="col-md-5 col-sm-5 col-xs-12 our-right">
						<a href="#"><img data-aos="fade-left" src="Images/User/products/04.jpg" alt=""  height="370" width="350"/></a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!--our-End-->
	


</body>
</html>
@endsection

