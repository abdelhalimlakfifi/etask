<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Login project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <img src="{{ asset('Assets/wave.png') }}" class="fixed hidden lg:block inset-0 h-full" style="z-index: -1;" />
    <div class="w-screen h-screen flex flex-col justify-center items-center lg:grid lg:grid-cols-2">
        <img src="{{ asset('Assets/unlock.svg')}}"
            class="hidden lg:block w-1/2 hover:scale-150 transition-all duration-500 transform mx-auto" />
        <form method="POST" action="{{ route('login') }}" class="flex flex-col justify-center items-center w-1/2">
            @csrf
            <img src="{{ asset('Assets/avatar.svg')}}" class="w-32" />
            <h2 class="my-8 font-display font-bold text-3xl text-gray-700 text-center">
                Welcome to you
            </h2>
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
            
            <button type="submit" class="mt-10 bg-[#f6a527] text-white px-16 py-2 rounded-full font-semibold">Login</button>
        </form>
    </div>
</body>

</html>
