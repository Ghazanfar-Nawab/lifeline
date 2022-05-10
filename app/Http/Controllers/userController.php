<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class userController extends Controller
{
    
    public function show_posts()
    {
        $carb = Carbon::now();
        $date =$carb->format('l');      
        $time =$carb->toTimeString();
        
        if ($date == 'Monday'){
            $data = DB::table('posts')->where('day', 'monday')->get();
            if($data){
                DB::select('select * from posts where  e_time >="$time"');
                
                return view('product-list',['product_data'=>$data]);      
         
            }else{
                return 'sql query not worked';
            }
        }
        
        
        if ($date == 'Tuesday'){
            
            $data = DB::select('select * from posts where  day ="tuesday"');     
            if($data){
                DB::select('select * from posts where  e_time >="$time"');
                
                return view('product-list',['product_data'=>$data]);      
         
            }else{
                return 'sql query not worked';
            }
        }
        
        if ($date == 'Wednesday'){
            $data = DB::table('posts')->where('day', 'wednesday')->get();
            if($data){
                DB::select('select * from posts where  e_time >="$time"');    
                return view('product-list',['product_data'=>$data]);      
         
            }else{
                return 'sql query not worked';
            }
        }
        
        if ($date == 'Thursday'){
            $data = DB::table('posts')->where('day', 'thursday')->get();
            if($data){
                DB::select('select * from posts where  e_time >="$time"');                
                return view('product-list',['product_data'=>$data]);      
         
            }else{
                return 'sql query not worked';
            }
        }
        
        if ($date == 'Friday'){
            $data = DB::table('posts')->where('day', 'friday')->get();
            if($data){
                DB::select('select * from posts where  e_time >="$time"');
                
                return view('product-list',['product_data'=>$data]);      
         
            }else{
                return 'sql query not worked';
            }
        }
        
        if ($date == 'Saturday'){
            $data = DB::table('posts')->where('day', 'saturday')->get();
            if($data){
                DB::select('select * from posts where  e_time >="$time"');
                
                return view('product-list',['product_data'=>$data]);      
         
            }else{
                return 'sql query not worked';
            }
        }
        
        if ($date == 'Sunday'){
            $data = DB::table('posts')->where('day', 'sunday')->get();
            if($data){
                DB::select('select * from posts where  e_time >="$time"');
                
                return view('product-list',['product_data'=>$data]);      
         
            }else{
                return 'sql query not worked';
            }
        }
        
        
        else{
            return 'something wrong';
        }
        
    }
}
