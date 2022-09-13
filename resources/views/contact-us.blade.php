@extends('layout.app')
@section('content')
    <main class="px-4 md:px-9 lg:px-16 mt-6 md:mt-12">
        <h1 class="text-2xl md:text-3xl leading-normal font-semibold">Contact Us</h1>
        <div class="grid md:grid-cols-2 gap-y-8 lg:grid-cols-3 mt-8 gap-x-16 items-center px-4">
            <div>
               <div class="h-16 w-16 mx-auto rounded-md flex justify-center items-center bg-green-100 text-green-400">
                    <i class="fa fa-location-arrow text-2xl"></i>
               </div>
               <h1 class="text-center font-bold my-3 text-lg">Location</h1>
               <p class="text-md text-center mb-3 text-gray-500">12, Sule Abuka Close off Opebi Rd, Ikeja, Lagos, 100271.</p>
            </div>
            <div>
               <div class="h-16 w-16 mx-auto rounded-md flex justify-center items-center bg-blue-100 text-blue-400">
                    <i class="fa fa-phone text-2xl"></i>
               </div>
               <h1 class="text-center font-bold my-3 text-lg">Phone</h1>
               <p class="text-md text-center text-gray-500 mb-3">You can Call/Whatsapp us at anytime</p>
               <p class="text-md text-center text-indigo-600">09078810948</p>
            </div>
            <div>
               <div class="h-16 w-16 mx-auto rounded-md flex justify-center items-center bg-indigo-100 text-indigo-400">
                    <i class="fa fa-envelope text-2xl"></i>
               </div>
               <h1 class="text-center font-bold my-3 text-lg">Email</h1>
               <p class="text-md text-center text-gray-500 mb-3">Send us a detailed message.</p>
               <p class="text-md text-center text-indigo-600">help@cryptokini.com</p>
            </div>
        </div>
        <hr class="md:mt-10">
        <div class="flex flex-col-reverse lg:grid  md:grid-cols-2 my-12 gap-x-12">
            <div class="p-7 rounded-md shadow-md">
                <h1 class="text-2xl leading-normal font-semibold">Get In Touch!</h1>
                <form action="" class="mt-4" method="post">
                    @csrf
                    <div class="grid gap-y-3.5 md:grid-cols-2 gap-x-6">
                        <div>
                            <label class="block mb-2 font-semibold">Your Name <span class="text-red-500">*</span></label>
                            <input type="text" class="block w-full py-3 px-5 border-2 border-indigo-500 rounded-md outline-indigo-500" placeholder="Fullname:">
                        </div>
                        <div>
                            <label class="block mb-2 font-semibold">Your Email <span class="text-red-500">*</span></label>
                            <input type="text" class="block w-full py-3 px-5 border-2 border-indigo-500 rounded-md outline-indigo-500" placeholder="Email Address:">
                        </div>
                    </div>
                    <div class="mt-4">
                        <div>
                            <label class="block mb-2 font-semibold">Subject <span class="text-red-500">*</span></label>
                            <input type="text" class="block w-full py-3 px-5 border-2 border-indigo-500 rounded-md outline-indigo-500" placeholder="Subject:">
                        </div>
                    </div>
                    <div class="mb-4">
                        <div>
                            <label class="block mb-2 font-semibold">Comment <span class="text-red-500">*</span></label>
                            <textarea rows="3" class="block w-full py-3 px-5 border-2 border-indigo-500 rounded-md outline-indigo-500 resize-none" placeholder="Subject:"></textarea>
                        </div>
                    </div>
                    <button class="py-3 px-14 bg-indigo-600 text-white rounded-md">Send Message</button>
                </form>
            </div>
            <div>
                <object data="{{ asset('svg/contact-us.svg') }}" class="w-9/12 mx-auto" type=""></object>
            </div>
        </div>
    </main>
    @include('layout.footer')
@endsection