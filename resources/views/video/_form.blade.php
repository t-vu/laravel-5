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
	{!! Form::label("published_at","Published At: ") !!} 
	{!! Form::input("date","published_at",Carbon\Carbon::now()->format("Y-m-d"),["class" => "form-control"]) !!}
</div>

<div class="form-group">
	{!! Form::submit($edit==true?"Edit Video": "Add Video",null,["class" => "form-control"]) !!}
</div>