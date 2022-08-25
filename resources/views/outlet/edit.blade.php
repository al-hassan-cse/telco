@extends('layouts.app')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Update Outlet</h3>
                </div>
                <form role="form" action="{{ route('outlets.update', $outlet->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $outlet->name }}" placeholder="Enter Name">
                            @if($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $outlet->phone }}" placeholder="Enter Phone">
                            @if($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="latitude">Latitude</label>
                            <input type="text" class="form-control @error('latitude') is-invalid @enderror" id="latitude" name="latitude" value="{{ $outlet->latitude }}" placeholder="Enter Latitude">
                            @if($errors->has('latitude'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('latitude') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="longitude">Longitude</label>
                            <input type="text" class="form-control @error('longitude') is-invalid @enderror" id="longitude" name="longitude" value="{{ $outlet->longitude }}" placeholder="Enter Longitude">
                            @if($errors->has('longitude'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('longitude') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" id="image" name="image">
                            <img class="lazy profile-user-img img-responsive" data-src="{{ asset($outlet->image) }}" src="{{ asset('assets/img/placeholder.png') }}" onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder.png') }}';">
                        </div>
                    </div>
                    <div class="box-footer">
                       <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>  
        </div> 
    </div>
</section>
@endsection