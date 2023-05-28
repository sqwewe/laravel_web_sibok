<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Client;
use App\Models\Role;
use App\Models\User;
use App\Models\Worker;
use PhpParser\Node\Stmt\Return_;

class PostController extends Controller
{
    // public function worker(){
    //     $workers = Worker::all();
    //     return view('/work', ["date"=> $workers]); 
    // }
    public function doc(){
        $posts = Post::all();
        return view('/doc', ["date"=>$posts]);
    }
    public function catalog(){
        $posts = Post::all();
        return view('/catalog', ["date"=>$posts]);
    }
    public function history(){
        $posts = Post::all();
        return view('/history', ["date"=>$posts]);
    }
    public function views(){
        $posts = Post::all();
        return view('/index', ["date" => $posts]);
    }
    public function index(){
        $posts = Post::where('image', 'sib')->get();
        foreach ($posts as $post){
            dump($post->title); 
        }
        dd('end');
        $client = Client::find(1);
        dump($client);
        $role = Role::find(1);
        dump($role);
        $worker = Worker::find(1);
        dump($worker);
    }
    
    // public function create()
    // {
    //     $postsArr = [
    //         [
    //             'title' =>'Сибирячок новое издание',
    //             'image' =>'sib',
    //             'content' =>'Информатика в Сибирячке',
    //             'price' =>200,       
    //         ],
    //         [
    //             'title' =>' Другой Сибирячок новое издание',
    //             'image' =>'sib',
    //             'content' =>'Другая Информатика в Сибирячке',
    //             'price' =>200,       
    //         ],
    //         ];

    //         foreach ($postsArr as $item){
    //         Post::create($item);
    //     }
    //         dd('created');
    // }
    


    
    public function update()
    {
        $post = Post::find(2);
        
        $post->update([
            'title' =>'1updated',
            'image' =>'1updated',
            'content' =>'updated',
            'price' =>200,
        ]);
        dd('updated');
    }
    public function delete()
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
        //$post = Post::find(2);
        //$posr->delete();
        dd('deleted');
    }

    //firstOrCreate
    //updateOrCreate

    public function firstOrCreate(){

        $anotherPost = [
            'title' =>'Сибирячок на Луне',
            'image' =>'sib',
            'content' =>'Луномантик',
            'price' =>250,   
        ];

        $post = Post::firstOrCreate([
            'title' =>'Сибирячок на Луне'
        ],[
            'title' =>'Сибирячок на Луне',
            'image' =>'sib',
            'content' =>'Луномантик',
            'price' =>250, 
        ]);
        dump($post->content);
        dd('finished');
    }
    public function hero(){
        $posts = Post::all();
        return view('/hero', ["date"=>$posts]);
    }
}
