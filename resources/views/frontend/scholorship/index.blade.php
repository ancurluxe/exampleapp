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
                src="{{ asset('frontend-unity/images/young-woman-casual-wearing-pink-background.png') }}" alt="" />

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
                    src="{{ asset('frontend-unity/images/sch-main.png') }}" alt="">
            </div>
        </div>
    </section>

    {{-- Scholorship--Text --}}
    <section class="bg-[#F5F5FF] px-12 my-12 py-8 space-y-4">

        <p class=" text-[#505050] text-xl">An overview of the common types of scholarships</p>

        <div>
            <li class="text-[#505050]">Government-Funded Scholarships </li>
            <p class="text-[#6E6B6B] px-5">Funded by the UK government, these scholarships are awarded to outstanding
                students from around the
                world to pursue a one-year master’s degree
                in any subject at any UK university.</p>
        </div>

        <div>
            <li class="text-[#505050]">Government-Funded Scholarships </li>
            <p class="text-[#6E6B6B] px-5">Funded by the UK government, these scholarships are awarded to outstanding
                students from around the
                world to pursue a one-year master’s degree
                in any subject at any UK university.</p>
        </div>

        <div>
            <li class="text-[#505050]">Government-Funded Scholarships </li>
            <p class="text-[#6E6B6B] px-5">Funded by the UK government, these scholarships are awarded to outstanding
                students from around the
                world to pursue a one-year master’s degree
                in any subject at any UK university.</p>
        </div>

        <div>
            <li class="text-[#505050]">Government-Funded Scholarships </li>
            <p class="text-[#6E6B6B] px-5">Funded by the UK government, these scholarships are awarded to outstanding
                students from around the
                world to pursue a one-year master’s degree
                in any subject at any UK university.</p>
        </div>

        <div>
            <li class="text-[#505050]">Government-Funded Scholarships </li>
            <p class="text-[#6E6B6B] px-5">Funded by the UK government, these scholarships are awarded to outstanding
                students from around the
                world to pursue a one-year master’s degree
                in any subject at any UK university.</p>
        </div>
    </section>

    {{-- Scholarship  --}}
    <section class="mx-10 my-10 lg:flex  gap-28 space-y-4 lg:space-y-0">
        <div class="relative ">
            {{-- main-img --}}
            <img class="sm:w-[500px] sm:h-[380px] rounded-br-[80px] rounded-tl-[80px]  "
                src="{{ asset('frontend-unity/images/sch-1.png') }}" alt="">

            {{-- Outlines --}}
            <div
                class="outline outline-4 outline-blue-900 sm:w-[500px] sm:h-[360px] w-[340px] h-[210px] xl:w-[500px] lg:w-[340px] rounded-br-[80px] rounded-tl-[80px]  absolute sm:-top-4 sm:left-6 left-7 -top-4 ">
            </div>

            <div class="outline w-20 outline-white bottom-8 absolute"> </div>

            <div class="outline w-0 h-20 outline-white  bottom-0 left-5 absolute "> </div>

            {{-- overlapping img --}}
            <img class="w-[200px] rounded-br-[80px] rounded-tl-[80px] absolute top-8 left-96 outline outline-white hidden sm:block lg:left-[240px] xl:left-96"
                src="{{ asset('frontend-unity/images/sch-2.png') }}" alt="">

            <img class="w-[200px] rounded-br-[80px] rounded-tl-[80px] absolute bottom-10 left-96 outline outline-white hidden sm:block  lg:left-[240px] xl:left-96 "
                src="{{ asset('frontend-unity/images/sch-3.png') }}" alt="">
        </div>

        {{-- Text --}}
        <div class=" md:w-[600px] text-start leading-7 space-y-4 ">
            <p class="text-xl text-[#505050] ">Expert Admission Counseling Services</p>

            <p>Unity Group of Studies boasts a team of experienced and certified counsellors
                dedicated to providing personalised career counselling for each student. We guide
                them in selecting the right course and study destination to ensure a bright future
                abroad. With longstanding reputation for excellence, we have received accolades
                from students, parents, and numerous educational providers.</p>

            <p>
                When students book a counselling session with us, we meticulously assess their
                academic profile, English proficiency, financial circumstances, study gaps,
                immigration history, and future aspirations. Based on this we recommend the most
                suitable institutions and destinations.</p>
        </div>
    </section>
@endsection
