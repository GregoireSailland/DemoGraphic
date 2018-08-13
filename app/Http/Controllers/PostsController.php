<?php
namespace App\Http\Controllers;
use Redirect;
use Request;
use Session;
use App\Post;
use View;
use App\Http\Controllers\controller;
class PostsController extends Controller {
	protected $layout = 'layouts.layout';
	
	public function index(){
		$posts=Post::paginate(5);
		return View::make('posts.index',compact('posts'));
	}
	public function create(){
		$post =new Post();
		return View::make('posts.view',compact('post'));
	}
	public function store(){
		$post = Post::create(Request::all());
		return Redirect::action('PostsController@edit', $post->id)->with(['success'=>'Post créé']);
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
		$post->update(Request::all());
		var_dump(Session::get('_token'));
		return Redirect::back()->with(['success' => 'Ça a marché']);
		//return Request::all();
		//return View::make('posts.edit',compact('post'));
	}
	public function delete($id){
		Post::destroy($id);
		return Redirect::back()->with(['success' => 'Post Supprimé']);
	}
}