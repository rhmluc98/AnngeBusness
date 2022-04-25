<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Products;

class AdminController extends Controller
{
    // function to fetch all data in user table
    public function user()
    {
        $data = user::all();
        return view('admin.users', compact('data'));
    }
    
    // function to delete user account
    public function delete_user($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    // function to fetch all data in products table  
    public function product()
    {
        
        $data = products::all();
        return view('/admin.products',compact('data'));
    }
    
    // function to return the form to insert new product
    public function insert_products()
    {
        
        return view('/admin.insert_product');
    }

    // function to delete product
    public function deleteprod($id)
    {
       $data = products::find($id);
       $data -> delete();
       return redirect()->back();
    }

    // function to update product
    public function updateprod($id)
    {
       $data = products::find($id);
       return view('admin.updateprod', compact('data'));
    }

    // function to submit product update form
    public function submitupdateform(Request $request, $id)
    {
       $data = products::find($id);

       $data->product_qty = $request->update_prod_qty;
       $data->product_price = $request->update_prod_price;
       $data->product_expiration = $request->update_date_exp;

       $data->save();
       return redirect()->back();
    }
    
    // function to insert product
    public function uploadprod(Request $request)
    {
        
      $data = new products;

      //upload image file
      $pro_image = $request->prod_image;
      $image_name =time().'.'.$pro_image->getClientOriginalExtension();
            $request->prod_image->move('product_images',$image_name);
            
      $data->product_image=$image_name;
      $data->product_title = $request->prod_title;
      $data->product_price = $request->prod_price;
      $data->product_qty = $request->prod_qty;
      $data->product_expiration = $request->date_exp;
      $data->product_desc = $request->prod_desc;

      $data->save();
      return redirect()->back(); 
    }
}