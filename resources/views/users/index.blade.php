@extends('layouts.app')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Manage Users</h3>
                    <a href="{{ route('users.create') }}" class="btn bg-navy btn-flat margin pull-right"><i class="fa fa-fw fa-plus"></i> Add User</a>
                </div>
                <div class="box-body">
                    @include('notify.notify')
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th class="text-center">Sl</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key=>$user)
                    <tr>
                        <td class="text-center">{{ ++$key }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <div class="text-center">
                                <a href="{{ route('users.edit', encrypt($user->id)) }}" class="btn btn-social-icon btn-bitbucket"><i class="fa fa-fw fa-edit"></i></a>
                                <a class="btn btn-social-icon btn-dropbox">
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
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