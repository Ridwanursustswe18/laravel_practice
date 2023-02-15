<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    //
     public function store(Request $request)
    {
        // Validate the request...
 
        $flight = new Flight();
 
        $flight->name = $request->name;
 
       
        // $flight->replicate([
        //     'last_flown',
        //     'last_pilot_id'
        // ]);
        //  $flight->save();
    }
    public function show(){
        // foreach (Flight::all() as $flight) {
        //     echo $flight->name;
        // }
        // return  Flight::where('name','Kingfisher')->firstOr(function(){
        //     return "no flights found";
        // });
        // return Flight::where('name','emirates')->count();
        $flight = Flight::find('01gs2fxphfazwcjq7xc9ve9451');
        $flight->name = 'Emirates';
        // return $flight->wasChanged('name');    
        $flight->save();    
        // $flight->delete();
       
    }
}
