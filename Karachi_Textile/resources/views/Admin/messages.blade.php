@extends('Admin/adminMaster')

@section('title','Messaages')

@section('admin')



	<div class="container-fluid">
	
		<div class="row mt-5 mb-5">
			
		<h2 style="text-align:center;">All Messages</h2>
		<!---<a class="btn btn-primary" href="add-product.php" style="margin-left:800px;">All Orders</a>-->

		<div class="col-md-3"></div>
				<div class="col-md-6 col-xs-6 col-lg-6 col-xl-6 table-responsive" style="margin-top:50px;;width:60%; margin-left:25%; margin-right:40%;">
				
					
					
					<table class="table">
				 
				  <thead>
					<tr>
					  <th scope="col">Message ID</th>
					  <th scope="col">Name</th>
					  <th scope="col">Email</th>
					  <th scope="col">Message</th>
					  <th scope="col">Delete</th>
					</tr>
				  </thead>
				   <tbody>
				  <td>1</td>
				  <td>Hamza</td>
				  <td>hamzamaqbool712@gmail.com</td>
				  <td>Hello sir i want to purchase some products</td>
				  <td><a class="btn btn-warning" href="#">Delete</a></td>
				  </tbody>


				 
  

				</table>
					
				
				</div>
				<div class="col-md-3">
					
					
					
				</div>
		</div>
	</div>
	
	



@endsection