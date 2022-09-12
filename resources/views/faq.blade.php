@extends('layout.app')
@section('content')
    <main class="px-8 md:px-28 mt-4">
        <h1 class="md:text-3xl text-2xl leading-normal font-semibold">Frequently Asked Questions</h1>
        <div class="mt-6">
            <div class="bg-indigo-200 none py-5 mb-2.5 px-6">
                <div class="flex justify-between items-center py-3.5">
                    <h1 class="text-xl md:text-2xl font-bold uppercase text-indigo-600">What is CryptoKini</h1>
                    <i class="fa fa-caret-up"></i>
                </div>
                <p class="leading-8 none">Cryptokini, deal with buy and selling digital currency that allows customers to exchange conventional fiat money to digital currencies or a form of digital currency to another. </p>
            </div>
            <div class="bg-indigo-200 py-5 mb-2.5 px-6">
                <div class="flex justify-between items-center py-3.5">
                    <h1 class="text-xl md:text-2xl font-bold uppercase text-indigo-600">How do I place an order? </h1>
                    <i class="fa fa-caret-up"></i>
                </div>
                <p class="leading-8 none">To place order is simple. Login to your account, click on 'Place Order', fill the order form and follow the prompts.</p>
            </div>
            <div class="bg-indigo-200 py-5 mb-2.5 px-6">
                <div class="flex justify-between items-center py-3.5">
                    <h1 class="text-xl md:text-2xl font-bold uppercase text-indigo-600">How do I know if my order has been successful place and will I be notified by email or SMS or both?</h1>
                    <i class="fa fa-caret-up"></i>
                </div>
                <p class="leading-8 none">There is notification via text and email on every successful order. </p>
            </div>
            <div class="bg-indigo-200 py-5 mb-2.5 px-6">
                <div class="flex justify-between items-center py-3.5">
                    <h1 class="text-xl md:text-2xl font-bold uppercase text-indigo-600">How do I get verified?</h1>
                    <i class="fa fa-caret-up"></i>
                </div>
                <p class="leading-8 none">After you must have signed up to use our platform, click on the verify button to submit the verification details.</p>
            </div>
            <div class="bg-indigo-200 py-5 mb-14 px-6">
                <div class="flex justify-between items-center py-3.5">
                    <h1 class="text-xl md:text-2xl font-bold uppercase text-indigo-600">Why should I use Cryptokini.com? </h1>
                    <i class="fa fa-caret-up"></i>
                </div>
                <p class="leading-8 none">Snappy Exchange is Nigeria’s most reliable and most trusted Exchange merchant. Those words are echoed by our numerous clients, we publish their comments everyday. We deliver at a very fast pace, sometimes we are tempted to say its at the speed of light.</p>
            </div>
        </div>
    </main>
    @include('layout.footer')
@endsection