@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="text-center">Listings</h1>
      <a href="{{route('listing.create')}}" class="btn btn-primary btn-lg active float-right" style="margin-bottom:5px;" role="button" aria-pressed="true">
            
        Add more listing 
      </a>
  </div>
<div id="app">
    {{-- This is the vue component --}}
    <search-component></search-component>  
</div>
    
@endsection
@section('js_after')
<script src="{{ asset('js/app.js') }}"></script>
@endsection