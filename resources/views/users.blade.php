@extends('layouts.app')

@section('title')
    Users
@endsection

@section('content')

<style>
    .table th, .table td {
        vertical-align: middle;
        text-align: center;
    }

    .table thead th {
        background-color: #f8f9fa;
        font-weight: 600;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
        transition: background-color 0.3s ease;
    }

    .btn-sm {
        min-width: 70px;
    }

    .btn i {
        margin-right: 5px;
    }

    .card {
        background: #fff;
        border-radius: 16px;
        border: none;
    }

    .btn-outline-info:hover {
        background-color: #0dcaf0;
        color: white;
    }

    .btn-outline-primary:hover {
        background-color: #0d6efd;
        color: white;
    }

    .btn-outline-danger:hover {
        background-color: #dc3545;
        color: white;
    }
</style>

@if (session('success'))
    <div class="position-fixed bottom-0 end-0 p-3"  style="z-index: 9999" >
        <div class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('success') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif
@if (session('danger'))
    <div class="position-fixed bottom-0 end-0 p-3"  style="z-index: 9999" >
        <div class="toast align-items-center text-bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('danger') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif



<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card shadow-lg border-0 rounded-4 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                    <h2 class="mb-0 fw-bold text-dark">👥 Employee Management</h2>
                    <a href="{{ route('users.create') }}" class="btn btn-success btn-lg rounded-3 px-4">
                        + Add User
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle w-100">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 10%;">#</th>
                                <th style="width: 30%;">First Name</th>
                                <th style="width: 30%;">Last Name</th>
                                <th style="width: 30%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                            <tr>
                                <td class="fw-semibold text-muted">{{ $data->id }}</td>
                                <td>{{ $data->first_name }}</td>
                                <td>{{ $data->last_name }}</td>
                                <td>
                                    <a href="{{ route('user.info', $data->id) }}" class="btn btn-outline-info btn-sm rounded-pill me-1">
                                        <i class="bi bi-eye"></i> View
                                    </a>
                                    <a href="{{ route('users.edit', $data->id) }}" class="btn btn-outline-primary btn-sm rounded-pill me-1">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <form method="POST" action="{{ route('users.destroy', $data->id) }}" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill" onclick="return confirm('Are you sure you want to delete this user?');">
                                            <i class="bi bi-trash"></i> Delete
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


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toastElList = [].slice.call(document.querySelectorAll('.toast'));
        toastElList.forEach(toastEl => {
            new bootstrap.Toast(toastEl).show();
        });
    });
</script>

