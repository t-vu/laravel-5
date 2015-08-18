@extends("app") @section("content")
<h2>Create a new video</h2>
{{-- you can leave out the url, then the post url will be the current url  --}}
{!! Form::open(["url" => "video/create"]) !!}

<div class="form-group">
	{!! Form::label("name","Name:") !!} 
	{!! Form::text("name",null,["class" => "form-control"]) !!}
	</div>
<div class="form-group">
	{!! Form::label("description","Description:") !!} 
	{!! Form::textarea("description",null,["class" => "form-control"]) !!}
</div>

<div class="form-group">
	{!! Form::label("view","Number Of Views:") !!} 
	{!! Form::text("view",null,["class" => "form-control"]) !!}
</div>

<div class="form-group">
	{!! Form::submit("Add Video",null,["class" => "form-control"]) !!}
</div>


{!! Form::close() !!} @stop
