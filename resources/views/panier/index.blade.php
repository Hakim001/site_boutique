@extends('layouts.main')


@section('title')

Panier
@endsection


@section('content')

            <div class="container">
        <div class="row pub ">
           <h4>Panier</h4>
        </div>
		        
		        @if($panier->count() == 0)
		        
		        <div class="row pub">
		        
		        <p>Votre panier est vide<a href="{{ route('catalogue')}}" class="btn btn-icon btn-primary "><i class="fa fa-reply"></i><span>Retour Catalogue</span></a></p>
		        
				</div>
		        
		        @else

		        <div class="row pub panier">
		        
          	   @include('includes._panier')
				</div>
	            @endif
		          
		          
          			
        
		        
		        @include('includes._informations')
            
            </div>

    

@endsection