<?php

namespace App\Http\Controllers;

use App\Models\Sentence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SentenceController extends Controller
{
    //
//  public function import(Request $request)
//     {
//         $file = $request->file('file');
//         $data = File::get($file);
//         $rows = explode("\n", $data);

//         foreach ($rows as $row) {
//             $columns = explode(",", $row);

//             Sentence::create([
//                 'sentences' => $columns[0]
                
//             ]);
//         }
//     }
 public function index()
    {
        $users = [];

        if (($open = fopen(storage_path() . "/gec3_Kais.csv", "r")) !== FALSE) {

            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
                $sentences[] = $data;
            }

            fclose($open);
        }

        echo "<pre>";
        print_r($sentences);
   
// foreach($sentences as $sentence){
//     Sentence::create($sentence);
// }
    }
}
