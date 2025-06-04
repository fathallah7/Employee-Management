@extends('layouts.app')

@section('title')
    Update User
@endsection

@section('content')

<style>
    .custom-card {
        background-color: #fff;
        border-radius: 1.25rem;
        padding: 3rem;
        box-shadow: 0 0 20px rgba(0,0,0,0.05);
        transition: all 0.3s ease-in-out;
    }

    .custom-card:hover {
        transform: scale(1.01);
        box-shadow: 0 0 30px rgba(0,0,0,0.08);
    }

    .form-control {
        border-radius: 0.75rem;
        padding: 0.9rem 1rem;
        font-size: 1rem;
    }

    .form-label {
        font-weight: 600;
        color: #333;
    }

    .btn-primary {
        font-size: 1.1rem;
        border-radius: 0.75rem;
        padding: 0.75rem;
        transition: all 0.2s ease-in-out;
    }

    .btn-primary:hover {
        background-color: #0b5ed7;
        box-shadow: 0 6px 12px rgba(0, 123, 255, 0.2);
    }

    .title-icon {
        font-size: 2rem;
        vertical-align: middle;
        margin-right: 0.5rem;
    }
</style>

<div class="mx-14 mt-32 border-2 border-blue-400 rounded-lg">
    <div class="mt-10 text-center font-bold">Employees</div>
    <div class="mt-3 text-center text-4xl font-bold">Update User Info</div>

    <div class="p-8">
        <form method="POST" action="{{ route('users.update', $info->id) }}">
            @csrf
            @method('PUT')

            <div class="flex flex-col md:flex-row gap-4">
                <div class="w-full">
                    <input
                        type="text"
                        name="firstName"
                        class="mt-1 block w-full rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm"
                        value="{{ $info->first_name }}" required/>
                </div>

                <div class="w-full">
                    <input
                        type="text"
                        name="lastName"
                        class="mt-1 block w-full rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm"
                        value="{{ $info->last_name }}" required/>
                </div>

                <div class="w-full">
                    <input
                        type="email"
                        name="email"
                        class="mt-1 block w-full rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm"
                        value="{{ $info->email }}" required/>
                </div>
            </div>

            <div class="text-center mt-10">
                <button
                    type="submit"
                    class="cursor-pointer rounded-lg bg-blue-700 px-8 py-5 text-sm font-semibold text-white">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</div>

@endsection


