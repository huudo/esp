@extends('admin.default')
@section('content')
	<div class="menu_action">
		<h1>Danh sách tin tức</h1>
		<a href=""><p><i class="fa fa-plus-square" aria-hidden="true"></i> Tạo mới</a></p>
	</div>
	@foreach ($news as $new)
   		<?php
   			echo $new['english'];
   		?>
	@endforeach

@stop 