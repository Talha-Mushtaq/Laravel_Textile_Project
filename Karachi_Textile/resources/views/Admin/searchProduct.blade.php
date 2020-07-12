@extends('Admin/AdminMaster')

@section('title','Search Product')

@section('admin')


<style>
* {
	box-sizing: border-box;
  }
  
  form.example input[type=text] {
	padding: 8.9px;
	font-size: 17px;
	border: 1px solid grey;
	float: left;
	width: 80%;
	background: #f1f1f1;
  }
  
  form.example button {
	float: left;
	width: 20%;
	padding:8.9px;
	background: #2196F3;
	color: white;
	font-size: 17px;
	border: 1px solid grey;
	border-left: none;
	cursor: pointer;
  }
  
  form.example button:hover {
	background: #0b7dda;
  }
  
  form.example::after {
	content: "";
	clear: both;
	display: table;
  }
  </style>

	
	<div class="container-fluid">
	
		<div class="row mt-5 mb-5">
			
		<h2 style="text-align:center;">Search Product</h2>
	
		<form method="POST" action="{{url('/Admin/searchProduct')}}" class="example"  style="margin:auto;max-width:300px">
	       	@csrf
		
			   <input type="text" placeholder="Search.." name="search">
			<button type="submit" id="searchBtn" name="searchBtn"><i class="fa fa-search"></i></button>
		</form>
		<div class="col-md-3"></div>
		<div class="col-md-6 col-xs-6 col-lg-6 col-xl-6 table-responsive" style="margin-top:50px;;width:60%; margin-left:25%; margin-right:40%;">
				
					
					
			<table class="table">
				  
				<thead>
				  <tr>
					  <th scope="col">Product ID</th>
					  <th scope="col">Product Title</th>
					  <th scope="col">Product Category</th>
					  <th scope="col">Product Image</th>
					  <th scope="col">Product Detail</th>
					   <th scope="col">Delete Product</th>
					  <th scope="col">Edit Product</th>
				  </tr>
				</thead>
				<tbody>
					

			  {{-- @if ($products == null)
			  <tr style="color: red">Not data found</tr>
				  
			  @endif --}}
	<?php	
		//    if(isset($_POST['searchBtn'])) 
		// 			{
		// 				foreach ($products as $p) 
							
		// 					<tr>
		// 						<th scope="row">{{$p->id}}</th>
		// 						<td>{{$p->title}}</td>
		// 						<td>{{$p->category}}</td>
		// 						<td>{{$p->price}}</td>
		// 						<td> <img src="{{asset('Images/Admin/Uploads/'.$p->image)}}" style="width:30px;"/></td>
		// 						<td>{{$p->detail}}</td>
		// 						<td><a href="/Admin/EditProduct/{{$p->id}}/{{$p->title}}/{{$p->category}}/{{$p->price}}/{{$p->image}}/{{$p->detail}}" class="btn btn-info">Edit</></td>
		// 						<td><a href="/Admin/DeleteProduct/{{$p->id}}" class="btn btn-warning" name="p_delete">Delete</a></td>
		// 					</tr>	 

					      
					
		// 		   }
			 				
		?> 
                </tbody>
                
            </table>
					
				
				</div>
				<div class="col-md-3">
					
					
					
				</div>
		</div>
	</div>
	
	

@endsection