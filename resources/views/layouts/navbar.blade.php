<!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="{{ url('/') }}" class="navbar-brand">
                 <b>SARTASIM KULLAKITA</b>
                </a>
                <!--inicio menu de login-->
                  @if (Route::has('login'))
              <ul class="nav navbar-nav navbar-right user-nav">
               @auth
                  <li class="dropdown ">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <img width="20px" height="20px" src="{{ asset('uploads/avatars/'.Auth::user()->avatar) }}">{{ Auth::user()->usuario }}
                    </a>
                    <ul class="dropdown-menu user-dropdown">
                      <li><a href="{{ url('/home') }}">Inicio</a></li>
                      <li>
                        <a href="{{ route('user.profile') }}"><span class="fa fa-user"></span>
                           Perfil
                        </a>
                      </li>
                      <li>
                        <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          <span class="fa fa-power-off "></span>Cerrar Sesion
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{csrf_field()}}
                        </form>
                      </li>
                  @else
                      <li><a href="{{ route('login') }}">Login</a></li>
                      <li><a href="{{ route('register') }}">Registrarse</a></li>
                    @endauth
                    </ul>
                  @endif
                  <!--fin menu de login-->
                </li>

              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->