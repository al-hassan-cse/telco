@extends('layouts.blank')

@section('content')
	<div class="text-center">
	    <p class="h4 text-uppercase text-bold">{{ landata('Page Not Found') }}!</p>
	    <div class="pad-btm">
	        <strong>{{ landata('Sorry, but the page you are looking for has not been found on our server') }}</strong>
	    </div>
	    <hr class="new-section-sm bord-no">
	    <div class="pad-top">
	    	<a class="btn btn-primary" href="{{ url('/') }}">{{ landata('Return Home') }}</a>
	    </div>
	</div>
@endsection
