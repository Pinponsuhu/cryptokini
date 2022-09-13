<nav class=" px-4 md:px-9 lg:px-16 py-4 sticky top-0 bg-white shadow-sm flex justify-between items-center">
    <h1 class="font-bold text-2xl md:text-3xl">Crypto<span class="text-indigo-600">Kini</span></h1>
    <ul class="md:flex items-center md:gap-x-7 lg:gap-x-10 hidden">
        <li class="text-md lg:text-lg font-semibold hover:text-indigo-600"><a href="/">Home</a></li>
        <li class="text-md lg:text-lg font-semibold hover:text-indigo-600"><a href="#">About</a></li>
        <li class="text-md lg:text-lg font-semibold hover:text-indigo-600"><a href="/faq">FAQs</a></li>
        <li class="text-md lg:text-lg font-semibold hover:text-indigo-600"><a href="/contact">Contact Us</a></li>
        @guest
            <li class="text-md lg:text-lg font-semibold bg-indigo-600 text-white px-8 rounded-md shadow-sm py-2.5"><a href="/login">Get Started</a></li>
        @endguest
        @auth
            <li class="text-md lg:text-lg font-semibold bg-indigo-600 text-white px-8 rounded-md shadow-sm py-2.5"><a href="/dashboard">Dashboard</a></li>
        @endauth
    </ul>
    <i class="fa fa-bars md:hidden text-3xl"></i>
</nav>
<div class="fixed md:hidden bg-indigo-900 overflow-hidden p-0 top-0 left-0 w-0 h-0">
    <div class="flex justify-end">
        <i class="fa fa-window-close text-2xl text-white"></i>
    </div>
    <ul class="flex flex-col gap-y-7 mt-16 text-white items-center gap-x-10">
        <li class="text-lg font-semibold hover:text-indigo-300"><a href="/">Home</a></li>
        <li class="text-lg font-semibold hover:text-indigo-300"><a href="#">About</a></li>
        <li class="text-lg font-semibold hover:text-indigo-300"><a href="/faq">FAQs</a></li>
        <li class="text-lg font-semibold hover:text-indigo-300"><a href="/contact">Contact Us</a></li>
        @guest
            <li class="text-lg font-semibold bg-indigo-500 text-white px-8 rounded-md shadow-sm py-2.5"><a href="/login">Get Started</a></li>
        @endguest
        @auth
            <li class="text-lg font-semibold bg-indigo-500 text-white px-8 rounded-md shadow-sm py-2.5"><a href="/dashboard">Dashboard</a></li>
        @endauth
    </ul>
</div>
