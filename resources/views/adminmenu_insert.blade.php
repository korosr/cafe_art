@extends('layouts.adminapp')
@section('content')
<div id="wrap_admin" class="clearfix">
	<div class="content">
		<div class="main_admin">
			<h1>Menu登録</h1>
			<p>Menuを登録します。</p>
			<form action="{{ route('admin.menu_add') }}" method="post" enctype="multipart/form-data">
			<div class="col-sm-7">
				@csrf	
				<div class="form-group form-inline">
					<label for="menu_name">名前:</label>
					<input type="text" id="menu_name" name="menu_name" class="form-control" style="width:50%;">
				</div>
				<div class="form-group form-inline">
					<label for="menu_fee">値段:</label>
					<input type="text" id="menu_fee" name="menu_fee" class="form-control" style="width:50%;">
				</div>
				<div class="form-group justify-content-between">
					<div>
						<input class="form-check-input radio_input" type="radio" name="category" class="category" value="2" checked>
						<label class="form-check-label radio_label">Cafe</label>
						<input class="form-check-input radio_input" type="radio" name="category" class="category" value="1">
						<label class="form-check-label radio_label">Food</label>
						<input class="form-check-input radio_input" type="radio" name="category" class="category" value="3">
						<label class="form-check-label radio_label">WinterSpecial</label>
					</div>
				</div>
				<div class="input-group mt-sm-2">
					<label class="input-group-btn">
						<span class="btn btn-info">
							画像選択
							<input type="file" name="menu_img" style="display:none" class="uploadFile">
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