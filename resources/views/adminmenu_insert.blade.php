@extends('layouts.adminapp')
@section('content')
<div id="wrap_admin" class="clearfix">
	<div class="content">
		<div class="main_admin">
			<h1>Menu登録</h1>
			<p>Menuを登録します</p>
			<form action="{{ route('admin.menu_add') }}" method="post" enctype="multipart/form-data">
				<div class="col-sm-7">				
				@csrf
				@if($errors->has('name')) 
					<span class="text-danger">{{ $errors->first('name') }}</span>
				@endif
				<div class="form-group form-inline">
					<label for="menu_name">名前:</label>
					<input type="text" id="menu_name" name="name" value="{{ old('name') }}" class="form-control" style="width:50%;">
				</div>
				@if($errors->has('fee')) 
					<span class="text-danger">{{ $errors->first('fee') }}</span>
				@endif
				<div class="form-group form-inline">
					<label for="menu_fee">値段:</label>
					<input type="text" id="menu_fee" name="fee" value="{{ old('fee') }}" class="form-control" style="width:50%;">
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
				@if($errors->has('imgpath')) 
					<span class="text-danger">{{ $errors->first('imgpath') }}</span>
				@endif
				<div class="input-group mt-sm-2　form-group">
					<label class="input-group-btn">
						<span class="btn btn-info">
							画像選択
							<input type="file" name="imgpath" style="display:none" class="uploadFile form-control" value="{{ old('imgpath') }}">
						</span>
					</label>
					<input type="text" class="form-control" readonly="" style="width:45%;">
				</div>
				<a href="{{ route('admin.top') }}"><button type="button" class="btn btn-primary submit-btn">キャンセル</button></a>
				<button type="submit" class="btn btn-primary submit-btn" name="insert">登録</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection