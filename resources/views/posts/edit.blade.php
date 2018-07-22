@extends('layouts.app')
@section('content')
	<h1>EDIT POST</h1>	
	{!! Form::open(['action' => ['PostsController@update',$post->id], 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
        	{{Form::label('title','Title')}}
        	{{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'] )}}
        	{{Form::label('description','Description')}}
        	{{Form::textarea('description',$post->description,['id'=>'article-ckeditor','class'=>'form-control','row'=>'13','placeholder'=>'Description'] )}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Update',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection