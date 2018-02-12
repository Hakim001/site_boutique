<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactForm;
use App\Mail\ContactFromSite;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pubs = \App\Product::orderByRaw('RAND()')->take(2)->get();

        $lasts = \App\Product::orderBy('created_at','ASC')->take(4)->get();

        $promotions = \App\Promotion::orderBy('created_at','ASC')
            ->where('started_at','<=',\Carbon\Carbon::now())
            ->where('finished_at','>=',\Carbon\Carbon::now())
            ->take(4)->get();

        
        return view('home.main',compact('lasts','promotions','pubs'));
    }


    function contact()
    {
         return view('home.contact');        
    }

    function postContact(ContactForm $request)
    {
        $message = \App\Message::create([
            'nom'=>$request->nom,
            'email'=>$request->email,
            'objet'=>$request->objet,
            'content' =>$request->content,
        ]);

        // envois d'émail,
        // 
        
        //return new ContactFromSite($message);

        \Mail::to(env('CONTACT_SITE_EMAIL'))->send(new ContactFromSite($message));
        
        flash('Merci pour votre méssage , votre demande sera traitée dans les plus brèfs délais ! ')->success();

        return redirect()->back();

    }

    function page($slug)
    {
        $page = \App\Page::where('slug',$slug)->firstOrFail();


        return view('home.page',compact('page'));
    }
}

