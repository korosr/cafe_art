@extends('app')
@section('title', 'menu | アートギャラリーカフェ「CAFE & ART」')
@section('content')
<body id="menu">
@include('header')
<div id="wrap" class="clearfix">
	<div class="content">
		<div class="main">
			<h1>Menu</h1>
			<p></p>
			<section id="special">
				<h2 class="icon">Winter Special</h2>
				@if(count($winter_specials) > 0)
					<ul class="clearfix menu-list">
					@foreach($winter_specials as $winter_special)
						<li><img src="storage/images/{{$winter_special->imgpath}}" alt="" class="tail-img"><p>{{$winter_special->name}} ￥{{number_format($winter_special->fee)}}</p></li>
					@endforeach
				@else
					<p>現在メニューがありません。</p>
				@endif
				</ul>
			</section>
			<section id="cafe">
				<h2 class="icon">Cafe</h2>
				@if(count($cafes) > 0)
					<ul class="clearfix menu-list">
					@foreach($cafes as $cafe)
						<li><img src="storage/images/{{$cafe->imgpath}}" alt="" class="tail-img"><p>{{$cafe->name}} ￥{{number_format($cafe->fee)}}</p></li>
					@endforeach
				@else
					<p>現在メニューがありません。</p>
				@endif
				</ul>
			</section>
			<section id="foods">
				<h2 class="icon">Foods</h2>
				@if(count($foods) > 0)
					<ul class="clearfix menu-list">
					@foreach($foods as $food)
						<li><img src="storage/images/{{$food->imgpath}}" alt="" class="tail-img"><p>{{$food->name}} ￥{{number_format($food->fee)}}</p></li>
					@endforeach
				@else
					<p>現在メニューがありません。</p>
				@endif
				</ul>
			</section>
		</div>
		<aside class="sidebar">
			<section>
					<ul>
						<li><a href="menu.html#special">季節限定</a></li>
						<li><a href="menu.html#cafe">Cafe</a></li>
						<li><a href="menu.html#foods">Foods</a></li>
					</ul>
			</section>
		</aside>
	</div>
</div>
<p id="page-top"><a href="#"><i class="fas fa-angle-up fa-3x"></i></a></p>
</body>
</html>