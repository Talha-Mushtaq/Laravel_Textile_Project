@extends('Admin/adminMaster')

@section('title','Orders')

@section('admin')


	<div class="container-fluid">
	
		<div class="row mt-5 mb-5">
			
		<h2 style="text-align:center;">All Orders</h2>
		<!---<a class="btn btn-primary" href="add-product.php" style="margin-left:800px;">All Orders</a>-->

		<div class="col-md-3"></div>
				<div class="col-md-6 col-xs-6 col-lg-6 col-xl-6 table-responsive" style="margin-top:50px;;width:60%; margin-left:25%; margin-right:40%;">
				
					
					
					<table class="table">
				 
				  <thead>
					<tr>
					  <th scope="col">Order ID</th>
					  <th scope="col">Customer Name</th>
					  <th scope="col">Shipping Address</th>
					  <th scope="col">Country</th>
					  <th scope="col">Quantity</th>
					  <th scope="col">Purchased Product ID</th>
					  <th scope="col">Total Bill</th>
					  <th scope="col">Confirm Order</th>
					</tr>
				  </thead>
				   <tbody>
				  <td>1</td>
				  <td>Hamza</td>
				  <td>Sheikhupura road sitara valley</td>
				  <td>pakistan</td>
				  <td>4</td>
				  <td>23</td>
				  <td>$400</td>
				  <td><a class="btn btn-success" href="#">Confirm</a></td>
				  </tbody>


				 
  

				</table>
					
				
				</div>
				<div class="col-md-3">
					
					
					
				</div>
		</div>
	</div>
	
	


@endsection