
@extends('layout')
@section('content')

<h1>Tous les articles</h1>
@foreach ($posts as $post)
	<h2>
		<?php 
		/*
		URL::to("/blog/{$post->slug}")
		URL::route("post.view",$post->slug)
			*/
			?>
		<a href="{{ URL::action("PostsController@view",array('slug'=> $post->slug)) }}">
			{{$post->name}}
		</a>
	</H2>
	<P>{{$post->content}}</P>
@endforeach

@stop

