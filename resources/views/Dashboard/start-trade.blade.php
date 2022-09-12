@extends('Dashboard.layout.app')
@section('content')
    <main class="px-12 py-8 w-full">
        <div>
            <p class="text-lg mb-6 font-medium">Hello,<span class="text-indigo-600"> {{ auth()->user()->fullname }}</span></p>
            <h1 class="text-2xl font-bold mb-4 mt-8">Start Trade</h1>
        </div>
        <div class="mt-8 bg-white p-8 rounded-md shadow-md">
            <select name="" id="" class="border-2 font-bold bg-white w-2/4 block mb-3.5 border-indigo-400 rounded-lg p-3.5">
                <option value="" selected disabled>Select Category</option>
            </select>
            <select name="" id="" class="border-2 font-bold bg-white w-2/4 block mb-3.5 border-indigo-400 rounded-lg p-3.5">
                <option value="" selected disabled>Select Sub-Category</option>
            </select>
            <div class="flex gap-x-6 mb-3.5 items-center">
                <input type="text" class="border-2 bg-white w-2/4 block border-indigo-400 rounded-lg p-3.5" placeholder="Trade Amount">
                <div class="flex justify-between w-52 bg-indigo-100 p-3.5 rounded-lg">
                    <h1 class="text-xl font-bold text-indigo-600">₦0.00</h1>
                    <h1 class="text-lg font-bold text-indigo-600">000</h1>
                </div>
            </div>
            <textarea rows="1" class="border-2 resize-none bg-white mb-3.5 w-3/4 block border-indigo-400 rounded-lg p-3.5" placeholder="Optional Comment, e.g You can type your code here"></textarea>
            <input type="file" class="border-2 bg-white w-3/4 block mb-5 border-indigo-400 rounded-lg p-3.5">
            <button class="bg-indigo-900 rounded-lg py-3.5 px-8 text-white">Start Trade</button>
        </div>
    </main>
@endsection