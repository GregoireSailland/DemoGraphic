<?php
namespace App\Http\Controllers;
use App\Post;
use View;
use App\Http\Controllers\controller;
class PostsController extends Controller {
	public function index(){
		$posts=Post::paginate(5);
		return View::make('posts.index',compact('posts'));
	}
	public function view($slug){
		$post=Post::where('slug',$slug)->firstOrFail();
		return View::make('posts.view',compact('post'));
	}
	public function edit($id){
		$post=Post::findOrFail($id)->firstOrFail();
		return View::make('posts.edit',compact('post'));
	}
	public function update($id){
		$post=Post::findOrFail($id)->firstOrFail();
		return View::make('posts.edit',compact('post'));
	}
}