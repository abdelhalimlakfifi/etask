@extends('layouts.app')
@section('content')
<div>
    <img src="{{ asset('Assets/wave.png') }}" class="fixed hidden lg:block inset-0 h-full" style="z-index: 0;" />
    <div class="w-screen h-screen flex flex-col justify-center items-center lg:grid lg:grid-cols-2">
        <img src="{{ asset('Assets/unlock.svg')}}"
            class="hidden lg:block w-1/2 hover:scale-150 transition-all duration-500 transform mx-auto" />
        <form method="POST" action="{{ route('login') }}" class="flex flex-col justify-center items-center w-1/2">
            @csrf
            <img src="{{ asset('Assets/avatar.svg')}}" class="w-32" />
            <h2 class="my-8 font-display font-bold text-3xl text-gray-700 text-center">
                Welcome to you
            </h2>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <div class="relative">
                <i class="fa fa-user absolute text-primarycolor text-xl top-2 right-1"></i>
                <input type="email" placeholder="username" name="email"
                    class="pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 text-lg" />
            </div>
            <div class="relative mt-8">
                <i class="fa fa-lock absolute text-primarycolor text-xl top-2 right-1"></i>
                <input type="password" placeholder="password" name="password"
                    class="pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 text-lg" />
            </div>
            <div class="relative">
                
                <a href="{{ route('password.request')}}" class="font-bold mt-7 ml-32">Forgot password</a>
            </div>
            
            <button type="submit" class="mt-10 bg-[#f6a527] text-white px-16 py-2 rounded-full font-semibold">Login</button>
        </form>
    </div>
</div>
@endsection
