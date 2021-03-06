@php
  $breakpoint = '@m';
  $logo = 'http://placehold.it/200x50&text=LOGO';
@endphp

{{-- App Header --}}
<header id="app-header" class="uk-background-muted">
  <div class="uk-container">
    <nav class="uk-navbar-container uk-navbar-transparent uk-navbar" uk-navbar="offset: 0; delay-hide: 500;">
      <div class="uk-navbar-left">
        <div class="uk-navbar-item">
          <a class="uk-logo" href="">
            <img src="{{ $logo }}" alt="Logo">
          </a>
        </div>
      </div>
      <div class="uk-navbar-right">
        <ul class="uk-navbar-nav uk-visible{{ $breakpoint }}">
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Profile</a></li>
        </ul>
        <a href="#offcanvas-nav" class="uk-navbar-toggle uk-hidden{{ $breakpoint }}" uk-navbar-toggle-icon uk-toggle></a>
      </div>
    </nav>
  </div>
</header>

{{-- Mobile Menu --}}
<div id="offcanvas-nav" uk-offcanvas="flip: true; overlay: true">
  <div class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close" type="button" uk-close></button>
    <ul class="uk-nav uk-nav-default" uk-nav>
      <li><a href="#">Dashboard</a></li>
      <li><a href="#">Profile</a></li>
    </ul>
  </div>
</div>
