@extends('layouts.app')

@section('title')
    Users
@endsection

@section('content')


    @if (session('success'))
        <div id="successAlert"
            class="fixed bottom-5 right-5 bg-green-100 border border-green-500 text-green-700 px-5 py-3 rounded shadow-lg z-50 flex items-start gap-3">
            <svg class="w-6 h-6 text-green-500 mt-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
            <div class="flex-1">
                <strong class="block mb-1">Success</strong>
                <p>{{ session('success') }}</p>
            </div>
            <button onclick="document.getElementById('successAlert').remove()"
                class="ml-4 text-green-700 hover:text-green-900 text-lg">&times;</button>
        </div>
    @endif

    @if (session('danger'))
        <div id="dangerAlert"
            class="fixed bottom-5 right-5 bg-red-100 border border-red-500 text-red-700 px-5 py-3 rounded shadow-lg z-50 flex items-start gap-3 mt-3">
            <svg class="w-6 h-6 text-red-500 mt-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div class="flex-1">
                <strong class="block mb-1">Deleted</strong>
                <p>{{ session('danger') }}</p>
            </div>
            <button onclick="document.getElementById('dangerAlert').remove()"
                class="ml-4 text-red-700 hover:text-red-900 text-lg">&times;</button>
        </div>
    @endif




    <div class="container mx-auto px-12 py-8">
        <h1 class="text-3xl text-gray-800 font-bold text-center mb-8 mt-6">Employees Listing</h1>

        <!-- Search and Add User (Static) -->
        <div class="flex flex-col-reverse md:flex-row justify-between items-center mb-3 mt-5">
            <div class="w-full md:w-1/2  md:mb-0">
                <input type="text" placeholder="Search users..."
                    class="w-full px-4 py-2 rounded-md border border-gray-300 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
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

                                    <a href="{{ route('users.edit', $data->id) }}"> <button
                                            class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                            <i class="fa-solid fa-pen"></i>
                                        </button> </a>

                                    <form method="POST" action="{{ route('users.destroy', $data->id) }}" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>

                                    <a href="{{ route('user.info', $data->id) }}"> <button
                                            class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                            <i class="fa-solid fa-user"></i>
                                        </button> </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



    <script>
        setTimeout(() => {
            const successAlert = document.getElementById('successAlert');
            const dangerAlert = document.getElementById('dangerAlert');

            if (successAlert) successAlert.remove();
            if (dangerAlert) dangerAlert.remove();
        }, 5000);
    </script>



@endsection


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toastElList = [].slice.call(document.querySelectorAll('.toast'));
        toastElList.forEach(toastEl => {
            new bootstrap.Toast(toastEl).show();
        });
    });
</script>