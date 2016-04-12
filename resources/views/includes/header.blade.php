
	<header>
		<div id="banner">
			<div class="container-fluid">
				<div class="row">
					<a href="{{URL::to('/')}}">
					<div class="col-md-4" id="logo">

					</div>
					</a>
					<div class="hidden-xs col-md-5">
						<h2 class="top_title">ENGLISH TEACHER WITH 100% FOREIGN</h2>
					</div>
					<div class="hidden-xs col-md-3" align="right">
						<div id="hot_line">
							<p><i class="fa fa-phone"></i>0988331890</p>
						</div>
						<div id="icon_link">
							<a target="_blank"  href="https://www.facebook.com/ESP-English-1698612423715540/?ref=br_rs"><i class="fa fa-facebook-official"></i></a>
							<a target="_blank" href=""><i class="fa fa-twitter-square"></i></a>
							<a target="_blank" href=""><i class="fa fa-google-plus-square"></i></a>
							<a target="_blank" href=""><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="wrapper">
		<div id="menu">
			<div id="sub_menu">
				<nav class="navbar navbar-default" align="left">
  				<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			    	<div class="row">
			    		<div class="col-md-3 hidden-sm hidden-md hidden-lg">
			    			<p id="slogan_small"> BEYOND YOUR LIMITS!</p>
			    		</div>
			    		<div class='col-md-9'>
			    			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							    <span class="sr-only">Toggle navigation</span>
							    <span class="icon-bar"></span>
							    <span class="icon-bar"></span>
							    <span class="icon-bar"></span>
							</button>
			    		</div>
			    	</div>		
					
		    	</div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-left ">
					<li><a href="{{URL::to('/')}}"><i class="fa fa-home"></i>{{$menu[0]}} <span class="sr-only">(current)</span></a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					  		<i class="fa fa-graduation-cap"></i> {{$menu[1]}}<span class="caret"></span></a>
					  <ul class="dropdown-menu">
					    <li><a href="{{URL::to('/introduce')}}">{{$menu[2]}}</a></li>
					    <li role="separator" class="divider"></li>
					    <li><a href="#">{{$menu[3]}}</a></li>	            
					  </ul>
					</li>
					<li><a href="{{URL::to('news')}}"><i class="fa fa-bullhorn"></i> {{$menu[4]}}</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					  		<i class="fa fa-tasks"></i>{{$menu[5]}}<span class="caret"></span></a>
					  <ul class="dropdown-menu">
					    <li><a href="{{URL::to('/chuyen_nganh')}}">{{$menu[6]}}</a></li>
					    <li role="separator" class="divider"></li>
					    <li><a href="{{URL::to('/giao_tiep')}}">{{$menu[7]}}</a></li>	
					    <li role="separator" class="divider"></li>            
					    <li><a href="#">{{$menu[8]}}</a></li>
					    <li role="separator" class="divider"></li>
					    <li><a href="#">{{$menu[9]}}</a></li>	  		             
					  </ul>
					</li>
					<li><a href="#"><i class="fa fa-users"></i>{{$menu[10]}}</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="{{URL::to('/contact')}}"><i class="fa fa-map-marker"></i>{{$menu[11]}}</a></li>
					</ul>
			     
			    </div><!-- /.navbar-collapse -->
		 	 </div><!-- /.container-fluid -->
			</nav>
			</div>
			
		</div>
		<div id="language" align="right">
				<div id="vietnam">
				<a href="{{ URL::to('/vn') }}">
					<img src="{{Asset('public/images/vietnam.png')}}">
				</a>
				</div>
				<div id="english">
				<a href="{{ URL::to('/eng') }}">
					<img src="{{Asset('public/images/english.png')}}">
				</a>
					
				</div>
			</div>
			
	</div>
	

