<div >
    {{-- Hero Start --}}
    <div class=" bg-[#141414] ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 grid grid-cols-1 md:grid-cols-2">
            <div class="flex flex-col justify-center order-2 md:order-1 items-center md:items-start py-20">
                <div class="uppercase text-[0.9rem] tracking-[1rem] text-gray-400 mb-3">NEW PRODUCT</div>
                <div class="uppercase text-[2.5rem] md:text-[3rem] text-white leading-[3rem] mb-4 text-center md:text-start">
                    XX99 Mark II Headphones
                </div>
                <p class=" text-[1rem] text-gray-400 mb-4 text-center md:text-start">Experience natural, lifelike audio and exceptional build quality made for the passionate music enthusiast.</p>
                <button class="px-8 py-2 bg-[#D87D4A] max-w-40 text-white">See Product</button>
            </div>
            <img src="{{asset('images/home/hero-image.png')}}" class="my-10 order-1 md:order-2 mx-auto"/>
        </div>
    </div>
    {{-- Hero End --}}

    {{-- Category Start --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 grid grid-cols-1 gap-5 md:grid-cols-3 mt-32 pt-10 pb-16">

        {{-- Headphone start --}}
        <div class="bg-[#f1f1f1] rounded-lg relative h-[10rem] px-3">
            <img src="{{asset('images/category/cat-headphone.png')}}" class="absolute top-0 left-1/2 -translate-x-1/2  -translate-y-1/2"/>
            <div class="mt-24 text-center">
                <strong class="block"><span class="text-[1.2rem] uppercase mb-4">Headphone</span></strong>
                <a class="text-gray-500 uppercase text-[0.8rem]">shop </a>
            </div>
        </div>
        {{-- Headphone end --}}

        {{-- Speaker Start --}}
        <div class="bg-[#f1f1f1] rounded-lg relative h-[10rem] px-3 mt-32 md:mt-0">
            <img src="{{asset('images/category/cat-speaker.png')}}" class="absolute top-0 left-1/2 -translate-x-1/2  -translate-y-1/2"/>
            <div class="mt-24 text-center">
                <strong class="block"><span class="text-[1.2rem] uppercase mb-4">Speaker</span></strong>
                <a class="text-gray-500 uppercase text-[0.8rem]">shop </a>
            </div>
        </div>
        {{-- Speaker end --}}

        {{-- Earphone start --}}
        <div class="bg-[#f1f1f1] rounded-lg relative h-[10rem] px-3 mt-32 md:mt-0">
            <img src="{{asset('images/category/cat-earphone.png')}}" class="absolute top-0 left-1/2 -translate-x-1/2  -translate-y-1/2"/>
            <div class="mt-24 text-center">
                <strong class="block"><span class="text-[1.2rem] uppercase mb-4">Earphone</span></strong>
                <a class="text-gray-500 uppercase text-[0.8rem]">shop </a>
            </div>
        </div>
        {{-- Earphone end --}}
    </div>
    {{-- Category End --}}


    {{-- Speaker Start --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 mb-10 ">
        <div class="bg-[#D87D4A] rounded-lg pt-20 pb-20 md:pb-0 overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <div class=" relative h-72 md:h-80 ">
                    <img src="{{asset('images/home/oval.png')}}"
                    class="absolute  bottom-0 -translate-x-1/2 left-[60%] hidden md:block md:left-1/2"/>

                    <img src="{{asset('images/home/zx9-speaker.png')}}"
                    class="absolute  w-full max-w-64 bottom-0 -translate-x-1/2 left-1/2 md:left-30"/>
                </div>
                <div class="flex justify-center items-center md:items-start flex-col mt-10 md:mt-0">
                    <h2 class="text-white uppercase text-[3.5rem] text-center leading-[3.5rem] font-bold md:text-start">ZX9<br/> SPEAKER</h2>
                    <p class="text-white mt-3 mb-5 text-center md:text-start">Upgrade to premium speakers that are phenomenally built to deliver truly remarkable sound.</p>
                    <button class="px-8 py-3 bg-[#4C4C4C] max-w-40 text-white">See Product</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Speaker End --}}

    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 mb-10 mt-32">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="flex flex-col justify-center order-2 md:order-1">
                <h2 class="text-[2.5rem] leading-[2.8rem] font-bold uppercase text-center md:text-start mb-8">Bringing you the <span class="text-[#D87D4A]">best</span> audio gear</h2>
                <p class="text-gray-500  text-center md:text-start">Located at the heart of New York City, Audiophile is the premier store for high end headphones, earphones, speakers, and audio accessories. We have a large showroom and luxury demonstration rooms available for you to browse and experience a wide range of our products. Stop by our store to meet some of the fantastic people who make Audiophile the best place to buy your portable audio equipment.</p>
            </div>
            <div class=" order-1 md:order-2">
                <img src="{{asset('images/home/headphone.png')}}" class="w-full"/>
            </div>
        </div>
    </div>
</div>
