 <div class="product">

                           @if($product->onDiscount())
                            <!--  <span class="bulle">Infos</span> -->
                            <span class="bulle bulle-promo">Promo</span>
                            <!-- <span class="bulle bulle-primary">New</span> -->
                            @endif

                            <a href="{{ route('produits.index', ['slug' => $product->slug]) }}"><img src="{{ url($product->image) }}" alt="{{$product->name}}"></a>

                            <h4>{{ $product->name }}</h4>
                            <p>{{ str_limit($product->description, 100) }}</p>
                            <div class="actions">
                            @if($product->onDiscount())
                            <span class="price promo">{{$product->prix }} €</span><em class="promo">{{ $product->prixVente() }} €</em>
                            @else

                            <span class="price ">{{ $product->prix }} €</span>
                            @endif
                            
                            <a href="http://shop.dev/panier/add/labore-eos-reiciendis-non-facere-accusantium-reiciendis" class="btn btn-icon btn-primary" alt="Ajouter au panier"><i class="fa fa-cart-arrow-down"></i></a>
                            <a href="http://shop.dev/produit/labore-eos-reiciendis-non-facere-accusantium-reiciendis" class="btn btn-icon btn-secondary" alt="détails"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-icon btn-secondary  btn-neutre like" alt="favoris" data-id=4><i class="fa fa-heart"></i></a>



                            </div>
</div>