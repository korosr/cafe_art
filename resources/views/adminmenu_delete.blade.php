@extends('layouts.adminapp')
@section('content')
<div id="wrap_admin" class="clearfix">
	<div class="content">
		<div class="main_admin">
			<h1>Menu削除</h1>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group form-inline">
					<label for="menu_name">名前:</label>
					<input type="text" id="menu_name" name="menu_name" class="form-control" style="width:50%;">
				</div>
				<div class="form-group justify-content-between">
					<div>
						<input class="form-check-input radio_input" type="radio" name="category" class="category" value="1" checked>
						<label class="form-check-label radio_label">ドリンク</label>
						<input class="form-check-input radio_input" type="radio" name="category" class="category" value="2">
						<label class="form-check-label radio_label">フード</label>
						<input class="form-check-input radio_input" type="radio" name="category" class="category" value="3">
						<label class="form-check-label radio_label">期間限定</label>
					</div>
				</div>
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