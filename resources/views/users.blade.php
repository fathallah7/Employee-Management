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

{{-- @if (session('success'))
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
@endif --}}


    <div class="container mx-auto px-12 py-8">
        <h1 class="text-3xl text-gray-800 font-bold text-center mb-8 mt-6">Employees Listing</h1>

        <!-- Search and Add User (Static) -->
        <div class="flex flex-col-reverse md:flex-row justify-between items-center mb-3 mt-5">
            <div class="w-full md:w-1/2  md:mb-0">
                <input type="text" placeholder="Search users..." class="w-full px-4 py-2 rounded-md border border-gray-300 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <a href="{{ route('users.create') }}">
            <button class="bg-blue-500 text-white px-4 py-2 my-3 rounded-md hover:bg-blue-600 transition duration-300">
                Add New User
            </button>
            </a>
        </div>

        <!-- User Table -->
        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Last Name</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm">
                    @foreach ($data as $data)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left"> {{ $data->id }} </td>
                        <td class="py-3 px-6 text-left"> {{ $data->first_name }} </td>
                        <td class="py-3 px-6 text-left"> {{ $data->last_name }} </td>
                        <td class="py-3 px-6 text-left"> {{ $data->email }} </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex item-center justify-center">
                                <a href="{{ route('users.edit', $data->id) }}">  <button class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button> </a>
                                <form method="POST" action="{{ route('users.destroy', $data->id) }}" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                <button type="submit" class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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

