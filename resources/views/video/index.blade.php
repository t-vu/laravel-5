@extends("app")

@section("content")
<ul>
@foreach($videos as $video)
	<li>{{$video->name}}</li>

@endforeach
</ul>
@stop