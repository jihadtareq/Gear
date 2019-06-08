@extends('layouts.app')

@section('content')
<header class="bgimage">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand mb-0 h1" href="{{ url('/') }}"> <img src="../images/logo.png" width="30" height="30" alt=""> GearBox</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="">Help</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right ">
       <!-- Authentication Links -->
                        @guest
                          
                   <li class="nav-item dropdown pull-right loc">
        <a class="nav-link dropdown-toggle mr-sm-5" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user-circle" aria-hidden="true"></i>{{ __('Login') }}</a>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/login">User login </a>
          <a class="dropdown-item" href="/login/agancesowner"> Service provider login</a>
         
        </div>
      </li>
      
                            
                         @if (Route::has('login'))
               <li class="nav-item dropdown pull-right loc">
        <a class="nav-link dropdown-toggle mr-sm-5" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-sign-in-alt aria-hidden="true"></i>{{ __('Signup') }}</a>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/register">User Signup </a>
          <a class="dropdown-item" href="/register/agancesowner"> Service provider Signup</a>
         
        </div>
      </li>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
              </div>
            </div>
        </nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <br>
            <br>
            <br>
            <br>
            <div class="card">
                <div class="card-header font">GearBox</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->type=='1')
                    You are agancesowner.
                    @elseif(Auth::user()->type=='2')
                    You are sparepartsowner.
                    @else
                    You are User!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</header>
@endsection
