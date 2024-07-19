@extends('layouts.app')

@section('content')
    <!-- navbars for mobile and desktop mobile nav is visible upto md size screen and upwards from there the desktop nav is visible both of the navs are separate entities -->
    <section class="flex justify-center">
        <nav
            class="align-middle hidden absolute z-10 bg-white mx-3 rounded-xl top-3 p-2 lg:flex px-8 2xl:px-44 gap-10 w-96 lg:w-[80%] 2xl:w-[50%]">
            <img class="xl:w-[120px] w-20 md:w-24" src="./images/logo.png" alt="" />

            <ul class="flex w-full xl:space-x-10 2xl:space-x-">
                <li class="mt-5 lg:mx-2 font-semibold">Home</li>
                <li class="mt-5 lg:mx-2 font-semibold">About Us</li>
                <li class="mt-5 lg:mx-2 font-semibold">
                    Trekking <i class="ri-arrow-drop-down-line"></i>
                </li>
                <li class="mt-5 lg:mx-2 font-semibold">
                    Activities <i class="ri-arrow-drop-down-line"></i>
                </li>
                <li class="mt-5 font-semibold">Blog</li>
                <li class="mt-5 font-semibold">Contact Us</li>
                <li class="mt-3">
                    <button class="bg-[#B42126] p-2 rounded-lg text-white">
                        Best Offers
                    </button>
                </li>
            </ul>
        </nav>
    </section>

    <!-- mobile-nav -->
    <section>
        <nav class="sidebar bg-slate-300 w-[200px] px-9 z-10 fixed hidden">
            <ul class="leading-relaxed">
                <li class="w-24"><img src="./images/logo.png" alt="" /></li>
                <li>Home</li>
                <li>About us</li>
                <li>Trekking</li>
                <li>Activities</li>
                <li>Blog</li>
                <li>Contact us</li>
            </ul>
        </nav>
        <div class="flex lg:hidden justify-between bg-white mx-3 rounded-xl top-3 p-2">
            <img class="xl:w-[120px] w-20 md:w-24" src="./images/logo.png" alt="" />
            <div class="menu lg:hidden" onclick="toggleSidebar()">
                <a class="nav-toggle hover-link" href="#">
                    <i class="ri-menu-line" id="icon"></i></a>
            </div>
        </div>
    </section>
@endsection
