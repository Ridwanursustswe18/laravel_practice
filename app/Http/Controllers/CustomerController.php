<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\UserCategoryAccess;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function show(){
    //       $categories_id = UserCategoryAccess::where('customer_id',31)->pluck('accessable_category');
    //         dd($categories_id[0][0]);
    //         $category_ids = explode(',',$categories_id[0][0]);     //  print_r($category_ids);
    //         dd(gettype($categories[0]));
    //           $categories = array_walk($category_ids,function(&$value){
    //              $value =  intval($value);
    //           });  
    //                    $categories = json_decode($categories_id);
    //       $pd = Product::whereIn('category_id', $categories_id[0][0])->get();

    //    return $pd;
         //dd(Product::select('title')->where('category_id',1));
         $category_id = Product::where('id',1000)->value('category_id');
         //dd($category_id);
$users = [];
    //    dd($category_id);
          $access_category = UserCategoryAccess::get();
          echo($access_category);
                    foreach($access_category as $cat){
                        if(in_array($category_id,json_decode( $cat['accessable_category']))){
                            $users[] = $cat['customer_id'];
                        }
                       

          }
          dd($users);
    //      dd (getType($access_category[0])." ".getType($category_id));
    //       $user_ids = UserCategoryAccess::whereIn('accessable_category',$category_id)->get();

        //  return $user_ids;
         
        
    }
}
