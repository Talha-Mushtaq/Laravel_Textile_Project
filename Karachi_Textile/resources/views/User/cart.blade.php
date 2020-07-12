@extends('User/master')

@section('title','cart')

@section('main')



<style>
  #upd:hover {
    background-color: blue;
  }
  </style>
  
  <div class="page-wrapper">
    <div class="cart shopping">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="block">
              <div class="product-list">
  
                <form method="POST" action="viewcart.php"  enctype='multipart/form-data'>
                
                
  
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="">Item Name</th>
                        <th class="">Item Price</th>
                       <th class="">Quantity</th>
                       <th class="">Total Price</th>
                       <!--<th class="">Total Price</th>-->
                        <th class=""><a class="btn btn-warning" onclick="return confirm('Are you sure you want to clear your cart?');" href="viewcart.php?all" style="margin-left:30px;">Clear All</a></th>
                        
                       </tr>
                      
                    </thead>
                    <tbody>
  
                     <tr class="">
                     
                      
                    
                        <td class="">
                          <div class="product-info">
                          <img  src="{{asset('Images/Admin/Uploads/')}}" width="80" alt="product-img">
                            <a href="product-single.php?data="></a>
                          </div>
                        </td>
  
  
                        <td class="">PKR</td>
                        
  
                        <td width="15"><input type="number" name='qty' min="1"  class="form-control itemQty" value="" /></td>
                        <td class="">PKR </td>
                     
                        <td class="">
                          <a class="fa fa-trash" onclick="return confirm('Are you sure you want to remove this item?');" href="viewcart.php?clear=" style="color:red; !important; margin-left:30px;">Remove</a>
                        </td>
                        <input  type="hidden" class="form-control" name="code" value="">
                        <td class=""><input type="hidden" value="" name="product_price" /></td>
  
                      </tr><br><br>
  
                        
                        
                      <td><b>Total Amount(PKR)</b></td>
                        <td></td>
                    </tbody>
                  </table>
                  <input type="submit" id="upd" name="submit" class="btn btn-main  pull-right "  value="Update Cart"><br><br><br>
                  <a href="checkout.php" class="btn btn-main pull-right">Checkout</a><br><br><br>
                  
                  <a href="shop-sidebar.php" class="btn btn-main pull-right" style="background-color:blue;float:left !important;">Continue Shopping</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

@endsection

