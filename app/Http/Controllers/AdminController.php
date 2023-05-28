<?php

namespace App\Http\Controllers;

use App\Exports\PostsExport;
use App\Exports\WorkerExport;
use App\Exports\UserExport;
use App\Models\Category;
use Maatwebsite\Excel\Facades\Excel;


use Illuminate\Http\Request;
use App\Models\Post;

use App\Models\Client;
use App\Models\Role;
use App\Models\User;
use App\Models\Worker;
use PhpParser\Node\Stmt\Return_;

class AdminController extends Controller
{
    public function admin()
    {
        $posts = Post::all();
        return view('/admin', ["date" => $posts]);
    }

    // public function worker()
    // {
    //     $workers = Worker::all();
    //     return view('post.index', compact('workers'));
    // }
    public function index()
    {
        $posts = Post::all();
        $workers = Worker::all();
        $users = User::all(); 
        $categories =  Category::all();
        return view('post.index', compact('posts', 'workers', 'users', 'categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'string',
            'image' => 'string',
            'content' => 'string',
            'full_content' => 'string',
            'price' => 'integer',
        ]);
        Post::create($data);
        return redirect()->route('table.index');
    }
    public function store_worker(Request $request)
    {
        $date = $request->validate([
            'name' => 'string',
            'first_name' => 'string',
            'last_name' => 'string',
            'description' => 'string',
            'image' => 'string',
            'phone' => 'string',
            'adress' => 'string',
        ]);
        Worker::create($date);
        return redirect()->route('table.index');
    }

    public function create()
    {
        $posts = Post::all();
        return view('post.create', compact('posts'));
    }
    public function create_worker()
    {
        $workers = Worker::all();
        return view('post.create', compact('workers'));
    }




    public function edit(Post $post)
    {

        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'string',
            'image' => 'string',
            'content' => 'string',
            'full_content' => 'string',
            'price' => 'integer',
        ]);
        $post->update($request->all());
        return redirect()->route('table.index')->with('success', 'Ураааааа');
    }


    public function delete(Post $post)
    {
        $post = Post::withTrashed();
        $post->restore();
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('table.index');
    }


    public function deleteW(Worker $worker)
    {
        $worker = Worker::withTrashed();
        $worker->restore();
    }
    public function destroyW(Worker $worker)
    {
        $worker->delete();
        return redirect()->route('table.index');
    }

    public function deleteU(User $user)
    {
        $user = Post::withTrashed();
        $user->restore();
    }
    public function destroyU(User $user)
    {
        $user->delete();
        return redirect()->route('table.index');
    }


    public function show(Post $post)
    {
        return view('table.show', compact('post'));
    }
    public function showW(Worker $worker)
    {
        return view('table.show', compact('worker'));
    }
    public function showU(User $user)
    {
        return view('table.show', compact('user'));
    }
    
    
    public function tableExport()
    {
        return Excel::download(new PostsExport, 'posts.xlsx');

    }
    public function tableExportWorker()
    {
        return Excel::download(new WorkerExport, 'workers.xlsx');

    }
    public function tableExportUser()
    {
        return Excel::download(new UserExport, 'users.xlsx');

    }
}
