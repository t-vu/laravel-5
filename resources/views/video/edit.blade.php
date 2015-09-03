@extends("app") @section("content")
<h2>Edit video</h2>
{{-- you can leave out the url, then the post url will be the current url  --}}
{!! Form::model($video,["method"=>"PATCH","action" => ["VideoController@update",$video->id]]) !!}

@include("video._form",["edit"=>true])


{!! Form::close() !!} @stop

@include("errors.list")