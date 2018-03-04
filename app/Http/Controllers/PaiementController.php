<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;

use Paypalpayment;
use Redirect;
 

class PaiementController extends Controller
{
    public function checkoutStripe(Request $request)
	{
		//dd($request->all());
		
		$total = \Cart::total();
		try
		{
		Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
		
		$customer = Customer::create([
			'email' => $request->stripeEmail,
			'source' => $request->stripeToken,
		]);
		
		//dd($customer);
		
		$charge = Charge::create([
			'customer' => $customer->id,
			'amount' => $total * 100,
			'currency' => 'eur',
		]);
		
		// sauvegarde ... BDD
		
			$panier = $this->saveTransaction($charge, 'Stripe');
		
		
		}
		catch (Exception $e){
			
			return $e->getMessage();
			
		}
		
		//dd($charge);
		
		return view('panier.paiement', compact('charge', 'panier'));
	}
	
	public function checkoutPaypal(Request $request)
	{
		$total = \Cart::total();
		$cart = \Cart::content();
		$tax =\Cart::tax();
		$subtotal = \Cart::subtotal();
		
		$shippingAddress= Paypalpayment::shippingAddress();
        $shippingAddress->setLine1("3909 Witmer Road")
            ->setLine2("Niagara Falls")
            ->setCity("Niagara Falls")
            ->setState("NY")
            ->setPostalCode("14305")
            ->setCountryCode("US")
            ->setPhone("716-298-1822")
            ->setRecipientName("Jhone");
		
		
		$payer = Paypalpayment::payer();
        $payer->setPaymentMethod("paypal");
		
		
		  $itemList = Paypalpayment::itemlist();

        foreach ($cart as $product) {
        	$item = Paypalpayment::item();
        	$item->setName($product->name)
        		->setDescription($product->name)
        		->setCurrency('EUR')
        		->setQuantity($product->qty)
                ->setTax( $product->price * config('cart.tax') /100)
                ->setPrice($product->price);

            $itemList->addItem($item);
        }
		
		 $itemList->setShippingAddress($shippingAddress);
		
		$details = Paypalpayment::details();
        $details->setShipping("0")
                ->setTax($tax)
                //total of items prices
                ->setSubtotal($subtotal);
		
		 //Payment Amount
        $amount = Paypalpayment::amount();
        $amount->setCurrency("EUR")
                ->setTotal(round($total,2))
                ->setDetails($details);
		
		$transaction = Paypalpayment::transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Achats en ligne - Eshop")
            ->setInvoiceNumber(uniqid());
		
		$redirectUrls = Paypalpayment::redirectUrls();
        $redirectUrls->setReturnUrl(url("/paiement/paypal/done"))
            ->setCancelUrl(url("/paiement/paypal/cancel"));

        $payment = Paypalpayment::payment();

        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions([$transaction]);
		
		
		//ajouter un profile.
		//
		//
		
		 $payment->setExperienceProfileId($this->createWebProfile() );
        
        try {
            
            $payment->create(Paypalpayment::apiContext());
        } 
		
		catch (\PPConnectionException $ex) {
           
			return response()->json(["error" => $ex->getMessage()], 400);
        }


        //return response()->json([$payment->toArray(), 'approval_url' => $payment->getApprovalLink()], 200);

        return Redirect::to( $payment->getApprovalLink() );

		
	}
	
	function saveTransaction($charge, $type)
	{
		$total = \Cart::total();
		$cart = \Cart::content();
		
		$panier = \App\Panier::create([
			'user_id' => \Auth::user()->id,
			'total' => $total,
		]);
		
		foreach ($cart as $line) {
			\App\Line::create([
				'product_id' => $line->id,
				'panier_id' => $panier->id,
				'prix' => $line->price,
				'qte' => $line->qty,
			]);
		
		//mise à jour du stock
		
		$product = \App\product::find($line->id);
		$product->qte = $product->qte - $line->qty;
		$product->save();	
			
		}
   \App\Paiement::create([
				'panier_id' => $panier->id,
				'data' => json_encode($charge),
				'type' => $type,
			]);
		\Cart::destroy();
		
		return $panier;
		
	}
	
	function checkoutPaypalDone(Request $request)
    {
    	 $id = $request->paymentId;
    	 $token = $request->token;
    	 $payer_id = $request->PayerID;
    	
    	 $payment = Paypalpayment::getById($id, Paypalpayment::apiContext());

    	 $paymentExecution = Paypalpayment::paymentExecution();

    	 $paymentExecution->setPayerId($payer_id);
    	 $executePayment = $payment->execute($paymentExecution, Paypalpayment::apiContext()); 

    	 $charge = $payment->toArray();

    	 $panier = $this->saveTransaction($charge, 'Paypal');
		
		dd($request);


    	 return view('panier.paiement', compact('charge','panier'));

    }


    function checkoutPaypalCancel()
    {
    	/// ....

    	return redirect()->route('panier');
    	
    }

	
	public function createWebProfile(){

		$flowConfig = Paypalpayment::FlowConfig();
		$presentation = Paypalpayment::Presentation();
		$inputFields = Paypalpayment::InputFields();
		$webProfile = Paypalpayment::WebProfile();
		$flowConfig->setLandingPageType("Billing"); //Set the page type

		$presentation->setLogoImage(URL('/img/small-logo.png'))->setBrandName("E-Shop online"); //NB: Paypal recommended to use https for the logo's address and the size set to 190x60.

		$inputFields->setAllowNote(true)->setNoShipping(1)->setAddressOverride(0);
		
		$webProfile->setName("eshop " . uniqid())
			->setFlowConfig($flowConfig)
			// Parameters for style and presentation.
			->setPresentation($presentation)
			// Parameters for input field customization.
			->setInputFields($inputFields);

		$createProfileResponse = $webProfile->create(Paypalpayment::apiContext());
	        
		return $createProfileResponse->getId(); 
	}
	
	/*
        Use this call to get a list of payments. 
        url:payment/
    */
    public function index()
    {

        $payments = Paypalpayment::getAll(['count' => 1, 'start_index' => 0], Paypalpayment::apiContext());
        
        return response()->json([$payments->toArray()], 200);

    }

	
	
}
