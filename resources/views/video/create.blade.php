@extends("app") @section("content")
<h2>Create a new video</h2>
{{-- you can leave out the url, then the post url will be the current url  --}}
{!! Form::open(["url" => "video"]) !!}
@include("video._form",["edit"=>false])

{!! Form::close() !!} @stop

@include("errors.list")