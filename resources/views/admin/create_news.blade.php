@extends('admin.default')
@section('content')
	<form method="POST" action="{{URL::to('admin/news/create_news')}}">
	<div class="tieng_viet">
		<h1>Bài viết Tiếng Việt</h1>
		<span>Tiêu đề</span> <input type="text" name="vn_tittle" /></br>
		<span>Ảnh mô tả</span><input type="file" name="pic" accept="image/*"></br>
		
		<textarea id="editor1" class="ckeditor" name="vietnam"></textarea>  
  
		<script type="text/javascript">  
			CKEDITOR.replace( 'editor1' );  
		</script>  
		
	</div>
	<div class="tieng_anh">
		<h1>Bài viết Tiếng Anh</h1>
		<span>Tiêu đề</span> <input type="text" name="eng_tittle" /></br>
		
		<textarea id="editor2" class="ckeditor" name="english"></textarea>  
  
		<script type="text/javascript">  
			CKEDITOR.replace( 'editor2' );  
		</script>  		
	</div>
	<input type="submit" value="Tạo tin" name="btn_create" />
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
@stop