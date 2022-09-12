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

        <div class="flex gap-x-8 items-center">
            <div class="w-64 shadow-md flex items-center justify-between bg-white rounded-lg p-6">
                <div>
                    <img src="{{ asset('images/success.png') }}" class="block h-16 mb-1.5" alt="">
                    <p class="text-gray-400 text-sm">Successful</p>
                </div>
                <h1 class="text-4xl font-bold text-gray-900">0</h1>
            </div>
            <div class="w-64 shadow-md flex items-center justify-between bg-white rounded-lg p-6">
                <div>
                    <img src="{{ asset('images/failed.png') }}" class="block h-16 mb-1.5" alt="">
                    <p class="text-gray-400 text-sm">Failed</p>
                </div>
                <h1 class="text-4xl font-bold text-gray-900">0</h1>
            </div>
            <div class="w-64 shadow-md flex items-center justify-between bg-white rounded-lg p-6">
                <div>
                    <img src="{{ asset('images/pending.png') }}" class="block h-16 mb-1.5" alt="">
                    <p class="text-gray-400 text-sm">Pending</p>
                </div>
                <h1 class="text-4xl font-bold text-gray-900">0</h1>
            </div>
        </div>
            <h1 class="text-3xl font-bold mt-8">Gift Card</h1>
            <p class="text-2xl mb-6 text-indigo-300 font-bold -mt-1">History</p>
            <div class="p-8 bg-white rounded-lg shadow-md">
                <div class="flex justify-between items-center py-3">
                    <p class="font-semibold">Gift Card</p>
                    <p class="font-semibold">Date | Time</p>
                    <p class="font-semibold">Amount | <span class="text-indigo-600">Rate</span></p>
                    <p class="font-semibold">NGN</p>
                    <p class="font-semibold">Status</p>
                    <p class="font-semibold">Type</p>
                </div>
                <hr class="mb-4">
                <p class="text-xl text-center py-5 italic font-medium">No History of any transaction was found</p>
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