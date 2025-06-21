@extends('layouts.app')

@section('title')
    Admin Info
@endsection

@section('content')

<div class="flex items-center justify-center h-130">

    <header class="px-2 py-4 flex flex-col justify-center items-center text-center">
        <img class="inline-flex object-cover border-4 border-indigo-600 rounded-full shadow-[5px_5px_0_0_rgba(0,0,0,1)] shadow-indigo-600/100 bg-indigo-50 text-indigo-600 h-24 w-24 !h-48 !w-48" src="{{asset('images/admin.avif')}}" alt="">
        <h1 class="text-2xl text-gray-500 font-bold mt-2">
            Abdullah Fathallah
        </h1>
        <h2 class="text-base md:text-xl text-gray-500 font-bold">
            Full-Stack Developer
            <a href="" target="_blank"
            class="text-indigo-900 hover:text-indigo-600 font-bold border-b-0 hover:border-b-4 hover:border-b-indigo-300 transition-all mb-2">
            @ Google
        </a>
    </h2>
</header>

</div>

@endsection
