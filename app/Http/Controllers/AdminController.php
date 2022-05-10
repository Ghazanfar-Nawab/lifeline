<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function post_add(Request $request)
    {

        $product = new Post();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->day = $request->day;
        $product->s_time = $request->s_time;
        $product->e_time = $request->e_time;
      if($request->hasfile('image')){
      
        $file = $request->file('image');
      
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/product/',$filename);
        $product->product_image_path = $filename;
          }
        $res = $product->save();
        if($res){
            return redirect('show-posts');
        }else{
            return back()->with('fail','product not saved');
        }
    }

    public function show_posts()
    {
        
        $data = Post::all();
        return view('product-list',['product_data'=>$data]);
    }
    
    
    public function deleteproduct($id)
    {
        $product = Post::find($id);
        $product->delete(); 
        return redirect('/show-posts');
    }
    
    public function show_product($id)
    { 
      $data = Post::find($id);
      return view('edit-product',['data'=>$data]);  
    }

    public function update_product(Request $request){ 
        $request->validate([
            'description'=>'required',
            'price'=>'required',
            'day'=>'required',
            's_time'=>'required',
            'e_time'=>'required',
            ]);   
        $data = Post::find($request->id);   
        $data->description = $request->description;
        $data->price = $request->price;
        $data->day = $request->day;
        $data->s_time = $request->s_time;
        $data->e_time = $request->e_time;
        $data->save();
        return redirect('show-posts');
        }
}
