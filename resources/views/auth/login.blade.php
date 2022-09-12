<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Cryptokin Trading platform</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
    body{
        font-family: 'Poppins', sans-serif;
    }
</style>
<script src="{{ asset('js/all.js') }}"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
    <div class="w-80 md:w-96 mx-auto mt-20 rounded-md shadow-md px-6 py-14">
        <h1 class="font-bold mb-3 text-3xl">Crypto<span class="text-indigo-600">Kini</span></h1>
        <p>Don't have an account? <a class="text-indigo-600 underline" href="/register">Register</a></p>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="mb-3 mt-4">
                <label for="" class="font-bold block mb-2">Email Address</label>
                <input type="email" name="email" class="p-3 rounded-md block w-full border-2 border-indigo-600 outline-indigo 600" placeholder="Email Address:">
                @error('email')
                    <p class="text-red-400 mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-2 mt-2">
                <label for="" class="font-bold block mb-2">Password</label>
                <input type="password" name="password" class="p-3 rounded-md block w-full border-2 border-indigo-600 outline-indigo 600" placeholder="Password:">
            </div>
            <p class="text-indigo-600 text-right underline mb-3"><a href="/forgot-password">Forgot Password?</a></p>
            <button class="px-8 py-3 bg-indigo-600 text-white rounded-md">Login</button>
        </form>
    </div>
    @if (Session('message'))
    <div id="message-modal" class="fixed top-4 right-4 bg-indigo-500 rounded-md shadow-md p-6 text-white">
        <div class="flex justify-end">
            <i onclick="closeMessage()" class="fa fa-window-close"></i>
        </div>
        <p class="mb-2">Message:</p>
        <p class="font-semibold">{{ Session('message') }}</p>
    </div>
    @endif
</body>
<script>
    function closeMessage(){
        document.getElementById('message-modal').classList.add('hidden');
    }
</script>
</html>