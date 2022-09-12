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
        <p>Already have an account? <a class="text-indigo-600 underline" href="">login</a></p>
        <form action="" method="post">
            @csrf
            <div class="mb-3 mt-4">
                <label for="" class="font-bold block mb-2">Email Address</label>
                <input type="email" class="p-3 rounded-md block w-full border-2 border-indigo-600 outline-indigo 600" placeholder="Email Address:">
            </div>
            <button class="px-8 py-3 bg-indigo-600 text-white rounded-md">Reset Password</button>
        </form>
    </div>
</body>
</html>