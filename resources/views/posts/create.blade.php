@extends('layouts.master')


@section('title')
    Create New Posts
@endsection


@push('head')
    <link href="/css/books/show.css" type='text/css' rel='stylesheet'>
@endpush


@section('content')
        <div class="row">
		 <div class="col-md-8 col-md-offset-2">
		  <h1>Create New Post:</h1>
		   {!! Form::open(['route' => 'posts.store']) !!}
		     {{csrf_field()}}
			<div class="form-group">
			{!!Form::label('title','Title:')!!}
			{!!Form::text('title',null,['class'=>'form-control'])!!}
			</div>

			<div class="form-group">
			{!!Form::label('body','Body:')!!}
			{!!Form::textarea('body',null,['class'=>'form-control'])!!}
			</div>
			
			<div class="form-group">
			{!!Form::submit('Submit Post',['class'=>'btn btn-primary form-control'])!!}
			</div>
		   {!! Form::close() !!}
		
		</div>
		</div>
		
		 
	
			
	
@endsection


@push('body')
    <script src="/js/books/show.js"></script>
@endpush
