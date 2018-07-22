@extends('layouts.app')

@section('content')
	<div class="navbar navbar-expand-lg navbar-secondary bg-secondary" style="margin-bottom: 2.5px;">
		<h2 class="text-white text-center">Contact us</h2>
	</div>

	{{-- @if(count($contact)>0)
		<ul class="list-group">
			@foreach($contact as $contacts)
				<li class="list-group-item">{{$contacts}}</li>
			@endforeach
		</ul>		
	@endif --}}
	<div class="row">
	<div class="col-12 col-md-3 mbr-fonts-style display-7" style="margin-left:10em;">
			<br><br>	
	     	<p class="mbr-text">   
	     		<br><strong>Address</strong>
	            <br>
	            <br>1234 Street Name
	            <br>City, AA 99999
	            <br><br><strong>Contacts</strong>
	            <br>
	            <br>Email: support@mobirise.com
	            <br>Phone: +1 (0) 000 0000 001
	            <br>Fax: +1 (0) 000 0000 002	
	            
	        </p>
	    </div>
	    <div class="col-12 col-md-6">
	    	<br>
		<div class="google-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14135.30537433934!2d83.462029!3d27.660844!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9050d582cdb10658!2sNepathya+College!5e0!3m2!1sen!2snp!4v1532102494795" width="100%" height="360px" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>


	    
      
     
{{--         <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}


    

@endsection