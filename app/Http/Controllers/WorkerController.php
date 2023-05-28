<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Client;
use App\Models\Role;
use App\Models\User;
use App\Models\Worker;
use PhpParser\Node\Stmt\Return_;

class WorkerController extends Controller
{
    public function worker(){
        $workers = Worker::all();
        return view('/work', ["date"=> $workers]); 
    }
}
// public function create()
// {
//     $postsArr = [
//         [
//             'name' =>'Сибирячок новое издание',
//             'first_name' =>'Сибирячок новое издание',
//             'last_name' =>'Сибирячок новое издание',
//             'description' =>'Сибирячок новое издание',
//             'image' =>'sib',

//         ],
//         [
//             'name' =>'Сибирячок новое издание',
//             'first_name' =>'Сибирячок новое издание',
//             'last_name' =>'Сибирячок новое издание',
//             'description' =>'Сибирячок новое издание',
//             'image' =>'sib',      
//         ],
//         ];

//         foreach ($postsArr as $item){
//         Post::create($item);
//     }
//         dd('created');
// }