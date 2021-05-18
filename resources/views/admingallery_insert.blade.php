@extends('layouts.adminapp')
@section('content')
<div id="wrap_admin" class="clearfix">
	<div class="content">
		<div class="main_admin">
			<h1>Gallery登録</h1>
			<p>展示作品を登録します。</p>
			<form action="{{ route('admin.gallery_add') }}" method="post" enctype="multipart/form-data">
				<div class="col-sm-5">
					@csrf
					<div class="imagePreview"></div>
					<div class="input-group mt-sm-2">
						<label class="input-group-btn">
							<span class="btn btn-info">
								画像選択
								<input type="file" name="gallery_img" style="display:none" class="uploadFile">
							</span>
						</label>
						<input type="text" class="form-control" readonly="">
					</div>
					<button type="submit" class="btn btn-primary submit-btn" name="back">キャンセル</button>
					<button type="submit" class="btn btn-primary submit-btn" name="insert">登録</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection