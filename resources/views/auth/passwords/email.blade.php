@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 contenu">
                <div class="  products">
                    <div class="row  nomargin" id="signin">
                        <div class="col-lg-2 contact-infos">
                        </div> 
                        <div class="col-md-8">
                           <div class="header_title"><h4>Mot de passe oublié </h4></div>
                           @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                           <form  class="pub form-custom form-horizontal" method="POST" action="{{ route('password.email') }}"> 

                                {{csrf_field()}}

                             <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row"> 
                                
                                <div class="col-sm-10">
                                     <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                         <div class="input-group-addon"><i class="fa fa-envelope" ></i></div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email"  value="{{ old('email') }}" required >
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                              </div>
                              <div class="form-group row">
                                 
                                  <div class="col-sm-4">
                                    <button type="submit" class="btn btn-primary float-right">Réinitialiser le mot de passe</button>
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
