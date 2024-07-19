@extends('frontend.layout.master')

@section('contents')
    {{-- Footer --}}
{{-- <div class="font-poppins text-white footer-gradient">
    <div class="border-b-2">
        <div
            class="py-4 flex flex-col sm:flex-row justify-between text-white mx-2 md:mx-16 lg:mx-24 xl:mx-32 items-center">
            <div class="flex flex-col justify-center items-center sm:items-start mb-4 sm:mb-0">
                <p class="text-xl font-normal font-georgia">Reach Out At:</p>
            </div>
            <div class="flex flex-col justify-center items-center font-poppins mb-4 sm:mb-0">
                <p class="text-xl font-normal mb-2">Call Us At:</p>
                <p class="flex items-center"><i class="ri-phone-fill mr-2"></i> {{ $settings['site_phone'] }}</p>
            </div>
            <div class="hidden sm:block border-r h-16"></div>
            <div class="flex flex-col justify-center items-center font-poppins mb-4 sm:mb-0">
                <p class="text-xl font-normal mb-2">Mail:</p>
                <p class="flex items-center"><i class="ri-time-fill mr-2"></i> {{ $settings['site_mail'] }}</p>
            </div>
            <div class="hidden sm:block border-r h-16"></div>
            <div class="flex flex-col justify-center items-center font-poppins">
                <p class="text-xl font-normal mb-2">Opening Hour:</p>
                <p class="flex items-center"><i class="ri-time-fill mr-2"></i> {{ $settings['site_open_time'] }}</p>
            </div>
        </div>
    </div>

    <div class="px-4 md:px-9 xl:px-24 text-white pt-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2 md:gap-8">
            <div class="md:col-span-2 w-full flex flex-col items-center text-center">
                <img src="{{ asset($settings['site_footer_icon']) }}" alt="kingfisher logo"
                    class="w-24 h-24 mb-4 bg-white rounded-full">
                <p class="text-base">{{ $settings['site_footer_slogan'] ?? '' }}</p>
                <div class="pt-5">
                    <h4 class="text-xl">Connect with us:</h4>
                    <div class="flex items-center justify-center space-x-5 mt-2">
                        <i class="ri-twitter-fill text-lg"></i>
                        <i class="ri-facebook-fill text-lg"></i>
                        <i class="ri-instagram-fill text-lg"></i>
                    </div>
                </div>
            </div>

            <div>
                <h5 class="font-normal text-xl">Quick Links</h5>
                <p class="footer-border-gradient h-1 w-20 my-2"></p>
                <ul class="pt-5 space-y-3">
                    <li><a href="/home">Home</a></li>
                    <li><a href="/aboutus">About Us</a></li>
                    <li><a href="/bestcourses">Best Courses</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/scholarship">Scholarship</a></li>
                    <li><a href="/blogs">Blog</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                </ul>
            </div>

            <div>
                <h5 class="font-medium text-xl">Best Courses</h5>
                <p class="footer-border-gradient h-1 w-20 my-2"></p>
                <ul class="pt-5 space-y-2">
                    @foreach ($bestcourses as $bestcourse)
                        <a href="{{ '/bestcourses/' . $bestcourse->slug ?? '' }}">
                            <li class="py-2">{{ $bestcourse->title }}</li>
                        </a>
                    @endforeach

                </ul>
            </div>

            <div>
                <h5 class="font-medium text-xl">Services</h5>
                <p class="footer-border-gradient h-1 w-20 my-2"></p>
                <ul class="pt-5 space-y-2">
                    @foreach ($services as $service)
                        <a href="{{ '/services/' . $service->slug ?? '' }}">
                            <li class="py-2">{{ $service->title ?? '' }}</li>
                        </a>
                    @endforeach


                </ul>
            </div>
        </div>
    </div>

    <div class="border-t flex items-center justify-center py-4 mt-8">
        <p class="text-white text-center">{{ $settings['site_copyright'] ?? '' }}</p>
    </div>
</div> --}}

@endsection