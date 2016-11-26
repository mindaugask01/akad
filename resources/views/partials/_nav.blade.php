<!-- Default Bootstrap Navbar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::to('/') }}">ISK adademinė sistema</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
            @if (Auth::check())
                <li class="dropdown">
                    <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="">Įrašai</a></li>
                        <li><a href="">Kategorijos</a></li>
                        <li><a href="">Visi vartotojai</a></li>
                        <li><a href="">Visi tagai</a></li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <form action="" method="POST" id="logout-form">
                                {{ csrf_field() }}
                                <a href="{{ route('getLogout') }}" >Atsijungti</a>
                            </form>
                        </li>
                        @else
                            <li><a href="{{ route('register.show') }}">Registruotis</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>