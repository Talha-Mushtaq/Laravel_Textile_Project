@extends('Admin/adminMaster')

@section('title','Add Product')

@section('admin')


	<!--form start-->


<div class="container-fluid">
	<div class="row mt-5 mb-5">

	<h2 style="text-align:center;">Product Page</h2>
	<a class="btn btn-primary" href="/Admin/Products" style="margin-left:150px;">Back</a>
		<div class="col-md-3"></div>
			<div class="col-md-6" style="margin-top:50px;margin-left:30px;">
			
				
				
			<form method="POST" action="{{url('/Admin/saveProduct')}}" enctype="multipart/form-data" >
				
				 @csrf
				 
					<div class="form-group">
						<label for="pro-title" style="margin-bottom:10px;">Product Title</label>
						<input type="text" class="form-control" name="p_title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Title" required/>
					</div>
					
					<div class="form-group" style="margin-bottom:10px;">
						<label for="pro-cat">Product Category</label>
						<input type="text" class="form-control" name="p_cat" id="exampleInputcategory" aria-describedby="categoryHelp" placeholder="Enter Product Category" required/>
					</div>
					
					<div class="form-group" style="margin-bottom:10px;">
						<label for="pro-cat">Product Price</label>
						<input type="text" class="form-control" name="p_price" id="exampleInputcategory" aria-describedby="categoryHelp" placeholder="Enter Product Price" required/>
					</div>
					
					 <div class="custom-file form-group" style="margin-bottom:10px;">
					 <label for="pro-cat">Product Image</label>
						<input type="file" id="img" name="p_image"  id="validatedCustomFile" required>

						<br/>

						<img id="showImg" src="" style="width: 100px;height:100px;border:1px solid "/>

					</div>
					
					<div class="form-group" style="margin-bottom:10px;">
						<label for="pro-det">Product Detail</label>
						<textarea type="text" class="form-control"  rows="10" name="p_detail" id="exampleInputEmail1" aria-describedby="emailHelp" required></textarea>
					</div>
					
					<input type="submit" class="btn btn-primary" name="p_submit" style="outline: none;width:40%"/>
				<!-- <input type="submit"/> -->
				</form>
				<br/>
			
			</div>
			<div class="col-md-3">
				
				
				
			</div>
	</div>
</div>



<!--finish form-->
<script>
	$(document).ready(function(){


	   $('#img').change(function(e){
		tmppath = URL.createObjectURL(event.target.files[0]);
		 $('#showImg').fadeIn('fast').attr('src',tmppath);
	   });


   });		
</script>
   

@endsection