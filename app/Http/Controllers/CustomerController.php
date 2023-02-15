<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\UserCategoryAccess;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function show(){
         $categories_id = UserCategoryAccess::where('customer_id',20)->pluck('accessable_category');
         $category_ids = explode(',',$categories_id[0][0]);
        //  print_r($category_ids);
        //   dd(gettype($categories[0]));
            $categories = array_walk($category_ids,function(&$value){
               $value =  intval($value);
            });  
            // $categories = json_decode($categories_id);
           $pd = Product::whereNotIn('category_id', $category_ids)->get();

      return $pd;
        // dd(Product::select('title')->where('category_id',1));
    }
}
