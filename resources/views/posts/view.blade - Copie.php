<?php /*
	
*/ ?>

@extends('layout')
@section('content')

<P><a href="{{URL::route('posts.index')}}">Retour</a></P>
<h1>{{$post->name}}</h1>
<P>{{$post->content}}</P>
<p><a href="{{ URL::route('posts.edit',$post->id) }}">Editer</a></p>

@stop
