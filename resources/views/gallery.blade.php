@extends('app')
@section('title', 'about | アートギャラリーカフェ「CAFE & ART」')
@section('content')
<body id="gallery">
@include('header')
<div id="wrap" class="clearfix">
<div class="content">
	<div class="main">
		<h1>Gallery</h1>
		<p>これまでに展示した作品を掲載しています。</p>
		<section id="city">
			<ul class="clearfix gallery-list">
			@foreach($galleries as $gallery)
				<li><img src="assets/images/{{$gallery->imgpath}}" alt=""></li>
            @endforeach
			</ul>
		</section>
	</div>
</div>
</div>
<p id="page-top"><a href="#"><i class="fas fa-angle-up fa-3x"></i></a></p>
</body>
</html>