<html>
<head>
	<title></title>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{Asset('public/css/admin/style.css')}}">

	<script type="text/javascript" src={{Asset('public/template/ckeditor/ckeditor.js')}} ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
<div id="wrapper">
	
	<div class="nav-side-menu">
	    <div class="brand">Brand Logo</div>
	    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
	        <div class="menu-list">	  
	            <ul id="menu-content" class="menu-content collapse out">
	                <li>
	                  <a href="#">
	                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
	                  </a>
	                </li>

	                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
	                  <a href="#"><i class="fa fa-gift fa-lg"></i> UI Elements <span class="arrow"></span></a>
	                </li>
	                <ul class="sub-menu collapse" id="products">
	                    <li class="active"><a href="#">CSS3 Animation</a></li>
	                    <li><a href="#">General</a></li>
	                    <li><a href="#">Tin tức</a></li>
	                    <li><a href="#">Thảo luận</a></li>
	                    <li><a href="#">Danh sách sinh viên</a></li>
	                   
	                </ul>	               
	            </ul>
	     </div>
	</div>
	<div class="content">
		 @yield('content')
	</div>
</div>
</body>
</html>