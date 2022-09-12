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
           <div class="p-14 bg-white mt-8 rounded-lg shadow-md">
              <div class="py-3.5 px-8 w-2/4 mb-3.5 border-2 border-indigo-200 rounded-full flex items-center justify-between">
                <p class="text-lg font-bold text-gray-900">Profile</p>
                <div class="h-8 w-8 border-2 border-indigo-400 rounded-md flex items-center justify-center">
                    <i class="fa fa-arrow-right text-indigo-400"></i>
                </div>
              </div>
              <div class="py-3.5 px-8 w-2/4 mb-3.5 border-2 border-indigo-200 rounded-full flex items-center justify-between">
                <p class="text-lg font-bold text-gray-900">Security</p>
                <div class="h-8 w-8 border-2 border-indigo-400 rounded-md flex items-center justify-center">
                    <i class="fa fa-arrow-right text-indigo-400"></i>
                </div>
              </div>
              <div class="py-3.5 px-8 w-2/4 mb-3.5 border-2 border-indigo-200 rounded-full flex items-center justify-between">
                <p class="text-lg font-bold text-gray-900">Suggestion Box</p>
                <div class="h-8 w-8 border-2 border-indigo-400 rounded-md flex items-center justify-center">
                    <i class="fa fa-arrow-right text-indigo-400"></i>
                </div>
              </div>
              <div class="py-3.5 px-8 w-2/4 border-2 border-indigo-200 mb-3.5 rounded-full flex items-center justify-between">
                <p class="text-lg font-bold text-gray-900">Support</p>
                <div class="h-8 w-8 border-2 border-indigo-400 rounded-md flex items-center justify-center">
                    <i class="fa fa-arrow-right text-indigo-400"></i>
                </div>
              </div>
              <div class="py-3.5 px-8 w-2/4 border-2 border-indigo-200 rounded-full flex items-center justify-between">
                <p class="text-lg font-bold text-gray-900">Share with Friends</p>
                <div class="h-8 w-8 border-2 border-indigo-400 rounded-md flex items-center justify-center">
                    <i class="fa fa-arrow-right text-indigo-400"></i>
                </div>
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