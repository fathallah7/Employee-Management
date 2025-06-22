@extends('layouts.app')

@section('title')
    User Info
@endsection

@section('content')


    {{-- <a href="{{ route('users.edit', $info->id) }}" class="btn btn-outline-primary">
        <i class="bi bi-pencil-square me-1"></i> Edit Profile </a> --}}



    <div class="flex items-center justify-center h-150">
        <!-- Card Container -->
        <div class="w-full max-w-md mx-4 bg-white rounded-xl shadow-lg overflow-hidden md:max-w-2xl">
            <!-- Card Header with Gradient Background -->
            <div class="h-2 bg-gradient-to-r from-blue-500 to-cyan-400"></div>

            <!-- Card Content -->
            <div class="p-8">
                <!-- Profile Section -->
                <div class="flex items-center">
                    <!-- Avatar -->
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full">
                            <span class="text-2xl font-bold text-blue-600">{{ strtoupper(substr($info->first_name, 0, 1)) }}{{ strtoupper(substr($info->last_name, 0, 1)) }}</span>
                        </div>
                    </div>

                    <!-- Name and Title -->
                    <div class="ml-4">
                        <h2 class="text-xl font-bold text-gray-800"> {{ $info->first_name }} {{ $info->last_name }} </h2>
                        <p class="text-blue-600">Software Engineer</p>
                    </div>
                </div>

                <!-- Divider -->
                <div class="my-6 border-t border-gray-200"></div>

                <!-- Contact Information -->
                <div class="space-y-4">
                    <!-- Phone -->

                    <!-- Email -->
                    <div class="flex items-center">
                        <div class="flex items-center justify-center w-10 h-10 bg-blue-50 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-500">Email</p>
                            <p class="text-gray-700"> {{ $info->email }} </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection