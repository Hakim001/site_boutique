@extends('layouts.main')


@section('title')

Accueil du site
@endsection


@section('content')


 <div class="container">
        <div class="row">
            <div class="col-sm-12 contenu">
              
               @include('includes._slider')
               
               @include('includes._pubs') 
               
               
               
                <div class="products ">
                   
                    <div class="row"><h4>Featured Products </h4></div>
					
                    <div class="row">
                       
                       @foreach($lasts as $product)
                        <div class="col-sm-3">
                            @include('includes._product')
                        </div>
                        @endforeach
                        
                     
                        </div>
                    </div>
                
			
                <div class=" products promotions">
                    <div class="header_title"><h4>Promotions Products </h4></div>
                    <div class="row">
                       @foreach($promotions as $product)
                        <div class="col-sm-3">
                            @include('includes._product')
                        </div>
                        @endforeach
                        
                    </div> 
                </div>
            </div>
        </div>
         @include('includes._informations')
    </div>
    
@endsection