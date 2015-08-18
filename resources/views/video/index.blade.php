@extends("app")

@section("content")

<h1>Videos </h1>
<hr>
@foreach($videos as $video)
	<article>
	<h2><a href = "{{action('VideoController@show',[$video->id])}}">{{$video->name}}</a></h2>
	<div class="body" >{{$video->description}}</div>
	</article>
	

@endforeach
<hr>
<div><a class = "big" href="{{ url('video/create')}}">Create a new video</a></div>

@stop