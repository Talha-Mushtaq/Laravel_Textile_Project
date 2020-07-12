@extends('Admin/adminMaster')

@section('title','Edit Product')

@section('admin')



   <div class="container-fluid">
	   <div class="row mt-5 mb-5">

	   <h2 style="text-align:center;">Edit Product</h2>
	   <a class="btn btn-primary" href="products.php" style="margin-left:150px;">Back</a>
		   <div class="col-md-3"></div>
			   <div class="col-md-6" style="margin-top:50px;margin-left:30px;">
			   
				   
				
				   <form method="POST" action="{{url('/Admin/UpdateProduct/'.$id)}}" enctype="multipart/form-data" >
				   
					@csrf

				   <input type="text" name="p_id" value ="{{$id}}"  style="display:none "/>

					   <div class="form-group">
						   <label for="pro-title" style="margin-bottom:10px;">Product Title</label>
						   <input type="text" value="{{$title}}" class="form-control" name="p_title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Title" required/>
					   </div>
					   
					   <div class="form-group" style="margin-bottom:10px;">
						   <label for="pro-cat">Product Category</label>
					   <input type="text" value="{{$category}}" class="form-control" name="p_cat" id="exampleInputcategory" aria-describedby="categoryHelp" placeholder="Enter Product Category" required/>
					   </div>

					   <div class="form-group" style="margin-bottom:10px;">
						<label for="pro-cat">Product Price</label>
					   <input type="text" class="form-control" value="{{$price}}"  name="p_price" id="exampleInputcategory" aria-describedby="categoryHelp" placeholder="Enter Product Price" required/>
        			  </div>
					   
						<div class="custom-file form-group" style="margin-bottom:10px;">
						<label for="pro-cat" aria-required="require">Product Image</label>
						   <input type="file" id="file"  name="p_image" >
   
						   <br/> 
   
						   <img id="showImg" src="{{asset('Images/Admin/Uploads/'.$image)}}" style="width: 100px;height:100px;border:1px solid "/>
                       <span id="spanDeleteButton"> <input type="button" id="deleteImg" name="deleteImg" class="btn btn-danger btn btn-sm" style="outline: none;" value="Delete Image"/></span> 
					   </div>
					   <input type="text" id="imagePathID" name="imagePathName"  style="display:none"/>
					  
					  
					   <div class="form-group" style="margin-bottom:10px;">
						   <label for="pro-det">Product Detail</label>
					   <textarea  type="text" class="form-control"  rows="10" name="p_detail" id="exampleInputEmail1" aria-describedby="emailHelp" required>{{$detail}}</textarea>
					   </div>
					   
					   <input type="submit"  class="btn btn-primary" id="update" value="Update" name="update" style="outline: none;width:40%"/>
				   <!-- <input type="submit"/> -->
				   </form>
				   <br/>
			   
			   </div>
			   <div class="col-md-3">
				   
				   
				   
			   </div>
	   </div>
   </div>
   

<script>
$(document).ready(function(){

      $('#file').toggle();

	   var chk = 'false' , ImgNameFile;
   
		   $('#deleteImg').on('click', function(event){
			   event.preventDefault();
			   // alert('good');
			   chk = 'false';
 
               $('#file').toggle();
	   
			   $('#showImg').attr('src','');	
			   
			//    $('#spanDeleteButton').css({"display": "none"});
			   $('#spanDeleteButton').toggle();

		   }); 
		   
   
   
		   $('#file').change(function(e){
			   e.preventDefault();
	   
			   chk = 'true';
			   
				tmppath = URL.createObjectURL(event.target.files[0]);
				ImgNameFile = event.target.files[0].name;
	//  alert(ImgNameFile);
				$('#showImg').fadeIn('fast').attr('src',tmppath);
			  });         
   
		  
	
			   $('#update').on('click', function(event){
						//  event.preventDefault();
   
						 var ImgNameShow = $('#showImg').attr('src');
					if( chk == 'true')
					{

						 var n = 'n'.concat(ImgNameFile);
						$('#imagePathID').val(n);
					}
					else
					{
						
						var p = 'p'.concat(ImgNameShow).slice(44);
					   $('#imagePathID').val(p);
					}


			   }); 
				   
   
   
   
   
   });
</script>
   
@endsection