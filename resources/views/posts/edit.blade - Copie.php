<?php /*
	
*/ ?>

@extends('layout')
@section('content')

{{ Form::model($post,
	[
	'url' =>
		$post->id?
		URL::route('posts.update',$post->id)
		:
		URL::route('posts.store')
	]
	) 
}}
	<div class="form-group">
		{{ Form::label('name','Titre',['class' => 'form-label']) }}
		{{ Form::text('name',$post->name,['class' => 'form-control']) }}
	</div>
	<div class="form-group">
		{{ Form::label('slug','Slug',['class' => 'form-label']) }}
		{{ Form::text('slug',$post->slug,['class' => 'form-control']) }}
	</div>
	<div class="form-group">
		{{ Form::label('content','Contenu',['class' => 'form-label']) }}
		{{ Form::textarea('content',$post->content,['class' => 'form-control']) }}
	</div>
	{{ Form::submit() }}
{{ Form::close() }}
<br/>
<br/>
<p>Pirat form:</p>
<form action="{{ URL::route('posts.update',$post->id) }}" method="Post">
	<div class="form-group">
		{{ Form::label('slug','Slug',['class' => 'form-label']) }}
		{{ Form::text('slug',$post->slug,['class' => 'form-control']) }}
	</div>
	{{ Form::submit() }}
</form>
@stop
