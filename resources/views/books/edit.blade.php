@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
<<<<<<< HEAD
				<li><a href="{{ url('/admin/authors') }}">Buku</a></li>
=======
				<li><a href="{{ url('/admin/books') }}">Buku</a></li>
>>>>>>> b4196be09117dab5d01105c295d7b073d6429004
				<li class="active">Ubah Buku</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Ubah Buku</h2>
				</div>
				<div class="panel-body">
<<<<<<< HEAD
					{!! Form::model($book, ['url'=>route('books.update', $book->id), 'method'=>'put', 'class'=>'form-horizontal']) !!}
=======
					{!! Form::model($book, ['url'=>route('books.update', $book->id), 'method'=>'put', 'files'=>'true','class'=>'form-horizontal']) !!}
>>>>>>> b4196be09117dab5d01105c295d7b073d6429004
					@include('books._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection