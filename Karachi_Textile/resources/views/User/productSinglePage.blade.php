@extends('User/master')

@section('title','product single page')

@section('main')



<style>

	img{
		
		width:400px !important;
		height:500px !important;
	}

</style>

@foreach ($products as $p)

			<section class="single-product">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li>/</li>
								<li><a href="/Shop-sidebar">Products</a></li>
								<li>/</li>
							<li class="active">{{$p->title}}</li>
							</ol>
						</div>
						
					</div>
					<div class="row mt-20">
						<div class="col-md-5">
							<div class="single-product-slider">
								<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
									<div class='carousel-outer'>
										<!-- me art lab slider -->
										<div class='carousel-inner '>
											<div class='item active' >
												<img data-aos="fade-right" src="{{asset('Images/Admin/Uploads/'.$p->image)}}" alt="product-img" style="width:400px; !important height:500px; !important">
											</div>
											
											
										</div>
										
										
									</div>
									
									
								</div>
							</div>
						</div>
						<div class="col-md-7">
							<div class="single-product-details" data-aos="fade-left">
								<h2>{{$p->title}}</h2><br>
									<p class="product-price">PKR {{$p->price}}</p>
								
								<p style="text-align: justify;line-height:1.5em" class="product-description mt-20" >
										{{$p->detail}}	
								</p>
							
							
								
								<!-- <div class="product-quantity">
									<span>Quantity:</span>
									<div class="product-quantity-slider">
										<input required id="product-quantity" type="number" name="pro_quantity">
									
									</div>
								</div> -->
								<div class="product-category">
									<span>Category:</span>{{$p->category}}<span></span>
									
								</div>
													
							</div>
						</div>
					</div>
					
				</div>
			</section> 

    @endforeach


@endsection

