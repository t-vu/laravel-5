@extends("app") @section("content")


<article>
	<h2>{{$video->name}}</h2>
	<div class="body">{{$video->description}}</div>
	<dv class="body">Number of Views : {{$video->view}}
	</div>
	<dv class="body">Published At : {{$video->published_at}}

</article>
<div><a class = "big" href="{{ action('VideoController@edit',['id'=>$video->id])}}">Edit this </a></div>

@stop
