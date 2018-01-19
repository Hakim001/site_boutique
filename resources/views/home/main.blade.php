@extends('layouts.main')


@section('title')

Accueil du site
@endsection


@section('content')


 <div class="container">
        <div class="row">
            <div class="col-md-12 contenu">
              
               @include('includes._slider')
               
               @include('includes._pubs')
               
                <div class="  products">
                    <div class="header_title"><h4>Featured Products </h4></div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="product">
                                <!--  <span class="bulle">Infos</span> -->
                                <span class="bulle bulle-promo">Promo</span>
                                <!-- <span class="bulle bulle-primary">New</span> -->

                                <a href="http://shop.dev/produit/voluptas-possimus-consequuntur-ut-voluptas-ut-aut-sit"><img src="https://lorempixel.com/400/400/people/Faker/?16318" alt="Voluptas possimus consequuntur ut voluptas ut aut sit."></a>

                                <h4>Voluptas possimus consequuntur ut voluptas ut aut sit.</h4>
                                <p>Fugiat dicta eius corrupti ea quae. Dicta sint est ipsam ut. Rerum quia velit ipsa vel. Tenetur dolo...</p>
                                <div class="actions">
                                    <span class="price promo">27.21 € </span>  <em class="promo">34.01 €</em>
                                    <a href="http://shop.dev/panier/add/voluptas-possimus-consequuntur-ut-voluptas-ut-aut-sit" class="btn btn-icon btn-primary" alt="Ajouter au panier"><i class="fa fa-cart-arrow-down"></i></a>
                                    <a href="http://shop.dev/produit/voluptas-possimus-consequuntur-ut-voluptas-ut-aut-sit" class="btn btn-icon btn-secondary" alt="détails"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-icon btn-secondary  btn-neutre like" alt="favoris" data-id=1><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">

                            <!--  <span class="bulle">Infos</span> -->
                            <span class="bulle bulle-promo">Promo</span>
                            <!-- <span class="bulle bulle-primary">New</span> -->

                            <a href="http://shop.dev/produit/quam-provident-debitis-amet-est-fuga-amet"><img src="https://lorempixel.com/400/400/nature/Faker/?75781" alt="Quam provident debitis amet est fuga amet."></a>

                            <h4>Quam provident debitis amet est fuga amet.</h4>
                            <p>Ut adipisci facilis molestiae eaque. Nisi culpa explicabo ut accusamus. Officia iusto saepe praesent...</p>
                            <div class="actions">

                            <span class="price promo">26.7 € </span>  <em class="promo">33.37 €</em>
                            <a href="http://shop.dev/panier/add/quam-provident-debitis-amet-est-fuga-amet" class="btn btn-icon btn-primary" alt="Ajouter au panier"><i class="fa fa-cart-arrow-down"></i></a>
                            <a href="http://shop.dev/produit/quam-provident-debitis-amet-est-fuga-amet" class="btn btn-icon btn-secondary" alt="détails"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-icon btn-secondary  btn-neutre like" alt="favoris" data-id=2><i class="fa fa-heart"></i></a>



                            </div>
                            </div>                        
                        </div>

                        <div class="col-md-3">
                            <div class="product">

                            <!--  <span class="bulle">Infos</span> -->
                            <!-- <span class="bulle bulle-primary">New</span> -->

                            <a href="http://shop.dev/produit/voluptas-molestiae-sapiente-consequatur-illo-laborum-inventore"><img src="https://lorempixel.com/400/400/fashion/Faker/?71179" alt="Voluptas molestiae sapiente consequatur illo laborum inventore."></a>

                            <h4>Voluptas molestiae sapiente consequatur illo laborum inventore.</h4>
                            <p>Rem repellat amet id sed iusto officia non. Et soluta corporis quos animi animi suscipit maxime sint...</p>
                            <div class="actions">

                            <span class="price ">43.77 € </span>
                            <a href="http://shop.dev/panier/add/voluptas-molestiae-sapiente-consequatur-illo-laborum-inventore" class="btn btn-icon btn-primary" alt="Ajouter au panier"><i class="fa fa-cart-arrow-down"></i></a>
                            <a href="http://shop.dev/produit/voluptas-molestiae-sapiente-consequatur-illo-laborum-inventore" class="btn btn-icon btn-secondary" alt="détails"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-icon btn-secondary  btn-neutre like" alt="favoris" data-id=3><i class="fa fa-heart"></i></a>



                            </div>
                            </div>                        
                        </div>

                        <div class="col-md-3">
                            <div class="product">

                            <!--  <span class="bulle">Infos</span> -->
                            <!-- <span class="bulle bulle-primary">New</span> -->

                            <a href="http://shop.dev/produit/labore-eos-reiciendis-non-facere-accusantium-reiciendis"><img src="https://lorempixel.com/400/400/technics/Faker/?46289" alt="Labore eos reiciendis non facere accusantium reiciendis."></a>

                            <h4>Labore eos reiciendis non facere accusantium reiciendis.</h4>
                            <p>Et laboriosam natus quia a officia. Numquam illo deleniti ex doloribus iste molestias nihil. Illum d...</p>
                            <div class="actions">

                            <span class="price ">41.57 € </span>
                            <a href="http://shop.dev/panier/add/labore-eos-reiciendis-non-facere-accusantium-reiciendis" class="btn btn-icon btn-primary" alt="Ajouter au panier"><i class="fa fa-cart-arrow-down"></i></a>
                            <a href="http://shop.dev/produit/labore-eos-reiciendis-non-facere-accusantium-reiciendis" class="btn btn-icon btn-secondary" alt="détails"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-icon btn-secondary  btn-neutre like" alt="favoris" data-id=4><i class="fa fa-heart"></i></a>



                            </div>
                            </div>                       
                        </div>
                    </div>
                </div>
                <div class=" products promotions">
                    <div class="header_title"><h4>Promotions Products </h4></div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="product">
                                <!--  <span class="bulle">Infos</span> -->
                                <span class="bulle bulle-promo">Promo</span>
                                <!-- <span class="bulle bulle-primary">New</span> -->

                                <a href="http://shop.dev/produit/tempora-praesentium-esse-excepturi-dolor-et-magnam-tenetur-sunt"><img src="https://lorempixel.com/400/400/people/Faker/?83314" alt="Tempora praesentium esse excepturi dolor et magnam tenetur sunt."></a>

                                <h4>Tempora praesentium esse excepturi dolor et magnam tenetur sunt.</h4>
                                <p>Qui enim rerum ipsa voluptatibus occaecati neque esse. Quia optio veniam quisquam et possimus. Adipi...</p>
                                <div class="actions">

                                <span class="price promo">28.38 € </span>  <em class="promo">35.47 €</em>
                                <a href="http://shop.dev/panier/add/tempora-praesentium-esse-excepturi-dolor-et-magnam-tenetur-sunt" class="btn btn-icon btn-primary" alt="Ajouter au panier"><i class="fa fa-cart-arrow-down"></i></a>
                                <a href="http://shop.dev/produit/tempora-praesentium-esse-excepturi-dolor-et-magnam-tenetur-sunt" class="btn btn-icon btn-secondary" alt="détails"><i class="fa fa-eye"></i></a>
                                <a href="#" class="btn btn-icon btn-secondary  btn-neutre like" alt="favoris" data-id=15><i class="fa fa-heart"></i></a>
                                </div>
                            </div>                    
                        </div>
                        <div class="col-md-3">
                            <div class="product">

                            <!--  <span class="bulle">Infos</span> -->
                            <span class="bulle bulle-promo">Promo</span>
                            <!-- <span class="bulle bulle-primary">New</span> -->

                            <a href="http://shop.dev/produit/autem-reprehenderit-dolor-harum-consequatur"><img src="https://lorempixel.com/400/400/nature/Faker/?42465" alt="Autem reprehenderit dolor harum consequatur."></a>

                            <h4>Autem reprehenderit dolor harum consequatur.</h4>
                            <p>Veritatis quia voluptate suscipit doloremque quas aliquam veritatis perspiciatis. Et deserunt laboru...</p>
                            <div class="actions">

                            <span class="price promo">27.57 € </span>  <em class="promo">34.46 €</em>
                            <a href="http://shop.dev/panier/add/autem-reprehenderit-dolor-harum-consequatur" class="btn btn-icon btn-primary" alt="Ajouter au panier"><i class="fa fa-cart-arrow-down"></i></a>
                            <a href="http://shop.dev/produit/autem-reprehenderit-dolor-harum-consequatur" class="btn btn-icon btn-secondary" alt="détails"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-icon btn-secondary  btn-neutre like" alt="favoris" data-id=21><i class="fa fa-heart"></i></a>



                            </div>
                            </div>                    
                        </div>
                        <div class="col-md-3">
                            <div class="product">

                            <!--  <span class="bulle">Infos</span> -->
                            <span class="bulle bulle-promo">Promo</span>
                            <!-- <span class="bulle bulle-primary">New</span> -->

                            <a href="http://shop.dev/produit/quam-provident-debitis-amet-est-fuga-amet"><img src="https://lorempixel.com/400/400/nature/Faker/?75781" alt="Quam provident debitis amet est fuga amet."></a>

                            <h4>Quam provident debitis amet est fuga amet.</h4>
                            <p>Ut adipisci facilis molestiae eaque. Nisi culpa explicabo ut accusamus. Officia iusto saepe praesent...</p>
                            <div class="actions">

                            <span class="price promo">26.7 € </span>  <em class="promo">33.37 €</em>
                            <a href="http://shop.dev/panier/add/quam-provident-debitis-amet-est-fuga-amet" class="btn btn-icon btn-primary" alt="Ajouter au panier"><i class="fa fa-cart-arrow-down"></i></a>
                            <a href="http://shop.dev/produit/quam-provident-debitis-amet-est-fuga-amet" class="btn btn-icon btn-secondary" alt="détails"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-icon btn-secondary  btn-neutre like" alt="favoris" data-id=2><i class="fa fa-heart"></i></a>



                            </div>
                            </div>                    
                        </div>
                        <div class="col-md-3">
                            <div class="product">

                            <!--  <span class="bulle">Infos</span> -->
                            <span class="bulle bulle-promo">Promo</span>
                            <!-- <span class="bulle bulle-primary">New</span> -->

                            <a href="http://shop.dev/produit/voluptas-possimus-consequuntur-ut-voluptas-ut-aut-sit"><img src="https://lorempixel.com/400/400/people/Faker/?16318" alt="Voluptas possimus consequuntur ut voluptas ut aut sit."></a>

                            <h4>Voluptas possimus consequuntur ut voluptas ut aut sit.</h4>
                            <p>Fugiat dicta eius corrupti ea quae. Dicta sint est ipsam ut. Rerum quia velit ipsa vel. Tenetur dolo...</p>
                            <div class="actions">

                            <span class="price promo">27.21 € </span>  <em class="promo">34.01 €</em>
                            <a href="http://shop.dev/panier/add/voluptas-possimus-consequuntur-ut-voluptas-ut-aut-sit" class="btn btn-icon btn-primary" alt="Ajouter au panier"><i class="fa fa-cart-arrow-down"></i></a>
                            <a href="http://shop.dev/produit/voluptas-possimus-consequuntur-ut-voluptas-ut-aut-sit" class="btn btn-icon btn-secondary" alt="détails"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-icon btn-secondary  btn-neutre like" alt="favoris" data-id=1><i class="fa fa-heart"></i></a>



                            </div>
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
         @include('includes._informations')
    </div>
    
@endsection