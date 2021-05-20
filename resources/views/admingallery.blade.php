@extends('layouts.adminapp')
@section('content')
<div id="wrap_admin" class="clearfix">
	<div class="content">
		<div class="main_admin">
			<h1>Gallery</h1>
			<a href="{{ route('admin.gallery_insert') }}"><button type="button" class="btn btn-primary">作品登録</button></a>
			<section>
				<ul class="clearfix gallery-list">
				@foreach($galleries as $gallery)
					<li><a href="{{ route('admin.gallery_edit', ['id'=>$gallery->id]) }}"><img src="storage/images/{{$gallery->imgpath}}" alt="" class="tail-img"></a></li>
				@endforeach
				</ul>
			</section>
		</div>
	</div>
</div>
@endsection