<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crypto Trading Platform</title>
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
<body class="bg-gray-100 text-gray-900 flex">
    <nav class="h-full pt-14 pb-4 px-8 mb-12 w-64 bg-white">
        <h1 class="font-bold text-3xl">Crypto<span class="text-indigo-600">Kini</span></h1>
         <ul class="mt-8">
        <li class="text-lg py-4 font-semibold  flex items-center gap-x-4"><div class="@if(request()->routeIs('dashboard')) bg-indigo-400 shadow-md text-white @else bg-white text-gray-500 @endif h-14 flex justify-center items-center w-14 rounded-full "><i class="fa fa-chart-bar text-2xl"></i></div><a class="text-gray-500" href="/dashboard">Dashboard</a></li>
        <li class="text-lg py-4 font-semibold  flex items-center gap-x-4"><div class="@if(request()->routeIs('trade')) bg-indigo-400 shadow-md text-white @else bg-white text-gray-500 @endif h-14 flex justify-center items-center w-14 rounded-full"><i class="fa fa-credit-card text-2xl"></i></div><a class="text-gray-500" href="/start-trade">Start Trade</a></li>
        <li class="text-lg py-4 font-semibold  flex items-center gap-x-4"><div class="@if(request()->routeIs('transactions')) bg-indigo-400 shadow-md text-white @else bg-white text-gray-500 @endif  h-14 flex justify-center items-center w-14 rounded-full"><i class="fa fa-redo text-2xl "></i></div><a  class="text-gray-500" href="/transactions">Transactions</a></li>
        <li class="text-lg py-4 font-semibold text-gray-500 flex items-center gap-x-4"><div class="@if(request()->routeIs('wallet')) bg-indigo-400 shadow-md text-white @else bg-white text-gray-500 @endif h-14 flex justify-center items-center w-14 rounded-full"><i class="fa fa-wallet text-2xl text-gray-500"></i></div><a href="/wallet">Wallet</a></li>
        <li class="text-lg py-4 font-semibold text-gray-500 flex items-center gap-x-4"><div class="@if(request()->routeIs('calculator')) bg-indigo-400 shadow-md text-white @else bg-white text-gray-500 @endif h-14 flex justify-center items-center w-14 rounded-full"><i class="fa fa-calculator text-2xl text-gray-500"></i></div><a href="/calculator">Calculator</a></li>
        <li class="text-lg py-4 font-semibold text-gray-500 flex items-center gap-x-4"><div class="@if(request()->routeIs('settings')) bg-indigo-400 shadow-md text-white @else bg-white text-gray-500 @endif h-14 flex justify-center items-center w-14 rounded-full"><i class="fa fa-cog text-2xl text-gray-500"></i></div><a href="/settings">Settings</a></li>
    </ul>
    </nav>
    @yield('content')
</body>
</html>
