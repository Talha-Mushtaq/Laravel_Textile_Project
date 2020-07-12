<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ProductModel;

class ProductController extends Controller
{
                          //admin
                          public function saveProduct(Request $request)
                          {
                             $ProductModel = new ProductModel ;
                      
                             $ProductModel->title = $request->input('p_title') ;
                             $ProductModel->category = $request->input('p_cat') ;
                             $ProductModel->price = $request->input('p_price') ;
                             $ProductModel->detail = $request->input('p_detail') ;
                             
                                  $file = $request->file('p_image') ;
                                  $extension = $file->getClientOriginalExtension();
                                  $filename = time() . '.' .$extension; 
                                  $file->move('Images/Admin/Uploads/',$filename);      
                           
                                  $ProductModel->image = $filename ;
                      
                                   $ProductModel->save();
                      
                                 return redirect("Admin/Products");
                          }
                      
                      
                          public function showProduct()
                          {
                              $products = ProductModel::all();
                              
                              return view('Admin/products')->with('products',$products);
                          }
                      
                      
                      
                          public function updateProduct(Request $request , $id)
                          {
                              $ProductModel =  ProductModel::find($id) ;
                            
                              $ProductModel->title = $request->input('p_title') ;
                              $ProductModel->category = $request->input('p_cat') ;
                              $ProductModel->price = $request->input('p_price') ;
                              $ProductModel->detail = $request->input('p_detail') ;
                              
                      
                               $imagePathName =  $request->input('imagePathName');
                                  
                                $chk =  substr($imagePathName,0,1);
                                $preImg = substr($imagePathName,1);
                      
                                if($chk == 'p')
                                {
                                    $ProductModel->image = $preImg ;
                                }
                        // echo $imagePathName;
                                if($chk == 'n')
                                {
                      
                                // Storage::Delete(asset('public/Images/Admin/Uploads/'.$preImg));
                           
                                   $file = $request->file('p_image') ;
                                   $extension = $file->getClientOriginalExtension();
                                   $filename = time() . '.' .$extension; 
                                   $file->move('Images/Admin/Uploads/',$filename);      
                            
                                   $ProductModel->image = $filename ;
                                    
                                }     
                          
                                $ProductModel->save() ;
                          
                                return redirect("Admin/Products");
                          
                             }
                      
                      
                             public function deleteProduct($id)
                             {
                      
                            
                               $products = ProductModel::find($id);
                               $products->delete();
                               // echo print_r($products);  
                               return redirect('Admin/Products')->with('products',$products);
                       
                             } 
                      
                             public function searchProduct(Request $request)
                             {
                      
                               $product=  ProductModel::all()->where('title','like',$request->input('search'),'%') ;
                               return view("Admin/searchProduct")->with('product',$product);
                      
                             }
                      
}
