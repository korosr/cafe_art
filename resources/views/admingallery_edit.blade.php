@extends('layouts.adminapp_edit')
@section('content')
<div id="wrap_admin" class="clearfix">
	<div class="content">
		<div class="main_admin">
			<h1>Gallery編集</h1>
			<p>展示作品を編集・削除します。</p>
			<form action="{{ route('admin.gallery_update') }}" method="post" enctype="multipart/form-data">
				<input type="hidden" name="gallery_id" value="{{ $gallery->id }}" >
				<div class="col-sm-5">
					@csrf
					<img src="../storage/images/{{ $gallery->imgpath }}" alt="" class="tail-img">
					<p>現在のMenu画像</p>
					@if($errors->has('imgpath')) 
						<span class="text-danger">{{ $errors->first('imgpath') }}</span>
					@endif
					<div class="imagePreview"></div>
					<div class="input-group mt-sm-2">
						<label class="input-group-btn">
							<span class="btn btn-info">
								画像選択
								<input type="file" name="imgpath" style="display:none" class="uploadFile">
							</span>
						</label>
						<input type="text" class="form-control" readonly="" value="{{ $gallery->imgpath }}">
					</div>
					<a href="{{ route('admin.gallery') }}"><button type="button" class="btn btn-primary submit-btn">キャンセル</button></a>
					<button type="submit" class="btn btn-primary submit-btn" name="update">更新</button>
					<button type="submit" class="btn btn-primary submit-btn" name="delete">削除</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection