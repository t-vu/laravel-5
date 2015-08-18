@extends("app")

@section("content")


	<article>
	<h2>{{$video->name}}</h2>
	<div class="body" >{{$video->description}}</div>
	</article>
	

@stop