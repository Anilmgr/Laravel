@extends('layouts.app')

@section('content')
	<h2>{{$post->title}} </h2>
	<div class="text-center">
		@if($post->cover_image != 'noimage.jpg')
		<img src="/storage/cover_images/{{$post->cover_image}}" class="img-fluid ">
		@endif
		<p>{!!$post->description!!}</p>
	</div>
	<small>{{$post->created_at}} : By - {{$post->user->name}}</small>
	@if(!Auth::guest())
		@if(Auth::user()->id == $post->user_id)
			<div class="btn-group float-right">
				<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a> 
				{!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
					{{Form::hidden('_method','DELETE')}}
					{{FORM::submit('Delete',['class'=>'btn btn-danger'])}} 
				{!!Form::close()!!}
			</div>
		@endif
	@endif
@endsection