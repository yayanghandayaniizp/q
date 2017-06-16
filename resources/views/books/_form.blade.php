<div class="form-group{{ $errors->has('title') ? 'has-error' : '' }}">
	{!! Form::label('title','Judul',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('title',null,['class'=>'form-control']) !!}
		{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('author_id') ? 'has-error' : '' }}">
	{!! Form::label('author_id','Penulis',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('author_id',["Pilih Penulis"]+App\Author::pluck('name','id')->all(),null,['class'=>'form-control']) !!}
		{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('amount') ? 'has-error' : '' }}">
	{!! Form::label('amount','Jumlah',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::number('amount',null,['class'=>'form-control']) !!}
		{!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('cover') ? 'has-error' : '' }}">
	{!! Form::label('cover','Sampul',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('cover') !!}
		{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>