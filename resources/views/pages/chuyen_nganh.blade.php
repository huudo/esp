@extends('layouts.default')
@section('content')
<link rel="stylesheet" type="text/css" href="{{Asset('public/css/chuyen_nganh.css')}}">
<div id="content">
	<div class="row">
		<div class="group_chuyen_nganh">
			<div class="col-md-3">
				
			</div>	
		</div>
		<div class="col-md-12">

			<h2>{{$chuyen_nganh[0]}}</h2>
			<p>{{$chuyen_nganh[1]}}</p>
			<img src="{{Asset('public/images/chuyen_nganh.jpg')}}" class="img_chuyennganh">
			<p> - {{$chuyen_nganh[2]}}</p>
			<p> - {{$chuyen_nganh[3]}}</p>
			<p> - {{$chuyen_nganh[4]}}</p>
			
		</div>
	</div>
	<div class="row" align="center">
		
		<div class="dang_ky col-md-6" align="center">
			<h2><i class="fa fa-graduation-cap"></i> {{$contact[7]}}</h2>
			<form method= "POST" action="{{URL::to('/chuyen_nganh')}}" class="submit_form">
				<input type="text" id="name" class="name" name="name" placeholder="{{$contact[3]}}">
				<input type="date" id="year" class="year" name="year" placeholder="{{$contact[6]}}">
				<input type="text" id="phone" class="phone" name="phone" placeholder="{{$contact[1]}}">
				<input type="text" id="email" class="email" name="email" placeholder="{{$contact[4]}}">
				<input type="text" id="job" class="job" name="job" placeholder="{{$contact[5]}}">
				<select>
					<option value="{{$menu[6]}}">{{$menu[6]}}</option>
					<option value="{{$menu[7]}}">{{$menu[7]}}</option>
					<option value="{{$menu[8]}}">{{$menu[8]}}</option>
					<option value="{{$menu[9]}}">{{$menu[9]}}</option>
				</select>
				<input type="submit" id="btn_submit" class="btn_submit" name="btn_submit" value="{{$contact[8]}}">				
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
		</div>
		<img src="{{Asset('public/images/bottom.jpg')}}">
	</div>
	<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">

</div>
<div>
	<div class="fb-comments" data-href="http://espenglish.vn/chuyen_nganh" data-width="800" data-numposts="5"></div>
</div>
</div>

@stop
