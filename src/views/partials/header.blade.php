<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{ url('/') }}">
        <img src="{{ url('/images/logo.png') }}" alt="{{ setting('site.title') }}" title="{{ setting('site.title') }}" />
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
        {{ menu('primary', 'Bulma.partials.menu-left') }}
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>

{{-- <div class="off-canvas position-right" id="offCanvas" data-off-canvas data-transition="push">
    <a href="#" class="close-button off-canvas-menu-icon-close" data-close="offCanvas">
        <span aria-hidden="true">&times;</span>
    </a>

    <ul class="vertical menu" data-dropdown-menu>
        {{ menu('primary', 'Bulma.partials.menu-left') }}
    </ul>

    <hr>

    <ul class="vertical menu">
        @include('Bulma.partials.menu-right')
    </ul>

    <hr>

    <ul class="menu social-icons align-center">
        {{ menu('social', 'Bulma.partials.social') }}
    </ul>
</div>

<div class="off-canvas-content" data-off-canvas-content>
    <div class="header-site-search" data-toggle-search>
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell medium-8 medium-offset-2">
                    @include('Bulma.partials.search-box')
                </div>
            </div>
        </div>
    </div>

    <div class="top-bar">
        <div class="top-bar-left">
            <a href="#" class="off-canvas-menu-icon float-right hide-for-medium" data-open="offCanvas">
                <i class="fas fa-bars"></i> <span>Menu</span>
            </a>

            <a href="#" class="search-icon-mobile float-right hide-for-medium" data-toggle-search-trigger>
                <i class="fas fa-search"></i>
            </a>

            <div class="header-logo float-left">
                <a href="{{ url('/') }}">
                    <img src="{{ url('/') }}/images/logo.png" alt="{{ setting('site.title') }}" title="{{ setting('site.title') }}" />
                </a>
            </div>

            <ul class="dropdown menu show-for-medium" data-dropdown-menu>
                {{ menu('primary', 'Bulma.partials.menu-left') }}
            </ul> <!-- /.menu -->
        </div>

        <div class="top-bar-right show-for-medium">
            <ul class="dropdown menu" data-dropdown-menu>
                @include('Bulma.partials.menu-right')
            </ul>
        </div>
    </div> --}}
