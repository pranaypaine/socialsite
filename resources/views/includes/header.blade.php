<header>
	<!-- navbar starts -->
<nav class="blue darken-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="{{route('home')}}" class="brand-logo">Y So Social</a>
      
    @if (Auth::user())
      <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-button" href="#!" data-activates="header-dropdown">{{ ucfirst(Auth::user()->firstname) }}{{ ucfirst(Auth::user()->lastname) }}<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      <!-- Dropdown Structure -->
        <ul id="header-dropdown" class="dropdown-content">
        <li><a href="{{ route('profile', ['user_id' => Auth::user()->id ]) }}" class="blue-text">Profile</a></li>
        <li class="divider"></li>
        <li><a href="/@pranaypaine/settings" class="blue-text">Settings</a></li>
        <li class="divider"></li>
        <li><a href="{{ route('logout') }}" class="blue-text">logout</a></li>
        </ul>
      @endif
      <ul id="nav-mobile" class="side-nav ">
      <li><a href=''>Home</a></li>
      <li class="divider"></li>
        @if (Auth::user())
        <li>
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">{{ ucfirst(Auth::user()->firstname) }}{{ ucfirst(Auth::user()->lastname) }}<i class="material-icons right">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
              <li><a href="{{ route('profile', ['user_id' => Auth::user()->id ]) }}">Profile</a></li>
              <li class="divider"></li>
              <li><a href="/@pranaypaine/settings">Settings</a></li>
              <li class="divider"></li>
              <li><a href="{{ route('logout') }}">logout</a></li>
              <li class="divider"></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <@endif
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

    </div>
  </nav>
</header>