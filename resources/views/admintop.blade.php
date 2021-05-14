@extends('layouts.adminapp')
@section('content')
<div id="wrap_admin" class="clearfix">
	<div class="content">
		<div class="main_admin">
			<h1>Menu</h1>
			<a href="{{ route('admin.menu_insert') }}" class="btn btn-primary" role="button" aria-pressed="true">Menu登録</a>
			<p>登録されているメニューを表示します</p>
			<h2 class="icon">Winter Special</h2>
			<table class="table">
				<colgroup>
					<col class="col-md-5">
					<col class="col-md-2">
					<col class="col-md-1">
					<col class="col-md-1">
				</colgroup>
			@foreach($winter_specials as $winter_special)
				<tr>
					<td>{{$winter_special->name}}</td>
					<td>￥{{number_format($winter_special->fee)}}</td>
					<td><a href="{{ route('admin.menu_edit', ['id'=>$winter_special->id]) }}"><i class="far fa-edit fonticon"></i></a></td>
					<td><a href="{{ route('admin.menu_delete', ['id'=>$winter_special->id]) }}"><i class="fas fa-trash fonticon"></i></a></td>
				</tr>
			@endforeach
			</table>
			<h2 class="icon">Cafe</h2>
			<table class="table">
				<colgroup>
					<col class="col-md-5">
					<col class="col-md-2">
					<col class="col-md-1">
					<col class="col-md-1">
				</colgroup>
			@foreach($cafes as $cafe)
				<tr>
					<td>{{$cafe->name}}</td>
					<td>￥{{number_format($cafe->fee)}}</td>
					<td><a href="{{ route('admin.menu_edit', ['id'=>$cafe->id]) }}"><i class="far fa-edit fonticon"></i></a></td>
					<td><a href="{{ route('admin.menu_delete', ['id'=>$cafe->id]) }}"><i class="fas fa-trash fonticon"></i></a></td>
				</tr>
			@endforeach
			</table>
			<h2 class="icon">Food</h2>
			<table class="table">
				<colgroup>
					<col class="col-md-5">
					<col class="col-md-2">
					<col class="col-md-1">
					<col class="col-md-1">
				</colgroup>
			@foreach($foods as $food)
				<tr>
					<td>{{$food->name}}</td>
					<td>￥{{number_format($food->fee)}}</td>
					<td><a href="{{ route('admin.menu_edit', ['id'=>$food->id]) }}"><i class="far fa-edit fonticon"></i></a></td>
					<td><a href="{{ route('admin.menu_delete', ['id'=>$food->id]) }}"><i class="fas fa-trash fonticon"></i></a></td>
				</tr>
			@endforeach
			</table>
		</div>
	</div>
</div>
@endsection