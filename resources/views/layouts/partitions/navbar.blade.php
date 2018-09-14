<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top navbar-container" role="navigation">
    <div class="navbar-header col-md-2">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" class="logo-web" alt="Nội Bài Transporter">
        </a>
    </div>
    <!-- /.navbar-header -->
    <div class="col-md-10">
        <ul class="nav navbar-top-links navbar-right">
            @foreach(config('menu') as $item)
            <li>
                <a class="dropdown-toggle" href="{{ route($item["route_name"]) }}" aria-expanded="false">
                    <i class="{{ $item["icon"] }}"></i> {{ $item["label"] }}
                </a>
            </li>
            @endforeach
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    @if(isset(Auth::user()->name))
                        Xin chào {{ Auth::user()->name }}
                    @endif
                    <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li>
                        <a href="">
                            <i class="fa fa-key"></i> @lang('title.title_update_password')
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out fa-fw"></i> @lang('forms.label_button_logout')
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>