@extends('layouts.adminapp')
@section('content')
<div id="wrap_admin" class="clearfix">
	<div class="content">
		<div class="main_admin">
			<h1>Menu</h1>
			<a href="{{ route('admin.menu_insert') }}" class="btn btn-primary" role="button" aria-pressed="true">Menu登録</a>
			<p>登録されているメニューを表示します</p>
		</div>
	</div>
</div>
@endsection