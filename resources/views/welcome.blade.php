@extends('layout.app')
@section('content')
    <main class="px-8 md:px-16 mt-4">
        <div class="flex flex-col-reverse md:grid gap-y-5 md:grid-cols-2 mt-8 items-center">
            <div>
                <h1 class="text-2xl md:text-5xl leading-normal font-semibold">Crypto & Digital Gift <br> Card Wallet in Africa</h1>
                <p class="text-gray-500 leading-8 mt-5">A user-centric platform designed for YOU to trade, buy and sell various digital assets including gift cards, Bitcoins, Tether, Litecoins, Dogecoins, Airtime and Data topup. Including Naira, Cedis, Bitcoin & USDT as payment options.</p>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/bit.png') }}" class="h-64 w-80" alt="">
            </div>
        </div>
        <div class="grid grid-cols-1 gap-y-4 md:grid-cols-3 gap-x-16 justify-center mt-16">
            <div class="h-full hover:bg-gray-900 hover:text-gray-100 p-6 bg-white shadow-md rounded-md text-gray-900">
                <div class="w-14 h-14 flex items-center justify-center rounded-md bg-green-100 text-green-400 mb-3">
                    <i class="far fa-bell text-2xl"></i>
                </div>
                <h1 class="text-lg mb-3 font-bold">Instant Payment</h1>
                <p class="text-md">Using state-of-the-art payment procedures, you are guaranteed to get your payment sent to your account within minutes.</p>
            </div>
            <div class="h-full hover:bg-gray-900 hover:text-gray-100 p-6 bg-white shadow-md rounded-md text-gray-900">
                <div class="w-14 h-14 flex items-center justify-center rounded-md bg-orange-100 text-orange-400 mb-3">
                    <i class="fa fa-user-friends text-2xl"></i>
                </div>
                <h1 class="text-lg mb-3 font-bold">Cross-Platform Availability</h1>
                <p class="text-md">Sell gift card in Nigeria, anytime, using our modern gift card trading application available on Android, iOS and web browser.</p>
            </div>
            <div class="h-full hover:bg-gray-900 hover:text-gray-100 p-6 bg-white shadow-md rounded-md text-gray-900">
                <div class="w-14 h-14 flex items-center justify-center rounded-md bg-blue-100 text-blue-400 mb-3">
                    <i class="fa fa-user-shield text-2xl"></i>
                </div>
                <h1 class="text-lg mb-3 font-bold">Trusted And Secure</h1>
                <p class="text-md">Trade with high confidence, as we assure you the highest level of encryption and professionally audited exchange system.</p>
            </div>
        </div>
        <div class="my-10 flex justify-center">
            <a href="" class="bg-indigo-500 font-bold py-4 px-12 rounded-md shadow-md text-white">Get Started</a>
        </div>
        <div class="my-10">
            <h1 class="text-center text-xl md:text-2xl font-bold uppercase mb-8">What Customers Say about cryptokini</h1>
            <div class="flex gap-x-4 justify-between items-center">
                <i class="fa fa-arrow-alt-circle-left text-4xl hover:text-indigo-600"></i>
                <div class="md:w-8/12">
                    {{-- <h1 class="text-9xl italic text-gray-300">"</h1> --}}
                    <i class="fa text-5xl text-indigo-200 fa-quote-left"></i>
                    <div class="">
                        <p class="text-md">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi doloremque accusantium distinctio excepturi obcaecati praesentium, iste aut voluptate beatae labore voluptatibus at doloribus et eaque temporibus animi quisquam?</p>
                        <h1 class="font-semibold text-center mt-2">- John Doe</h1>
                        <img src="{{ asset('images/testimonial.png') }}" class="w-14 h-14 mx-auto block mt-2 rounded-full shadow-md" alt="">
                    </div>
                </div>
                <i class="fa fa-arrow-alt-circle-right text-4xl hover:text-indigo-600"></i>
            </div>
        </div>
    </main>
    @include('layout.footer')
@endsection
