@extends('layouts.main')

@section('title')

Panier / Validation
@endsection

@section('content')

 <div class="container">
        <div class="row pub ">
           <h4>Panier / Validation </h4>
        </div>
	
		<div class="row pub panier">
          <table class="table  table-responsive" id="panier">
                <thead class="thead-default">
                  <tr>
                    <th>#</th>
                    <th>Produit</th>
                    <th>Qte</th>
                    <th>Prix Unit. HT</th>
                    <th>Prix total HT</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $index=1;
                  @endphp
                  @foreach($panier as $product)
                    <tr>
                      <td scope="row">{{$index}}</td>
                      <td class="product_name"><a href="{{route('produits.index',['slug'=>str_slug($product->name)])}}">{{$product->name}}</a></td>
                      <td>
                            {{$product->qty}} 
                      </td>
                      <td>{{ round($product->price,2)}} €</td>
                      <td id="total-{{$product->id}}"><span>{{round($product->price * $product->qty ,2) }}</span> €</td>
                    </tr>
                    @php
                    $index++;
                  @endphp
                    @endforeach
                    
                  <tr class="">
                    <td colspan="4" class="text-right "> Total HT</td>
                    <td  id="totalht"><span>{{\Cart::subtotal()}}</span> €</td>
                  </tr>
                  <tr class="">
                    <td colspan="4" class="text-right "> T.V.A </td>
                    <td  id="tax"><span>{{\Cart::tax()}}</span> €</td>
                  </tr>
                  <tr class="total ">
                    <td colspan="4" class="text-right"> Total</td>
                    <td   id="total"><span>{{\Cart::total()}}</span> €</td>
                  </tr>
                </tbody>
              </table>
                <div class="row">
                   <div class="col-md-6 text-left">
                    <a href="{{route('panier')}}" class="btn btn-icon btn-primary  "><i class="fa fa-shopping-cart"></i><span>Retour au panier</span></a>
                  </div>
                  <div class="col-md-6 text-right">
                    <a  href="{{ route('panier.payer') }}" class="btn btn-icon btn-black"><i class="fa fa-money"></i><span>Payer le panier </span></a>
                  </div>
               </div>

        </div>
        

        @include('includes._informations') 
 </div>


@endsection