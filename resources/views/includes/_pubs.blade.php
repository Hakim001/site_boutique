 <div class=" row pubs">
            @php
             $index=0;
            @endphp
             @foreach($pubs as $product)
                    <div class="col-md-6 ">
                        <div class="pub {{$index%2?'pub-primary':''}} ">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>{{$product->name}}</h4>
                                    <p>{{str_limit($product->description, 100)}}</p>
                                    <a href="#">voir détails</a>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ url($product->image) }}" alt="{{ $product->name }}">
                                </div>
                            </div>
                        </div>
                    </div>


                   @php
                    $index++;
                   @endphp
                    @endforeach
</div>
	 
                    



               