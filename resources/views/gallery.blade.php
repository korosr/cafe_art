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
			<h2 class="icon">City</h2>
			<ul class="clearfix gallery-list">
				<li><img src="images/photograph-city-01.png" alt="1番"></li>
				<li><img src="images/photograph-city-02.png" alt="2番"></li>
				<li><img src="images/photograph-city-03.png" alt="3番"></li>
				<li><img src="images/photograph-city-04.png" alt="4番"></li>
				<li><img src="images/photograph-city-05.png" alt="5番"></li>
				<li><img src="images/photograph-city-06.png" alt="6番"></li>
			</ul>
		</section>
		<section id="beach">
			<h2 class="icon">Beach</h2>
			<ul class="clearfix gallery-list">
				<li><img src="images/photograph-beach-01.png" alt="1番"></li>
				<li><img src="images/photograph-beach-02.png" alt="2番"></li>
				<li><img src="images/photograph-beach-03.png" alt="3番"></li>
				<li><img src="images/photograph-beach-04.png" alt="4番"></li>
				<li><img src="images/photograph-beach-05.png" alt="5番"></li>
				<li><img src="images/photograph-beach-06.png" alt="6番"></li>
			</ul>
		</section>
		<section id="forest">
			<h2 class="icon">Forest</h2>
			<ul class="clearfix gallery-list">
				<li><img src="images/photograph-forest-01.png" alt="1番"></li>
				<li><img src="images/photograph-forest-02.png" alt="2番"></li>
				<li><img src="images/photograph-forest-03.png" alt="3番"></li>
				<li><img src="images/photograph-forest-04.png" alt="4番"></li>
				<li><img src="images/photograph-forest-05.png" alt="5番"></li>
				<li><img src="images/photograph-forest-06.png" alt="6番"></li>
			</ul>
		</section>
	</div>
	<aside class="sidebar">
		<section>
			<ul>
				<li><a href="gallery.html#city">街-City</a></li>
				<li><a href="gallery.html#beach">海-Beach</a></li>
				<li><a href="gallery.html#forest">森-Forest</a></li>
			</ul>
		</section>
	</aside>
</div>
</div>
<p id="page-top"><a href="#"><i class="fas fa-angle-up fa-3x"></i></a></p>
</body>
</html>