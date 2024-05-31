@php
    $sizes = ['w-1/2', 'w-1/3', 'w-2/3', 'w-full'];
    $positions = ['ml-auto', 'mr-auto', 'mx-auto'];
@endphp

    <!-- Logo and Center Content -->
    <div class=" bg-black w-full">

        <div class="px-10 flex flex-col sticky top-0 z-50 bg-black py-4 w-full">
            <div class="flex flex-row items-center justify-start">
                <a class="text-2xl font-bold flex justify-start grayscale opacity-45" href={{ route('home') }}>
                    <x-application-logo
                        class="block h-9 w-auto fill-current text-gray-600 text-start mt-2 filter grayscale" /> </a>
            </div>
            <div class="title flex items-center justify-center">
                <h1 class=" text-3xl font-light tracking-widest uppercase text-gray-300 opacity-85">Inauguration and
                    Celebrations
                </h1>
            </div>
        </div>

        {{--  image section start from here --}}
        <div class="px-10 image-title-section flex flex-row gap-20 mt-6">

            <div class="title-text text-yellow-500 mt-2 w-72 text-start justify-start font-extralight  text-3xl">
                Butwal Power Company <div class="mt-3">
                    Inauguration of Nyadi Hydropower Project
                </div>
            </div>


            <div class="image-section grid grid-cols-2 gap-2 text-center items-start">
                <div class="flex flex-row justify-center items-center">
                    <img src="eventAsset/wall.png" alt=""
                        class="h-[16rem]relative  w-[28rem] object-cover shadow-lg">
                </div>
                <div class="flex flex-row justify-center items-center">
                    <img src="eventAsset/wall.png" alt=""
                        class="h-[18rem] relative left-4 w-[28rem] object-cover shadow-lg">
                </div>
                <div class="flex flex-row justify-center items-center">
                    <img src="eventAsset/wall.png" alt=""
                        class="h-[16rem] relative right-14 bottom-6 w-[28rem] object-cover shadow-lg">
                </div>
                <div class="flex flex-row justify-center items-center">
                    <img src="eventAsset/wall.png" alt=""
                        class="h-[16rem] relative right-6 top-4 w-[28rem] object-cover shadow-lg">
                </div>
            </div>
        </div>

        {{--  2nd section end here --}}
        <div class="px-10 image-title-section flex flex-row gap-20 mt-6 py-32">

            <div class="image-section grid grid-cols-4 grid-rows-3 gap-2 text-center items-start">
                <div class="col-span-2 row-span-1 items-center">
                    <div class="title-text text-yellow-500 mt-2 text-start justify-start font-extralight  text-3xl">
                        Inauguration of Tata Motors
                        exclusive car showroom with
                        the 2 new product launches
                    </div>
                </div>
                <div class="col-span-2 row-span-2 items-center">
                    <img src="eventAsset/ripab.jpeg" alt="" class=" relative left-4  object-cover shadow-lg">
                </div>
                <div class="col-span-1 row-span-2 items-center">
                    <img src="eventAsset/wall.png" alt=""
                        class=" relative right-14 bottom-6  object-cover shadow-lg">
                </div>
                <div class="col-span-1 row-span-2 items-center">
                    <img src="eventAsset/wall.png" alt=""
                        class=" relative right-14 bottom-6  object-contain shadow-lg">
                </div>
                <div class="col-span-1 row-span-1 items-center">
                    <img src="eventAsset/wall.png" alt=""
                        class=" relative right-6 top-4 object-cover shadow-lg">
                </div>
                <div class="col-span-1 row-span-1 items-center">
                    <img src="eventAsset/wall.png" alt=""
                        class=" relative right-6 top-4 object-cover shadow-lg">
                </div>
            </div>

        </div>


