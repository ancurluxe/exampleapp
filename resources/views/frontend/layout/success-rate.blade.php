@extends('layouts.app')

@section('content')
    <!--  banner -->
    <section class="mt-16 md:mt-0">

        <div class="bg-gradient-to-r from-[#f5f5ff] to-[#f5f5ff] p-44 relative overflow-hidden ">
            <h1 class="text-4xl font-bold"></h1>
            <p class="mt-4 text-xl"></p>

            <div class="gradient-1 hidden sm:block size-44 rounded-full absolute -bottom-24 left-20 overflow-hidden hover:">
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
                    <i class="ri-arrow-right-s-line"></i><a href="/Success ">Success</a>
                </a>
            </p>
        </div>
    </section>

    {{-- Cards --}}
    <div class="mx-10 my-10 space-y-4 ">
        <p class="text-5xl text-center text-blue-900 py-4 ">Success Stories</p>

        <div class="flex flex-wrap gap-6 justify-center ">
            <img class="w-80 h-80 shadow-lg " src="{{ asset('frontend-unity/images/succ-1.jpg') }}" alt="">

            <img class="w-80 h-80 shadow-lg" src="{{ asset('frontend-unity/images/succ-2.jpg') }}" alt="">

            <img class="w-80 h-80 shadow-lg" src="{{ asset('frontend-unity/images/succ-3.jpg') }}" alt="">
            <img class="w-80 V shadow-lg" src="{{ asset('frontend-unity/images/succ-4.jpg') }}" alt="">

            <img class="w-80 h-80 shadow-lg" src="{{ asset('frontend-unity/images/succ-5.jpg') }}" alt="">

            <img class="w-80 h-80  shadow-lg" src="{{ asset('frontend-unity/images/succ-6.jpg') }}" alt="">

            <img class="w-80 h-80  shadow-lg" src="{{ asset('frontend-unity/images/succ-7.jpg') }}" alt="">
            <img class="w-80 h-80  shadow-lg" src="{{ asset('frontend-unity/images/succ-8.jpg') }}" alt="">
        </div>
    </div>

    {{-- Scholorship--Banner --}}
    <section class="my-12">
        <div class="bg-[#303392] p-44 relative overflow-hidden rounded-lg">

            <div
                class="absolute  text-3xl sm:left-12 left-2 space-y-6 top-3 md:top-12 xl:text-4xl  xl:space-y-4 2xl:space-y-9 ">
                <p class="font-bold text-[#f6f6f8] 2xl:text-6xl text-wrap sm:w-[500px] xl:w-[600px] 2xl:w-[1200px]">
                    Unity in Education, Strength
                    in Knowledge </p>
                <p class="text-white text-lg  2xl:text-3xl sm:w-[550px] 2xl:w-[1200px]">
                    Receive expert guidance on selecting educational institutions, securing
                    scholarships, finding accommodation, and more. </p>
                <div>
                    <button
                        class="bg-[#F51D05] text-white text-base  p-2 px-6 rounded-lg 2xl:text-2xl 2xl:p-4 2xl:px-6">Contact
                        Us</button>
                </div>
            </div>

            {{-- Button --}}

            <div>
                <img class="md:w-[600px] lg:w-[700px] xl:w-[780px] absolute right-0 sm:-bottom-14 -bottom-8"
                    src="{{ asset('frontend-flyeast/images/sch-main.png') }}" alt="">
            </div>
        </div>
    </section>
@endsection
