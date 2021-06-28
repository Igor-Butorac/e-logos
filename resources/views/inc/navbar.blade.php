<nav class="navbar navbar-dark bg-dark navbar-expand-sm">

        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
               <strong> {{ config('app.name', 'e-logos') }}</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>
                <ul class="navbar-nav mr-auto">
                    <li><a class="navbar-brand"href="{{ url('')}}"></a></li>
                    <li><a class="navbar-brand"href="{{ url('')}}"></a></li>
                    <li><a class="navbar-brand"href="{{ url('')}}"></a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Prijava') }}</a>
                            </li>
                        @endif

                    @else
                        <li class="nav-item dropdown">
                            <a style="float:right" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name.' '.Auth::user()->lastname }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                               <a class="dropdown-item" href="{{route('dashboard')}}">{{ __('Nadzorna ploča') }}</a>

                                @if(Auth::user()->type_of_user == 1)
                                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Registriraj korisnika') }}</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Odjava') }}
                             </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
