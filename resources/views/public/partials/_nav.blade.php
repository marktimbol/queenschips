<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}">Queen's Chips</a>
      {{-- {!! getPhoto('logo-small.png', "Queen's chips") !!} --}}
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('concept') }}">Concept</a></li>
        <li><a href="{{ route('gallery') }}">Gallery</a></li>
        <li><a href="{{ route('franchising') }}">Franchising</a></li>
        <li><a href="{{ route('store') }}">Store Locator</a></li>
        <li><a href="{{ route('contact') }}">Contact Us</a></li>                        
      </ul>
    </div>
  </div>
</nav>