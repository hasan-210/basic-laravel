<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
       $posts = Post::get();
        return view('post.index',compact('posts'));
    }

    public function create(){
        return view('post.create');
    }

    public function store(PostRequest $request){
      $post = new Post();
      $post -> title = $request->title;
      $post -> body = $request->body;
      $post->save();
      return redirect()->route('home');
    }
public function update($id){
    $post=Post::find($id);
    //$post=Post::where('id',$id)->first();
    return view('post.update',compact('post'));
  }
  public function edit(PostRequest $request,$id){
    $post = Post::find($id);
    $post -> title = $request->title;
    $post -> body = $request->body;
    $post->save();
    return redirect()->route('home');
  }
  public function delete($id){
    Post::find($id)->delete();
    return redirect()->route('home');
}
public function get_phone(){
    $phone=User::with('phone')->find(1);
    return $phone;
}
}
