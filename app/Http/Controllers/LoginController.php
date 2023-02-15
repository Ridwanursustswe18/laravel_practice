<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
      public function index()
    {
        DB::beginTransaction();
        $users = DB::select('select * from users where id= :id ', ['id'=>100]);
        // DB::transaction(function(){
        //     DB::select('select * from users where id= :id ', ['id'=>100]);
        //     DB::select('select * from users where id= :id ', ['id'=>104]);
        // });
        echo DB::rollBack();
         return view('user.index', ['users' => $users]);
        DB::commit(); 
    }
}
