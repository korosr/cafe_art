<header>
    <div class="logo">
      <a href="{{ url('/') }}"><img src="{{ asset('/assets/images/cafe&art_m.png') }}" alt="CAFE&ART"></a>
    </div>
    <nav>
      <ul class="global-nav">
        <li><a href="{{ route('general.about')}}">About</a></li>
        <li><a href="{{ route('general.menu')}}">Menu</a></li>
        <li><a href="{{ route('general.gallery')}}">Gallery</a></li>
        <li><a href="{{ route('general.contact')}}">Contact</a></li>
        <li><a href="{{ url('/login') }}"><i class="fas fa-sign-in-alt"></i></a></li>
      </ul>
    </nav>
  </header>