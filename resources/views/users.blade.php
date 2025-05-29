
    @extends('layouts.app')

    @section('content')

    @section('title')
        Users
    @endsection


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="mb-0 fw-bold text-primary">User List</h3>
                    <a href="{{route('users.create')}}" class="btn btn-success px-4 py-2">+ Add User</a>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                            <tr>
                                <th scope="row">{{$data['id']}}</th>
                                <td>{{$data->first_name}}</td>
                                <td>{{$data->last_name}}</td>
                                <td>
                                    <a href="{{route('user.info' , $data->id)}}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{route('users.edit' , $data->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                    <form style="display:inline" method="POST" action="{{route('users.destroy' , $data->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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