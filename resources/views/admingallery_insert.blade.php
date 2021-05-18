@extends('layouts.adminapp')
@section('content')
<div id="wrap_admin" class="clearfix">
	<div class="content">
		<div class="main_admin">
			<h1>Gallery登録</h1>
			<p>展示作品を登録します。</p>
			<form action="{{ route('admin.gallery_add') }}" method="post" enctype="multipart/form-data">
				@csrf	
				<div class="col-sm-5">
				@if($errors->has('imgpath')) 
					<span class="text-danger">{{ $errors->first('imgpath') }}</span>
				@endif
					<div class="imagePreview"></div>
					<div class="input-group mt-sm-2">
						<label class="input-group-btn">
							<span class="btn btn-info">
								画像選択
								<input type="file" name="imgpath" style="display:none" class="uploadFile" value="{{ old('imgpath') }}">
							</span>
						</label>
						<input type="text" class="form-control" readonly="">
					</div>
					<a href="{{ route('admin.gallery') }}"><button type="button" class="btn btn-primary submit-btn">キャンセル</button></a>
					<button type="submit" class="btn btn-primary submit-btn" name="insert">登録</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection