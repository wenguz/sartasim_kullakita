<!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="#" class="navbar-brand">
                 <b>SARTASIM KULLAKITA</b>
                </a>
                <!--inicio menu de login-->
                  @if (Route::has('login'))
              <ul class="nav navbar-nav navbar-right user-nav">
               @auth
                <li class="user-name"><span>Usuario: {{ Auth::user()->name }}</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="{{asset('img/avatar.jpg')}}" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>


                    <ul class="dropdown-menu user-dropdown">

                      <li><a href="{{ url('/home') }}"><span class="fa fa-user"></span>Inicio</a></li>
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