@extends('layouts.adminapp_edit')
@section('content')
<div id="wrap_admin" class="clearfix">
	<div class="content">
		<div class="main_admin">
			<h1>Menu編集</h1>
			<p>Menuを編集・削除します。</p>
			<form action="{{ route('admin.menu_update') }}" method="post" enctype="multipart/form-data">
				<div class="col-sm-5">
					@csrf
					@if($errors->has('name')) 
						<span class="text-danger">{{ $errors->first('name') }}</span>
					@endif
					<input type="hidden" name="menu_id" value="{{ $menu->id }}" >
					<div class="form-group form-inline">
						<label for="menu_name">名前:</label>
						<input type="text" id="menu_name" name="name" class="form-control" value="{{ $menu->name }}" style="width:50%;">
					</div>
					@if($errors->has('fee')) 
						<span class="text-danger">{{ $errors->first('fee') }}</span>
					@endif
					<div class="form-group form-inline">
						<label for="menu_name">値段:</label>
						<input type="text" id="menu_fee" name="fee" class="form-control" value="{{ $menu->fee }}" style="width:50%;">
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
					<img src="../storage/images/{{ $menu->imgpath }}" alt="" class="tail-img">
					<p>現在のMenu画像</p>
					@if($errors->has('imgpath')) 
						<span class="text-danger">{{ $errors->first('imgpath') }}</span>
					@endif
					<div class="input-group mt-sm-2">
						<label class="input-group-btn">
							<span class="btn btn-info">
								画像選択
								<input type="file" name="imgpath" style="display:none" class="uploadFile"　>
							</span>
						</label>
						<input type="text" class="form-control" readonly="" value="{{ $menu->imgpath }}">
					</div>
					<a href="{{ route('admin.top') }}"><button type="button" class="btn btn-primary submit-btn">キャンセル</button></a>
					<button type="submit" class="btn btn-primary submit-btn" name="update">更新</button>
					<button type="submit" class="btn btn-primary submit-btn" name="delete">削除</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection