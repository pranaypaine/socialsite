<header>
	<!-- navbar starts -->
  <div class="navbar-fixed z-depth-2">
<nav class="blue darken-1 nav-fixed" role="navigation">
    <div class="nav-wrapper  container"><a id="logo-container" href="{{route('home')}}" class="brand-logo">Y So Social</a>
      
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
      @else
      <ul class="right hide-on-med-and-down">
        <li><a class="modal-trigger" href="#login" >Login</a></li>
        <li><a class="modal-trigger" href="#signup" >Signup</a></li>
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
      @else
      <li><a class="modal-trigger" href="#login" >Login</a></li>
      <li class="divider"></li>
      <li><a class="modal-trigger" href="#signup" >Signup</a></li>
      <li class="divider"></li>
      @endif
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

    </div>
  </nav>
  </div>
</header>
<div id="login" class="modal">
    <div class="modal-content">
      <h4 class="center blue-text">Login</h4>
      <form class="col s12 m6" action="{{ route('login') }}" method="POST">
    
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <input type="hidden" name="_token" value="{{ Session::token() }}">
      <div class="col s12 center">
        <button class="btn waves-effect waves-light blue" type="submit" name="submit">login
        <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
    </div>
  </div>

<div id="signup" class="modal">
    <div class="modal-content">
      <h4 class="center blue-text">SignUp</h4>
      <form class="" action="{{ route('signup') }}" method="POST">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" name="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" name="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <input type="hidden" name="_token" value="{{ Session::token() }}">
      <div class="col s12 center">
        <button class="btn waves-effect waves-light blue" type="submit" name="submit">Sign up
        <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
    </div>
  </div>