@extends('layouts.master')


@section('title')
    Create New Posts
@endsection


@push('head')
    <link href="/css/books/show.css" type='text/css' rel='stylesheet'>
@endpush


@section('content')
        <div class="row">
		 <div class="col-md-8">
		  <p class="lead alert alert-success">The post is saved!</p>
		  
		  <h1> {{$post->title}}</h1>
		  <p class="lead">{{$post->body}}</p>
		
		</div>
		 <div class="col-md-4">
		   <div class="well">
		     <dl class="dl-horizantal">
                <dt>Create At:</dt>
				<dd>{{date('M j,Y h:ia',strtotime($post->created_at))}}</dt>
			</dl>
			<dl class="dl-horizantal">
                <dt>Last updated:</dt>
				<dd>{{date('M j,Y h:ia',strtotime($post->updated_at))}}</dt>
			</dl>
			<hr>
			 <div class="row">
			    <div class="col-sm-6">
				{{Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=> 'btn btn-primary btn-block'))}}
				</div>
				<div class="col-sm-6">
				{{Html::linkRoute('posts.destroy','Delete',array($post->id),array('class'=> 'btn btn-danger btn-block'))}}
				</div>
		   </div>
		 </div>
		 
		</div>
		
		 
	
			
	
@endsection


@push('body')
    <script src="/js/books/show.js"></script>
@endpush
