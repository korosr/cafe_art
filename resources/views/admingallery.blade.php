@extends('layouts.adminapp')
@section('content')
<div id="wrap_admin" class="clearfix">
	<div class="content">
		<div class="main_admin">
			<h1>Gallery</h1>
			<a href="{{ route('admin.gallery_insert') }}" class="btn btn-primary" role="button" aria-pressed="true">作品登録</a>
		<section>
			<ul class="clearfix gallery-list">
			@foreach($galleries as $gallery)
				<li><img src="storage/images/{{$gallery->imgpath}}" alt=""></li>
			@endforeach
			</ul>
		</section>
		
		</div>
	</div>
</div>
@endsection