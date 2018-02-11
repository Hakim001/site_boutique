@extends('layouts.main')


@section('title')

{{$page->name}}
@endsection


@section('content')

<div class="container">
   <div class="row pub">
      <div class="col-md-12 contenu">
      	 <h4>{{ $page->name }}</h4>
      	 <p>{!! nl2br($page->content) !!}</p>
      </div>
   	
   </div>
	
</div>


@endsection