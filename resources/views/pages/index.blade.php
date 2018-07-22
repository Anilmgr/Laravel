@extends('layouts.app')

@section('content')
	<div class="navbar navbar-expand-lg  bg-secondary" style="margin-bottom: 2.5px;">
		<h2 class="text-white text-center"><b>Home</b></h2>
	</div>
	@if(count($photos)>0)
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  		<ol class="carousel-indicators">
	  	
	  			@foreach ($photos as $photo)
	    			<li data-target="#carouselExampleIndicators" data-slide-to="{{$photo->id}}" class="{{ $loop->first ? 'active' : '' }}"></li>
	    		@endforeach

	  		</ol>
	  		<div class="carousel-inner">
	  			@foreach ($photos as $photo)
	    			<div class="carousel-item {{ $loop->first ? 'active' : '' }}">
	      				<img class="d-block w-100" src="/storage/cover_images/{{$photo->cover_image}}" alt="First slide">
	      				<div class="carousel-caption d-none d-md-block">
	    					<h4><b>{{$photo->title}}</a></b></h4>
	    					<p>{!!\Illuminate\Support\Str::limit($photo->description, 250 ,'...')!!} <br/> <a href="/posts/{{$photo->id}}" ><b> Read more!! </b> </a></p>
	  					</div>
	    			</div>
	    		@endforeach
	  		</div>
	  		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	   			<span class="sr-only">Previous</span>
	  		</a>
	  		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    		<span class="sr-only">Next</span>
	  		</a>
		</div>
	@endif
	<hr/>
	<div>
		<h1 class="text-center">Lorem Ipsum</h1>
		<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dignissim justo vitae risus venenatis, ac ullamcorper tellus porta. Aenean vel ligula ornare, vestibulum diam id, convallis diam. Mauris ut malesuada felis. Nulla vitae sapien at tortor finibus molestie. Quisque sit amet maximus ante. In semper in sapien ac consequat. Donec malesuada ex et maximus sollicitudin. Proin mauris lectus, rhoncus ac enim ut, mollis consequat risus. Proin suscipit ipsum at urna maximus tempus. Fusce eget ipsum accumsan, ultrices lectus eget, tincidunt arcu.

				Vivamus ligula augue, porta nec quam egestas, volutpat dictum diam. Donec sollicitudin ante lorem, ac fringilla augue bibendum a. Quisque tincidunt accumsan augue, in ornare massa rutrum eu. Etiam et maximus urna, at molestie odio. Cras bibendum quis velit et malesuada. Aliquam erat volutpat. Nam nec viverra arcu, id egestas ipsum. Nam id quam vel purus condimentum ultrices in eu sem.

				Nunc ac leo euismod nunc dictum imperdiet. Donec faucibus sem ut consequat rutrum. Aenean luctus ullamcorper lectus sed molestie. Suspendisse id ullamcorper lorem. In ut ex dolor. In eu nisl enim. Donec erat turpis, ornare eget tincidunt vitae, bibendum ac massa. Duis id odio eu neque facilisis imperdiet vel a eros. Donec sit amet condimentum ex. Aenean semper faucibus porttitor. Praesent molestie, velit ut ultricies egestas, nulla nunc accumsan ligula, id laoreet ante erat quis dui. Aliquam tellus neque, gravida sed vestibulum nec, commodo id massa. Proin quis aliquet tortor. Vestibulum commodo ante vel quam euismod ultricies. Nulla pharetra augue tortor, eu interdum ante pharetra ut. 
			</p>
			<p>
			<ul>				
    			<li>Phasellus vel dolor pharetra, tempor eros vitae, hendrerit nulla.</li>
    			<li>Nunc non est non purus convallis facilisis placerat sed urna.</li>
    			<li>Nullam eget diam faucibus, volutpat felis et, rhoncus nunc.</li>
    			<li>Vivamus laoreet mi sed pulvinar rutrum.</li>
    			<li>Donec in nisl eget elit dignissim sagittis.</li>
    			<li>Quisque at quam commodo, finibus sapien eu, malesuada sapien.</li>
			</ul>
		</p>
		<p>
			Nunc ac leo euismod nunc dictum imperdiet. Donec faucibus sem ut consequat rutrum. Aenean luctus ullamcorper lectus sed molestie. Suspendisse id ullamcorper lorem. In ut ex dolor. In eu nisl enim. Donec erat turpis, ornare eget tincidunt vitae, bibendum ac massa. Duis id odio eu neque facilisis imperdiet vel a eros. Donec sit amet condimentum ex. Aenean semper faucibus porttitor. Praesent molestie, velit ut ultricies egestas, nulla nunc accumsan ligula, id laoreet ante erat quis dui. Aliquam tellus neque, gravida sed vestibulum nec, commodo id massa. Proin quis aliquet tortor. Vestibulum commodo ante vel quam euismod ultricies. Nulla pharetra augue tortor, eu interdum ante pharetra ut. 
		</p>
	</div>
@endsection