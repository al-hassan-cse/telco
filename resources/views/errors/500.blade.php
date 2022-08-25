@extends('layouts.blank')

@section('content')
	<div class="text-center">
	    <p class="h4 text-uppercase text-bold">{{ landata('OOPS') }}</p>
	    <div class="pad-btm">
		    <strong>{{ landata('Something went wrong. Looks like server failed to load your request') }}</strong>
	    </div>
	    <hr class="new-section-sm bord-no">
	    <div class="pad-top">
	    	<a class="btn btn-primary" href="{{ url('admin') }}">{{ landata('Return Home') }}</a>
	    </div>
	</div>
@endsection
