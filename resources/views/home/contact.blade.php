@extends('layouts.main')




@section('title')

nous contacter
@endsection


@section('content')

<div class="container">
    <div class="row">

            <div class="col-md-12 contenu">
                <div class="  products">
                  <!--   <div class="header_title"><h4>Featured Products </h4></div> -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="4 map">
                                <span class="bulle">New</span>
                                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.94722606851!2d2.277020636303585!3d48.858837739604695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1508139076680" width="auto" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                                <iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=quai%20du%20chantier%2010%20%20+(chez%20moi)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Create Google Map</a></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row product nomargin">
                                <div class="col-md-5 contact-infos">
                                    <h4>Nous conctacter  </h4>
                                    <div class="pub">
                                        <ul class="list-infos">
                                            <li><i class="fa fa-phone"></i><span>06 12 34 56 78</span></li>
                                            <li><i class="fa fa-envelope"></i><span>Contact@eshop.com</span></li>
                                            <li><i class="fa fa-address-card-o"></i><span> 15 rue de Paris </span></li>
                                            <li><i class=" "></i><span> 75020 Paris </span></li>
                                        
                                        </ul>
                                    </div>
                                </div>    
                                <div class="col-md-7">
                                   <form class="pub form-custom" method="post" action="{{ route('contact.post') }}">
                                        {{csrf_field()}}
                                      <div class="form-group row"> 
                                        <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                                        <div class="col-sm-10">
                                             <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                 <div class="input-group-addon"><i class="fa fa-user" ></i></div>
                                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom " value="{{ old('name')}}">
                                            </div>
                                         </div>
                                         @if($errors->has('nom'))
                                           <span class="help-block"><strong>{{ $errors->first('nom') }}</strong></span>
                                           @endif
                                      </div>
                                     <div class="form-group row"> 
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                             <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                 <div class="input-group-addon"><i class="fa fa-envelope" ></i></div>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email')}}">
                                            </div>
                                        </div>
                                        @if($errors->has('email'))
                                           <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                           @endif
                                      </div>
                                      <div class="form-group row"> 
                                        <label for="objet" class="col-sm-2 col-form-label">Objet</label>
                                        <div class="col-sm-10">
                                             <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                 <div class="input-group-addon"><i class="fa fa-lightbulb-o" ></i></div>
                                                <input type="text" class="form-control" id="" name="objet" placeholder="Sujet " value="{{ old('objet') }}">
                                            </div>
                                        </div>
                                        @if($errors->has('objet'))
                                           <span class="help-block"><strong>{{ $errors->first('objet') }}</strong></span>
                                           @endif
                                      </div>

                                      <div class="form-group">
                                        <label for="content">Message</label>
                                        <textarea class="form-control" id="content" name="content" rows="8">{{old('content')}} </textarea> 
                                    </div>
                                      @if($errors->has('content'))
                                           <span class="help-block"><strong>{{ $errors->first('content') }}</strong></span>
                                           @endif

                                      <div class="form-group row">
                                          <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary float-right">Envoyer</button>
                                          </div>

                                        </div>
                                    </form>
                                </div>
                    </div>
                </div>
            </div>
           
        </div>
</div>


@endsection