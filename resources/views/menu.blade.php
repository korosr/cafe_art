@extends('app')
@section('title', 'contact | アートギャラリーカフェ「CAFE & ART」')
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
				<ul class="clearfix menu-list">
					<li><img src="images/photograph-city-01.png" alt="1番"><p>StrawberryParfait 1,000yen</p></li>
					<li><img src="images/photograph-city-02.png" alt="2番"><p>StrawberryParfait 1,000yen</p></li>
					<li><img src="images/photograph-city-03.png" alt="3番"><p>StrawberryParfait 1,000yen</p></li>
				</ul>
			</section>
			<section id="cafe">
				<h2 class="icon">Cafe</h2>
				<ul class="clearfix menu-list">
					<li><img src="images/photograph-city-01.png" alt="1番"><p>BrendCoffee 500yen</p></li>
					<li><img src="images/photograph-city-02.png" alt="2番"><p>BrendCoffee 500yen</p></li>
					<li><img src="images/photograph-city-03.png" alt="3番"><p>BrendCoffee 500yen</p></li>
					<li><img src="images/photograph-city-04.png" alt="4番"><p>BrendCoffee 500yen</p></li>
					<li><img src="images/photograph-city-05.png" alt="5番"><p>BrendCoffee 500yen</p></li>
					<li><img src="images/photograph-city-06.png" alt="6番"><p>BrendCoffee 500yen</p></li>
				</ul>
			</section>
			<section id="foods">
				<h2 class="icon">Foods</h2>
				<ul class="clearfix menu-list">
					<li><img src="images/photograph-beach-01.png" alt="1番"><p>Sandwitch 800yen</p></li>
					<li><img src="images/photograph-beach-02.png" alt="2番"><p>Sandwitch 800yen</p></li>
					<li><img src="images/photograph-beach-03.png" alt="3番"><p>Sandwitch 800yen</p></li>
					<li><img src="images/photograph-beach-04.png" alt="4番"><p>Sandwitch 800yen</p></li>
					<li><img src="images/photograph-beach-05.png" alt="5番"><p>Sandwitch 800yen</p></li>
					<li><img src="images/photograph-beach-06.png" alt="6番"><p>Sandwitch 800yen</p></li>
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