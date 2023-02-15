<?php

namespace App\Http\Controllers;

use App\Models\user_tbl;
use Illuminate\Http\Request;

class UserTableController extends Controller
{
    public function show(){
    $user = user_tbl::find(101);
    $phone = $user->phone;
    return view('user.index',compact('user','phone'));
    }
}
