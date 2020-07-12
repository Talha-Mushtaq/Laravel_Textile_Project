@extends('User/master')

@section('title','products')

@section('main')


<style>
 #cartIcon li a
{
    color: black;
    text-decoration: none;
}

#cartIcon li a:hover
{
    text-decoration: none;
    color: white
}
</style>

{{-- <tr>
    <th scope="row">{{$p->id}}</th>
    <td></td>
    <td>{{$p->category}}</td>
    <td>{{$p->detail}}</td>
    <td><a href="/Admin/EditProduct/{{$p->id}}/{{$p->title}}/{{$p->category}}/{{$p->price}}/{{$p->image}}/{{$p->detail}}" class="btn btn-info">Edit</></td>
    <td><a href="/Admin/DeleteProduct/{{$p->id}}" class="btn btn-warning" name="p_delete">Delete</a></td>
</tr>	 --}}
    
      @foreach ($products as $p)
                 {{-- <form method="POST" action="{{url('/Admin/saveProduct/'{{$p->id}})}}" enctype="multipart/form-data" > --}}
            
                    {{-- <form method="POST" action="{{url('ProductSinglePage/'.{{p->$id}})}}" enctype="multipart/form-data" > --}}

                        {{-- @csrf --}}

                            <div class="col-md-3" style="cursor:pointer;">
                                    
                                <div class="product-item" data-aos="fade-down">
                                    <div class="product-thumb">
                                        <img class="img-responsive"  src="{{asset('Images/Admin/Uploads/'.$p->image)}}" style="width:300px; !important; height:300px; !important;" alt="product-img" />
                                        <div class="preview-meta">
                                            <ul id="cartIcon">
                                                <li>
                                                    <a href="" class="btn btn-info" style="margin-bottom: 5px;outline:none;border:black"><i class="tf-ion-android-cart"  ></i></a>                                                
                                                </li>
                                                <li>
                                                    <a href="ProductSinglePage/{{$p->id}}" class="btn btn-info" style="margin-bottom: 5px;outline:none;border:black"><i class="tf-ion-eye"></i></a>                                                
                                                </li>
                                              
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <br/>
                                       
                                        <h5 class="price">{{$p->title}}</h5>
                                        <p class="price">PKR {{$p->price}}</p>
                                    </div>
                                </div>
                            </div>		
                    {{-- </form> --}}


    @endforeach




@endsection

