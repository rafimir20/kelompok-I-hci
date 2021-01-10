<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" style="color: black;" href="{{ url('/') }}">Jadwal Pelajaran</a>
        @guest

            <div>
                <a href="{{ url('register') }}"><button class="btn btn-secondary" type="button">Register</button></a>
                <a href="{{ url('login') }}"><button class="btn btn-primary" type="button">Login</button></a>
            </div>

        @endguest

        @auth
            
            <form class="display-name form-inline my-2 my-lg-0" action="{{ url('logout') }}" method="POST">
                @csrf
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>
                        {{ Auth::user()->name }}
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{ url('logout') }}">
                        <a href="{{ url('logout') }}"><button class="btn btn-logout" type="sumbit" method="POST">Logout</button></a>
                    </a>
            </div>
            </form>

        @endauth
    </div>
</nav>