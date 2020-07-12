@extends('Admin/adminMaster')

@section('title','Products')

@section('admin')


		{{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		// <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
		// <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

 	
	<!--form start-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

		<div class="container-fluid">
	
		<div class="row mt-5 mb-5">
			
		<h2 style="text-align:center;">All Products</h2>
		<a class="btn btn-primary" href="/Admin/AddProduct" style="margin-left:800px;">Add Product</a>

		<div class="col-md-3"></div>
				<div class="col-md-6 col-xs-6 col-lg-6 col-xl-6 table-responsive" style="margin-top:50px;;width:60%; margin-left:25%; margin-right:40%;">
				
					
					
			<table class="table">
				  
				<thead>
				  <tr>
					  <th scope="col">Product ID</th>
					  <th scope="col">Product Title</th>
					  <th scope="col">Product Category</th>
					  <th scope="col">Product Price</th>
					  <th scope="col">Product Image</th>
					  <th scope="col">Product Detail</th>
					  <th scope="col">Edit Product</th>
					  <th scope="col">Delete Product</th>
					</tr>
				</thead>
				<tbody>
				 
				
				
				@foreach ($products as $p)
				 	
						<tr>
							<th scope="row">{{$p->id}}</th>
							<td>{{$p->title}}</td>
							<td>{{$p->category}}</td>
							<td>{{$p->price}}</td>
							<td> <img src="{{asset('Images/Admin/Uploads/'.$p->image)}}" style="width:30px;"/></td>
							<td>{{$p->detail}}</td>
						    <td><a href="/Admin/EditProduct/{{$p->id}}/{{$p->title}}/{{$p->category}}/{{$p->price}}/{{$p->image}}/{{$p->detail}}" class="btn btn-info">Edit</></td>
							<td><a href="/Admin/DeleteProduct/{{$p->id}}" class="btn btn-warning" name="p_delete">Delete</a></td>
						</tr>	

				@endforeach
                
                </tbody>
                
            </table>
					
				
				</div>
				<div class="col-md-3">
					
					
					
				</div>
		</div>
	</div>
	

</body>
</html>
	

	
@endsection