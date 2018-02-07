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
                            
                            <a href="{{ route('produits.index', ['slug'=>$product->slug]) }}" class="btn btn-icon btn-primary" alt="Ajouter au panier"><i class="fa fa-cart-arrow-down"></i></a>
                            
                            @if(Auth::check())
                            
                               @php
                                     $likes = \Auth::user()->likes->pluck('id');
                               @endphp
                            
                            <a href="#" class="btn btn-icon btn-secondary {{in_array($product->id,$likes->toArray())?'':'btn-neutre'}} like" alt="détails"><i class="fa fa-eye"></i></a>
                            
                            @else
                            <a href="#" class="btn btn-icon btn-secondary  btn-neutre like" alt="favoris" data-id={{ $product->id }}><i class="fa fa-heart"></i></a>
                            @endif


                            </div>
</div>