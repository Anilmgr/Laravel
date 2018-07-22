@extends('layouts.app')

@section('content')
	<div class="navbar navbar-expand-lg navbar-secondary bg-secondary">
		<h2 class="text-white text-center">Blog</h2>
	</div>

	@if(count($posts)>0)
		@foreach($posts as $post)
			<div class="card bg-light p-3">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<img src="/storage/cover_images/{{$post->cover_image}}" class="img-fluid img-thumbnail">
					</div>
					<div class="col-md-8 col-sm-8">
						<h3><a href="/posts/{{$post->id}}">{{$post->title}} </a></h3>
						<p>{!!\Illuminate\Support\Str::limit($post->description, 200 ,'...')!!}</p>
						<small>{{$post->created_at}}: By - {{$post->user->name}}</small>
					</div>
				</div>
			</div>	
		@endforeach
		{{$posts->links()}}
	@else
		<p>No post found</p>
	@endif		
@endsection