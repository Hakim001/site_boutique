@extends('layouts.main')

@section('title')

Catalogue
@endsection

@section('content')

<div class="container">
    <div class="row">
       
       @include('includes._sliderbar')
        
        <div class="col-md-9 contenu">
            <div class="row header_line ">
                <div class="col-md-4">
                    <ul class="list-icons">
                        <li class="active"><a href=""><i class="fa fa-bars"></i></a></li>
                        <li><a href=""><i class="fa fa-th-list"></i></a></li>
                    </ul>
                </div>   

                <div class="col-md-8">
                    <form action="{{ route('catalogue.filter', ['categorie' => Request::segment(2)])}}" method="GET">
                        <ul class="list-actions">
                            <li> 
                                <label>Trier par</label>
                                <select class="custom-select" name="ordre">
                                <option value="all" {{ app('request')->input('ordre') == 'all'?'selected':''}}>All</option>
                                <option value="new" {{ app('request')->input('ordre') == 'new'?'selected':''}} >Nouveautés</option>
                                <option value="ASC" {{ app('request')->input('ordre') == 'ASC'?'selected':''}} >Noms : A-Z</option>
                                <option value="DESC" {{ app('request')->input('ordre') == 'DESC'?'selected':''}}>Noms : Z-A</option>
                                <option value="prix-desc" {{ app('request')->input('ordre') == 'prix-desc'?'selected':''}} >Prix décroissant</option>
                                <option value="prix-asc" {{ app('request')->input('ordre') == 'prix-asc'?'selected':''}}>Prix croissant</option>
                                <option value="promotion" {{ app('request')->input('ordre') == 'promotion'?'selected':''}}>Promotions</option>
                                </select>
                            </li>
                            <li> 
                                <label>Afficher</label>
                                <select class="custom-select" name="perpage">
                                <option value="6" {{ app('request')->input('perpage') == '6'?'selected':''}} >6</option>
                                <option value="9"{{ app('request')->input('perpage') == '9'?'selected':''}} >9</option>
                                <option value="12 {{ app('request')->input('perpage') == '12'?'selected':''}}" >12</option>
                                <option value="15" {{ app('request')->input('perpage') == '15'?'selected':''}}>15</option>
                                <option value="18" {{ app('request')->input('perpage') == '18'?'selected':''}} >18</option>
                                <option value="21" {{ app('request')->input('perpage') == '21'?'selected':''}}>21</option>
                                </select>
                            </li>
                        </ul>

                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>

            <div class="  products">
                <div class="row">
                   
                   @foreach($products as $product)
                    <div class="col-md-4 display_list display_grid">
                       @include('includes._product')
					</div>
                       @endforeach               
                    </div>
                </div>
            

            <div >
                <!--<ul class="pagination">          //pagination sans laravel
                       
                    <li class="disabled"><span>&laquo;</span></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="catalogue?page=2">2</a></li>
                    <li><a href="catalogue?page=3">3</a></li>
                    <li><a href="catalogue?page=4">4</a></li>
                    <li><a href="catalogue?page=5">5</a></li>

                    <li><a href="catalogue?page=2" rel="next">&raquo;</a></li>
                </ul>-->
                                     
                              @if(isset($categorie))
                                     @php
                                           $url = $categorie?$categorie.'/':'';
                                    
                                     @endphp 
                                     
                                    {{$products->withPath($url. '?ordre=' .$ordre.'&perpage=' .$perpage )}}
                                           
                                       @else
                                       {{$products->links()}}
                                      
                                       
                                         @endif    
                                      

            </div>
        </div>
    </div>

   
@include('includes._informations')
        
</div>

@endsection