@extends('layouts.app')

@section('title')
    Add User
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

<div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
    <div class="custom-card" style="max-width: 700px; width: 100%;">
        <h2 class="text-center mb-4 text-primary fw-bold">
            <i class="bi bi-person-plus-fill title-icon"></i>
            Add New User
        </h2>
        {{-- <form method="POST" action="{{ route('users.store') }}">
            @csrf --}}
            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Enter first name" required>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Enter last name" required>
                </div>
            </div>

            <div class="mb-4">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email address" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">
                <i class="bi bi-send-fill me-2"></i> Submit
            </button>
        </form>
    </div>
</div>

<div class="mx-14 mt-10 border-2 border-blue-400 rounded-lg">
  <div class="mt-10 text-center font-bold">Employees</div>
  <div class="mt-3 text-center text-4xl font-bold">Add Employee</div>
  <div class="p-8">
    <div class="flex gap-4">
    <form method="POST" action="{{ route('users.store') }}">
    @csrf
      <input type="Name" name="name" class="mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="Full Name *" />
      <input type="email" name="email" class="mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="Email *" />
      <input type="email" name="email" class="mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="Email *" />
    </div>
            </form>
    <div class="text-center mt-10">
      <a class="cursor-pointer rounded-lg bg-blue-700 px-8 py-5 text-sm font-semibold text-white">Book Appoinment</a>
    </div>
  </div>
</div>

@endsection
