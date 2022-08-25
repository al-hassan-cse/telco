@extends('layouts.app')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Update User</h3>
                </div>
                <form role="form" action="{{ route('users.update', $user->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $user->name }}" placeholder="Enter Name">
                            @if($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
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