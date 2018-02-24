
    <div class="header">
        <div class="container">
            <div class="top_header rounded-top">
                <div class="header_infos">
                    <ul>
                       @guest
                         <li><a href="{{ route('login') }}">Se connecter</a></li>
                         <li><a href="{{ route('register') }}">Créer un compte</a></li>
                       @else 
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                        <li><a href="user/profil">Mon compte</a></li>
                        <li>
                        <a href="logout"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        
                        
                        </form>
                        </li>
                        </ul>
                        </li>
                        @endguest

                        <li> <a href=""><i class="fa fa-google-plus"></i></a> </li>
                        <li> <a href=""><i class="fa fa-facebook"></i></a> </li>
                        <li> <a href=""><i class="fa fa-twitter"></i></a> </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-3 logo">
                        <img src="{{asset('img/logo.png')}}" alt="logo">
                    </div>
                    <div class="col-md-6 search">
                        <form class=" my-2 my-lg-0" action="{{ route('search') }}" method="POST">
                           {{ csrf_field() }}
                           
                            
                            <input class="form-control " type="text" placeholder="Search" aria-label="Search" name="q">
                            <button class="btn  rounded-right" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="col-md-3 infos">
                        <i class="fa fa-phone"></i>
                        <span>06 12 34 56 78</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 menu">
                    <div class="main_menu rounded-top">
                        <nav class="navbar navbar-expand-md ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                                <ul class="navbar-nav mr-auto">
                                   
                                    <li class="nav-item active">
                                    <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                                    </li>

                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ route('catalogue') }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notre Catalogue</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                                       @foreach($cats as $cat)          
                                    <a  class="dropdown-item" href="{{ route('catalogue',['slug' =>$cat->slug]) }}">{{$cat->name}}</a>
                                    
                                      @endforeach 
                                     
                                    </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#">Aide & Support</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                                    <a class="dropdown-item" href="{{ route('page', 'aide') }}">Aide </a>
                                    <a class="dropdown-item" href="{{ route('page', 'qui-sommes-nous') }}">Qui sommes nous ? </a>
                                    </div>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">Nous contacter</a>
                                    </li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                    <div class="cart ">
                        <i class="fa fa-shopping-cart"></i>
                        <a href="{{ route('panier') }}" >Panier: ({{ \Cart::count()?:'0'}}) items</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    