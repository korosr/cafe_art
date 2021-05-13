<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>admin | アートギャラリーカフェ「CAFE & ART」</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Bitter:400,700&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link href="{{ asset('/assets/images/favicon.ico') }}" rel="shortcut icon">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="/css/sticky-footer.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
</head>
<body> 
  <nav class="navbar navbar-default" style="background-color: gray;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img alt="カフェ&アートロゴ" src="{{ asset('/assets/images/cafe&art_m.png') }}" style="height: 26px;">
        </a>
        <a class="navbar-brand" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" style="color: aliceblue">
            {{ __('Logout') }}
            
        </a>
        <a class="navbar-brand" href="{{ url('/') }}" style="color: aliceblue">
          MainPage
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </div>
    </div>
  </nav>  
<div class="container">
  <div class="row" id="content">
    <div class="col-md-3">
    <!-- サイドバー -->
    @include('sidebar')
    </div>
    <div class="col-md-9">
    <!-- コンテンツ -->
    @yield('content')
    </div>
  </div>
</div> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	$(document).on('change', ':file', function() {
		var input = $(this),
		numFiles = input.get(0).files ? input.get(0).files.length : 1,
		label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.parent().parent().next(':text').val(label);

		var files = !!this.files ? this.files : [];
		if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
		if (/^image/.test( files[0].type)){ // only image file
			var reader = new FileReader(); // instance of the FileReader
			reader.readAsDataURL(files[0]); // read the local file
			reader.onloadend = function(){ // set image data as background of div
				input.parent().parent().parent().prev('.imagePreview').css("background-image", "url("+this.result+")");
			}
		}
	});
</script>
</body>
</html>