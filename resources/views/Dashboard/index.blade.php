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
        <div class="mt-4 flex gap-x-8 mb-4">
            <div class="w-80 md:w-96 bg-white p-8 flex justify-between items-center rounded-lg shadow-md">
              <div>
                <i onclick="balance()" id="balance-view" class="fa fa-eye cursor-pointer text-gray-600 text-lg block mb-2.5"></i>
                <h1 id="words" class="text-2xl hidden text-indigo-900 font-bold">₦{{ $wallet->balance }}<span class="text-indigo-100">.00</span></h1>
                <h1 id="obscure" class="text-2xl text-indigo-900 font-bold">**********</h1>
                <p class="font-medium text-sm">Your wallet funds</p>
              </div>
              <div class="h-16 w-16 rounded-full bg-gray-100  flex justify-center items-center"><i class="fa fa-wallet text-2xl text-gray-600"></i></div>
            </div>
            <div class="w-80 md:w-96 bg-indigo-900 p-8 flex justify-between items-center rounded-lg shadow-md">
              <div>
                <h1 class="text-2xl text-white font-bold">Start Trade</h1>
              </div>
              <div class="h-14 w-14 rounded-full bg-indigo-100 border-2 flex justify-center items-center"><i class="fa fa-credit-card text-xl text-green-600"></i></div>
            </div>
        </div>
            <h1 class="text-2xl font-bold mb-4 mt-8">Dashboard</h1>
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
            <div class="mt-8">
                <a href="" class="py-3.5 px-12 rounded-full bg-white shadow-md text-gray-500">View All</a>
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
        var words = false;
        function balance(){
            words = !words;
            if(words == true){
                document.getElementById('words').classList.remove('hidden');
                document.getElementById('obscure').classList.add('hidden');
                document.getElementById('balance-view').classList.remove('fa-eye');
                document.getElementById('balance-view').classList.add('fa-eye-slash');
            }else{
                document.getElementById('obscure').classList.remove('hidden');
                document.getElementById('words').classList.add('hidden');
                document.getElementById('balance-view').classList.add('fa-eye');
                document.getElementById('balance-view').classList.remove('fa-eye-slash');
            }
        }

        function notification(){
            document.getElementById('notification').classList.toggle('hidden');
        }
    </script>
@endsection