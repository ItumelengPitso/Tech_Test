@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="container mt-3" style="padding-bottom: 20px">
                <a class="btn btn-primary" href="{{ route('create') }}"> + Add User</a>
            </div>
            {{--Message--}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 50%">
                    <strong>Attention!</strong> {{session('success')}}.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="float: right">
                        <span>&times;</span>
                    </button>
                </div>
            @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{'Registered users'}}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Surname</th>
                                <th scope="col">ID</th>
                                <th scope="col">Mobile number</th>
                                <th scope="col">Email</th>
                                <th scope="col">Actions</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($registeredUser as $index => $user)

                            <tr>
                                <th scope="row">{{++$index}}</th>
                                <td>{{$user->first_name}}</td>
                                <td>{{$user->surname}}</td>
                                <td>{{$user->sa_id}}</td>
                                <td>{{$user->mobile}}</td>
                                <td>{{$user->email}}</td>
                                <td class="big-column">
                                    <form action="{{ route('destroy',$user->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('edit',$user->id) }}"  title="Click button to edit user">
                                        <i class="fa fa-gear fa-spin"></i>
                                    </a>
                                    @csrf

                                    <button  type="submit" class="btn btn-danger" title="Click button to delete user">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    </form>
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

