@extends('layouts.app')

@section('content')
	<h1>CREATE POST</h1>	
	{!! Form::open(['action' => 'PostsController@store', 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
    	<div class="form-group">
	    	{{Form::label('title','Title')}}
	    	{{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'] )}}
	    	{{Form::label('description','Description')}}
	    	{{Form::textarea('description','',['id'=>'article-ckeditor','class'=>'form-control','row'=>'13','placeholder'=>'Description'] )}}
	    </div>
	    <div class="form-group">
	    	{{Form::file('cover_image')}}
	    </div>
	    {{Form::submit('Add post',['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection