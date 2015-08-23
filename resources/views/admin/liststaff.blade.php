@extends('admin')

@section('htmlheader_title')
    Admin > List Staff
@endsection

@section('contentheader_title')
    List Staff
@endsection

@section('main-content')
    <div class="container">

            <div class="row">
                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Admin and Staff
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Sr no.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Manage</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; ?>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td> {{ $user->name }}</td>
                                        <td> {{ $user->email }}</td>
                                        <td> {{ $user->role_id }}</td>
                                        <td> {{ $user->phone }}</td>
                                        <td> {{ $user->created_at->format('d/m/Y') }}</td>
                                        <td>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-red btn btn-xs">Delete</button>
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

    {!! $users->render() !!}
@endsection