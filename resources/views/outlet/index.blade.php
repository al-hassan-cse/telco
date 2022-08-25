@extends('layouts.app')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Manage Outlets</h3>
                    <a href="{{ route('outlets.create') }}" class="btn bg-navy btn-flat margin pull-right"><i class="fa fa-fw fa-plus"></i> Add Outlet</a>
                </div>
                <div class="box-body">
                    @include('notify.notify')
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th class="text-center">Sl</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Latitude</th>
                        <th class="text-center">Longitude</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($outlets as $key=>$outlet)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $outlet->name }}</td>
                        <td>{{ $outlet->phone }}</td>
                        <td>{{ $outlet->latitude }}</td>
                        <td>{{ $outlet->longitude }}</td>
                        <td> 
                            <img class="lazy profile-user-img img-responsive" data-src="{{ asset($outlet->image) }}" src="{{ asset('assets/img/placeholder.png') }}" onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder.png') }}';">
                        </td>
                        <td>
                            <div class="text-center">
                                <a href="{{ route('outlets.edit', encrypt($outlet->id)) }}" class="btn btn-social-icon btn-bitbucket"><i class="fa fa-fw fa-edit"></i></a><br>
                                <a class="btn btn-social-icon btn-dropbox">
                                    <form action="{{ route('outlets.destroy', $outlet->id) }}" method="POST">
                                    <button type="submit" class="btn btn-social-icon btn-dropbox"><i class="fa fa-fw fa-trash"></i></button>
                                    @method('DELETE')    
                                    @csrf
                                    </form>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection