@extends('layouts.adminapp')
@section('content')
<div id="wrap_admin" class="clearfix">
	<div class="content">
		<div class="main_admin">
			<h1>Gallery登録</h1>
			<p>展示作品を登録します。</p>
			<form action="{{ route('admin.gallery_insert') }}" method="post" enctype="multipart/form-data">
				<div class="col-sm-5">
					@csrf
					<div class="imagePreview"></div>
					<div class="input-group mt-sm-2">
						<label class="input-group-btn">
							<span class="btn btn-primary">
								画像選択
								<input type="file" name="menu_img" style="display:none" class="uploadFile">
							</span>
						</label>
						<input type="text" class="form-control" readonly="">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection