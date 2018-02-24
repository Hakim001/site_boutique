@extends('layouts.main')

@section('title')

Panier / Paiement
@endsection

@section('content')

 <div class="container">
        <div class="row pub ">
           <h4>Panier / Paiement </h4>
        </div>
	
       <div class="row pub panier">
          <div class="row">
               <div class="col-md-6 cell example example2" id ="Btn-stripe">
                  <h3>Paiment avec carte</h3>
                    <hr>
                  <form action="#" method="POST">
              
                      {{csrf_field()}}
                      <script
                              src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                              data-key="{{env('STRIPE_PUB_KEY') }}"
                              data-amount="{{ $panier * 100 }}"
                              data-name="vente fight club"
                              data-description="Site de rencontre fight"
                              data-image="{{ URL('img/logo.png')}}"
                              data-locale="auto"
                              data-currency="eur">
                      </script>
                  </form>
                </div>

              <div class="col-md-6 col-md-6 cell example example2" id ="Btn-paypal" >
                <h3>Paiement par Paypal</h3>
                <hr>
                <a href="#" class="link">
                  <img src="{{ asset('/img/paypal.jpg') }}" alt="paypal">
                </a>
              </div>
          </div>

        </div>
        

        @include('includes._informations') 
 </div>


@endsection

@section('scripts')

<!-- <script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="{{ asset('js/stripe.js') }}"></script> -->
@endsection