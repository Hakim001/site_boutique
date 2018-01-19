
    <div class="header">
        <div class="container">
            <div class="top_header rounded-top">
                <div class="header_infos">
                    <ul>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        athakim <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                        <li><a href="user/profil">Mon compte</a></li>
                        <li>
                        <a href="logout"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                        </a>

                        <form id="logout-form" action="logout" method="POST" style="display: none;">
                        <input type="hidden" name="_token" value="DNsk1pXvVwa4lOAizpB7ZIGwWZyjg1lH7SuFXoSx">
                        </form>
                        </li>
                        </ul>
                        </li>

                        <li> <a href=""><i class="fa fa-google-plus"></i></a> </li>
                        <li> <a href=""><i class="fa fa-facebook"></i></a> </li>
                        <li> <a href=""><i class="fa fa-twitter"></i></a> </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-3 logo">
                        <img src="img/logo.png" alt="logo">
                    </div>
                    <div class="col-md-6 search">
                        <form class=" my-2 my-lg-0" action="search" method="POST">
                            <input type="hidden" name="_token" value="DNsk1pXvVwa4lOAizpB7ZIGwWZyjg1lH7SuFXoSx">
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
                                    <a class="nav-link" href="http://shop.dev/home">Home <span class="sr-only">(current)</span></a>
                                    </li>

                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notre Catalogue</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown01">

                                    <a  class="dropdown-item" href="http://shop.dev/catalogue/eos-recusandae-ab">Eos recusandae ab.</a> 
                                    <a  class="dropdown-item" href="http://shop.dev/catalogue/vitae-et">Vitae et.</a> 
                                    <a  class="dropdown-item" href="http://shop.dev/catalogue/aspernatur-repellat">Aspernatur repellat.</a> 
                                    <a  class="dropdown-item" href="http://shop.dev/catalogue/officia-sequi">Officia sequi.</a> 
                                    <a  class="dropdown-item" href="http://shop.dev/catalogue/enim-amet-est">Enim amet est.</a> 
                                    </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#">Aide & Support</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                                    <a class="dropdown-item" href="http://shop.dev/page/aide">Aide </a>
                                    <a class="dropdown-item" href="http://shop.dev/page/qui-sommes-nous">Qui sommes nous ? </a>
                                    </div>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="http://shop.dev/nous%20contacter">Nous contacter</a>
                                    </li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                    <div class="cart ">
                        <i class="fa fa-shopping-cart"></i>
                        <a href="http://shop.dev/panier" >Panier: (0) items</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    