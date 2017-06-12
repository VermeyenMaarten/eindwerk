<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">Gymlife </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ route('category.proteins') }}">Proteins</a>
                </li>
                <li>
                    <a href="{{ route('category.massgainers') }}">Mass Gainers</a>
                </li>
                <li>
                    <a href="{{ route('category.creatine') }}">Creatine</a>
                </li>
                <li>
                    <a href="{{ route('category.vitamins') }}">Vitamins</a>
                </li>
                <li>
                    <a href="{{ route('category.amino') }}">Amino Acids</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <div id="container">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href= {{ route('product.shoppingCart') }}>
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i> Shopping Cart
                                <span class="badge"> {{ Session::has('cart') ? Session::get('cart')->totalQty : 0 }} </span>
                                <!--  Is er een sessie genaamd cart -> zoja totalqty opvragen. anders word er niks weergegeven. -->
                            </a>
                        </li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <div class="fa fa-sign-out">Logout</div>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                    @endif
                </div>

           </ul>
        </div>
        <!-- /.navbar-collapse -->

    <!-- /.container -->
</nav>