@extends("app")

@section("content")

@foreach($videos as $video)
	<article>
	<h2>{{$video->name}}</h2>
	<div class="body" >{{$video->description}}</div>
	</article>
	

@endforeach

@stop