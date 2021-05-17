@extends('layouts.adminapp')
@section('content')
<div id="wrap_admin" class="clearfix">
	<div class="content">
		<div class="main_admin">
			<h1>Menu編集</h1>
			<p>Menuを編集・削除します。</p>
			<form action="{{ route('admin.menu_update') }}" method="post" enctype="multipart/form-data">
				<input type="hidden" name="menu_id" value="{{ $menu->id }}" >
				<div class="form-group form-inline">
					<label for="menu_name">名前:</label>
					<input type="text" id="menu_name" name="menu_name" class="form-control" value="{{ $menu->name }}" style="width:50%;">
				</div>
				<div class="form-group form-inline">
					<label for="menu_name">値段:</label>
					<input type="text" id="menu_fee" name="menu_fee" class="form-control" value="{{ $menu->fee }}" style="width:50%;">
				</div>
				<div class="form-group justify-content-between">
					<div>
						@if($menu->category_id == 2)
							<input class="form-check-input radio_input" type="radio" name="category" class="category" value="1" checked>
						@else
							<input class="form-check-input radio_input" type="radio" name="category" class="category" value="1">
						@endif
						<label class="form-check-label radio_label">ドリンク</label>
						@if($menu->category_id == 1)
							<input class="form-check-input radio_input" type="radio" name="category" class="category" value="2" checked>
						@else
							<input class="form-check-input radio_input" type="radio" name="category" class="category" value="2">
						@endif
						<label class="form-check-label radio_label">フード</label>
						@if($menu->category_id == 3)
							<input class="form-check-input radio_input" type="radio" name="category" class="category" value="3" checked>
						@else
							<input class="form-check-input radio_input" type="radio" name="category" class="category" value="3">
						@endif
						<label class="form-check-label radio_label">期間限定</label>
					</div>
				</div>
				<div class="col-sm-5">
					@csrf
					<img src="../storage/images/{{ $menu->imgpath }}" alt="" class="tail-img">
					<p>現在のMenu画像</p>
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
				<button type="submit" class="btn btn-primary" name="update">更新</button>
				<button type="submit" class="btn btn-primary" name="delete">削除</button>
			</form>
		</div>
	</div>
</div>
@endsection