@extends('layouts.app')

@section('content')
    <!-- banner -->
    <section class="mt-16 md:mt-0">

        <div class="bg-gradient-to-r from-[#f5f5ff] to-[#f5f5ff] p-44 relative overflow-hidden">
            <h1 class="text-4xl font-bold"></h1>
            <p class="mt-4 text-xl"></p>

            <div class="gradient-1 hidden sm:block size-44 rounded-full absolute -bottom-24 left-20 overflow-hidden">
            </div>

            <div class="blob size-[600px] -top-10 md:size-[700px] absolute -right-28 s_md:-top-44"></div>

            <div class="gradient-1 size-44 rounded-full absolute -top-20 right-[500px] overflow-hidden"></div>

            <img class="w-[600px] absolute right-1 2xl:-right-32 bottom-0"
                src="{{ asset('frontend-flyeast/images/young-woman-casual-wearing-pink-background.png') }}" alt="" />

            <div
                class="absolute text-center text-3xl left-12 top-1 md:top-28 xl:text-5xl 2xl:top-32 xl:space-y-7 2xl:left-[30%]">
                <p class="font-bold text-[#303392] 2xl:text-7xl">
                    Navigate Your Future
                </p>
                <p class="text-blue-900 text-xl 2xl:text-3xl">
                    Your Future Global Education
                </p>
            </div>
        </div>

        <div>
            <p class="bg-[#e9e9fd] p-3 text-blue-900">
                <a href="/home">
                    Home
                    <i class="ri-arrow-right-s-line"></i><a href="/about">About us</a>
                </a>
            </p>
        </div>
    </section>

    {{-- cards --}}
    <div class="flex justify-center flex-wrap">
        {{-- card-1 --}}
        <div class="relative hover:bg-background cursor-pointer p-5 rounded-xl">
            <img class="w-80 h-72 rounded-xl" src="{{ asset('frontend-flyeast/images/blog-1.png') }}" alt="" />
            <div class="absolute left-10 right-10 shadow-xl p-1 rounded-xl  bottom-7  bg-white px-2">
                <div class="flex justify-between">
                    <div class="flex space-x-2 text-gray-500">
                        <i class="ri-calendar-event-line"></i>
                        <p>May 20,2024</p>
                    </div>
                    <div class="text-blue-700">By Unity group</div>
                </div>

                <div class="flex justify-between py-1">
                    <p class="text-xl font-bold">Unity Nelson</p>
                    <i class="ri-arrow-right-up-line bg-blue-700 hover:bg-primary rounded-[50%] px-2 py-1 text-white"></i>
                </div>
            </div>
        </div>
        {{-- Card-2 --}}
        <div class="relative hover:bg-background cursor-pointer p-5 rounded-xl">
            <img class="w-80 h-72 rounded-xl" src="{{ asset('frontend-flyeast/images/blog-1.png') }}" alt="" />
            <div class="absolute left-10 right-10 shadow-xl p-1 rounded-xl  bottom-7  bg-white px-2">
                <div class="flex justify-between">
                    <div class="flex space-x-2 text-gray-500">
                        <i class="ri-calendar-event-line"></i>
                        <p>May 20,2024</p>
                    </div>
                    <div class="text-blue-700">By Unity group</div>
                </div>

                <div class="flex justify-between py-1">
                    <p class="text-xl font-bold">Unity Nelson</p>
                    <i class="ri-arrow-right-up-line bg-blue-700 hover:bg-primary rounded-[50%] px-2 py-1 text-white"></i>
                </div>
            </div>
        </div>
        {{-- Card-3 --}}
        <div class="relative hover:bg-background cursor-pointer p-5 rounded-xl">
            <img class="w-80 h-72 rounded-xl" src="{{ asset('frontend-flyeast/images/blog-1.png') }}" alt="" />
            <div class="absolute left-10 right-10 shadow-xl p-1 rounded-xl  bottom-7  bg-white px-2">
                <div class="flex justify-between">
                    <div class="flex space-x-2 text-gray-500">
                        <i class="ri-calendar-event-line"></i>
                        <p>May 20,2024</p>
                    </div>
                    <div class="text-blue-700">By Unity group</div>
                </div>

                <div class="flex justify-between py-1">
                    <p class="text-xl font-bold">Unity Nelson</p>
                    <i class="ri-arrow-right-up-line bg-blue-700 hover:bg-primary rounded-[50%] px-2 py-1 text-white"></i>
                </div>
            </div>
        </div>

    </div>
@endsection
