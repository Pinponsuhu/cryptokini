@extends('Dashboard.layout.app')
@section('content')
    <main class="px-12 py-8 w-full">
        <div class="flex justify-end w-full mb-4 gap-x-3 items-center">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="flex gap-x-4 h-14 shadow-md py-3 px-8 rounded-full items-center bg-white"><p class="text-lg">Logout</p> <i class="fa fa-window-close text-2xl text-red-500"></i></button>
            </form>
            <span  onclick="notification()" class="h-14 w-14 shadow-md flex items-center justify-center cursor-pointer bg-white rounded-full"><i class="far text-2xl fa-bell"></i></span>
        </div>
        <div>
            <p class="text-lg mb-6 font-medium">Hello,<span class="text-indigo-600"> {{ auth()->user()->fullname }}</span></p>
        </div>
        <h1 class="text-3xl font-bold mt-8">Rates Calculator</h1>
           <div class="p-8 bg-white mt-4 rounded-lg shadow-md">
                <select name="" id="" class="border-2 font-bold bg-white w-2/4 block mb-3.5 border-indigo-400 rounded-lg p-3.5">
                    <option value="" selected disabled>Select Category</option>
                </select>
                <select name="" id="" class="border-2 font-bold bg-white w-2/4 block mb-3.5 border-indigo-400 rounded-lg p-3.5">
                    <option value="" selected disabled>Select Sub-Category</option>
                </select>
                <input type="text" class="border-2 bg-white w-2/4 block border-indigo-400 rounded-lg p-3.5" placeholder="Enter Gift Card Amount">
                <div class="flex gap-x-6 mb-3.5 mt-3.5 items-center">
                    <div class="flex justify-between w-2/4 bg-indigo-200 p-3.5 rounded-lg">
                        <h1 class="text-xl font-bold text-indigo-600">₦0.00</h1>
                        <h1 class="text-lg font-bold text-indigo-600">000</h1>
                    </div>
                    <button class=" w-52 px-12 bg-indigo-900 text-white rounded-lg py-3.5">Calculate</button>
                </div>
           </div>
    </main>
    <aside id="notification" class="fixed w-screen h-screen hidden bg-gray-900 bg-opacity-80 top-0 left-0 flex justify-center items-center">
        <div class="w-2/6 p-8 rounded-md bg-white">
            <div class="flex justify-end mb-4"><i onclick="notification()" class="fa fa-window-close cursor-pointer text-2xl text-indigo-600"></i></div>
            <h1 class="text-xl font-bold text-indigo-900">Notifications</h1>
            <hr class="my-3.5">
            <p class="text-md font-semibold">There are no notifications for you as at now <i class="fa fa-smile text-yellow-600"></i></p>
        </div>
    </aside>
    <script>
        function notification(){
            document.getElementById('notification').classList.toggle('hidden');
        }
    </script>
@endsection