
        <div class="col-md-3 sidebar">
            <div class="collections ">
                <div class="header rounded-top">
                    <i class="fa fa-list"></i>
                    <span>Categories</span>
                </div>
                <ul>
                     @foreach($categories as $category)
                    <li> <a href="{{ route('catalogue', ['slug' => $category->slug ]) }}">{{ $category->name }}</a> </li>
                   
                    
                    @endforeach
                </ul>
            </div>

            <div class="collections collection-simple">
                <div class="header">
                    <i class="fa fa-list"></i>
                    <span>Marques</span>
                </div>
                <ul>
                   
                   @foreach($brands as $brand)
                   
                    <li> <a href="{{ route('catalogue.marque', ['slug' => $brand->slug]) }}">{{ $brand->name }}</a> </li>
                    
                    @endforeach
                </ul>
            </div>

            <div class="collections collection-simple collection-square">
                <div class="header">
                    <i class="fa fa-list"></i>
                    <span>Pointures</span>
                </div>
                <ul>
                    <li> <a href="">34</a> </li>
                    <li> <a href="">35</a> </li>
                    <li> <a href="">36</a> </li>
                    <li> <a href="">37</a> </li>
                    <li> <a href="">38</a> </li>
                    <li> <a href="">39</a> </li>
                    <li> <a href="">40</a> </li>
                    <li> <a href="">41</a> </li>
                    <li> <a href="">42</a> </li>
                    <li> <a href="">43</a> </li>
                    <li> <a href="">44</a> </li>
                    <li> <a href="">45</a> </li>
                    <li> <a href="">46</a> </li>

                </ul>
            </div>

            <div class="clearfix"></div> 
            <div class="pub">
                une pub
            </div>
        </div>
        