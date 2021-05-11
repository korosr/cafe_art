<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Contact | アートギャラリーカフェ「CAFE & ART」</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Bitter:400,700&display=swap" rel="stylesheet">
<!-- fontawesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link href="favipanda.ico" rel="shortcut icon">
</head>
<body id="contact">

<!-- headerSTART -->
<header>
	<div class="logo">
		<a href="index.html"><img src="images/cafe&art_m.png" alt="CAFE&ART"></a>
	</div>
	<nav>
		<ul class="global-nav">
			<li><a href="about.html">About</a></li>
			<li><a href="menu.html">Menu</a></li>
			<li><a href="gallery.html">Gallery</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
	</nav>
</header>

<!-- headerEND -->

<!-- wrapSTART -->
<div id="wrap">
<div class="content">
	<div class="main-center">
		<h1>Contact</h1>
		<p>お問い合わせ、展示のご依頼フォームのページですお気軽にお問い合わせください。</p>
		<section>
			<h2 class="icon">Contact form</h2>
			<div class="form">
				<form>
					<dl>
						<dt><span class="required">お名前</dt>
						<dd><input type="text" name="name" class="name" required></dd>
						<dt class="required">メールアドレス</dt>
						<dd><input type="email" name="email" class="email" required></dd>
						<dt>お電話番号</dt>
						<dd><input type="tel" name="tel" class="tel" required></dd>
						<dt>お問い合わせ種別</dt>
						<dd>
							<select name="type" class="type">
								<option value="展示のご依頼">展示のご依頼</option>
								<option value="購入に関して">購入に関して</option>
								<option value="その他お問い合わせ">その他お問い合わせ</option>
								
							</select>
						</dd>
						<dt>ご希望の連絡方法</dt>
						<dd>
							<input type="radio" name="contact" value="Eメール">Eメール
							<input type="radio" name="contact" value="お電話">お電話
							</dd>
						<dt>メッセージ</dt>
						<dd>
							<textarea name="message" class="message"></textarea>
						</dd>
					</dl>
					<button type="submit" class="btn">送信</button>
				</form>
				<div class="attention">
					<p>
					※「<span class="required"></span>」のついている項目は必須項目です。<br>
					※メッセージ送信後、48時間以内に担当者よりご連絡いたします。
					</p>
				</div>
			</div>
		</section>

		<section>
			<div class="moreq">
				<h2 class="icon">Q&A</h2>
				<dl id="acmenu">
				  <dt>作品を販売することは可能ですか？</dt>
				  <dd>
					可能ですが、事前にご相談ください。
				  </dd>
				  <dt>展示期間の最長はどれくらいですか？</dt>
				  <dd>
					最長3カ月を想定していますが、その後の予定によりますのでご相談ください。
				  </dd>
				  <dt>展示期間の最長はどれくらいですか？</dt>
				  <dd>
					最長3カ月を想定していますが、その後の予定によりますのでご相談ください。
				  </dd>
				  <dt>展示期間の最長はどれくらいですか？</dt>
				  <dd>
					最長3カ月を想定していますが、その後の予定によりますのでご相談ください。
				  </dd>
				</dl>
			</div>
		</section>
	</div>
</div>
</div>
<!-- wrapEND -->
<!-- pagetop -->
<p id="page-top"><a href="#"><i class="fas fa-angle-up fa-3x"></i></a></p>
<!-- footerSTART -->
<footer>
	<small>(C)2021 VitaminF-studio.</small>
</footer>
<!-- footerEND -->
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/myscript.js"></script>
</body>
</html>