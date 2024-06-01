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
            <h1 class=" text-3xl font-light tracking-widest uppercase text-gray-300 opacity-85">LAUNCHES AND INTRODUCTION
            </h1>
        </div>
    </div>

    {{--  32 page start form here --}}

    <div
        class="w-full overflow-hidden flex flex-row items-start justify-start leading-[normal] tracking-[normal] {{ $className = $className ?? '' }}">
        <header
            class="h-[540px] flex-1 flex flex-col items-start justify-start pt-[3.5px] pb-[14.5px] pr-[13px] pl-[26px] box-border relative gap-[76.1px] max-w-full text-left text-lg text-gold font-inter mq480:gap-[38px]">
            <img class="w-full h-full absolute !m-[0] top-[0px] right-[0px] bottom-[0px] left-[0px] max-w-full overflow-hidden max-h-full"
                alt="" src="" />
            <img class="w-[43.2px] h-[43.2px] relative object-cover z-[1]" loading="lazy" alt=""
                src="" />
            <div
                class="self-stretch flex-1 flex flex-row items-start justify-start py-0 pr-px pl-[19px] box-border max-w-full">
                <div class="self-stretch flex-1 flex flex-row items-start justify-start gap-[9.1px] max-w-full">
                    <div
                        class="w-[387.6px] flex flex-col items-start justify-start gap-[76.4px] max-w-full mq388:gap-[38px]">
                        <div class="flex flex-col items-start justify-start py-0 pr-5 pl-0 gap-[7.4px]">
                            <div
                                class="relative whitespace-nowrap z-[1]             title-text text-yellow-500  text-start h-full font-extralight  text-3xl">

                                Launch of ACE EV
                            </div>
                            <div class="flex flex-col items-start justify-start">
                                <div class="flex flex-row items-start justify-start gap-[3.9px]">
                                    <div
                                        class="relative whitespace-nowrap z-[1]             title-text text-yellow-500  text-start h-full font-extralight  text-3xl">

                                        1st Commercial EV from Tata Motors in Nepal </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="self-stretch flex flex-row items-start justify-start py-0 pr-0 pl-[3px] box-border max-w-full">
                            <img class="h-[216.1px] flex-1 relative max-w-full overflow-hidden object-cover z-[1]"
                                loading="lazy" alt="" src="eventAsset/image133.jpeg" />
                        </div>
                    </div>
                    <div
                        class="self-stretch flex-1 flex flex-col items-start justify-start pt-[4.6px] px-0 pb-0 box-border max-w-full">
                        <div class="self-stretch flex-1 flex flex-col items-start justify-start gap-[6.1px] max-w-full">
                            <img class="self-stretch flex-1 relative max-w-full overflow-hidden max-h-full object-cover z-[1]"
                                loading="lazy" alt="" src="eventAsset/image132.jpeg" />
                            <div
                                class="w-[422px] flex flex-row items-start justify-start py-0 px-[39px] box-border max-w-full">
                                <img class="h-[147.4px] flex-1 relative max-w-full overflow-hidden object-cover z-[1]"
                                    loading="lazy" alt="" src="eventAsset/image134.jpeg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>


    {{-- 33 page start from here  --}}
    <div
        class="w-full overflow-hidden flex flex-row items-start justify-start leading-[normal] tracking-[normal] {{ $className = $className ?? '' }}">
        <section
            class="h-[540px] flex-1 flex flex-col items-start justify-start pt-[122.8px] px-[45px] pb-[123px] box-border relative max-w-full text-left text-lg text-gold font-inter mq373:pl-5 mq373:pr-5 mq373:box-border">

            <div class="flex flex-col items-start justify-start gap-[7.4px]">
                <div
                    class="relative left-4 whitespace-nowrap z-[1]  title-text text-yellow-500  text-start h-full font-extralight  text-2xl">
                    Launch of MG4 EV
                    <br>
                    1st EV to be launched and <br> driven at MX Track 5085ft above sea level
                </div>

                <div class="flex flex-col items-start justify-start">

                    <div class="flex flex-row items-end justify-end relative">
                        <div class="h-[365.6px] w-[863.3px] absolute !m-[0] left-[400.8px] bottom-[-296.8px]">
                            <img class="absolute bottom-[190px] left-[250.3px] w-[702.9px] h-[200.1px] object-cover z-[1]"
                                loading="lazy" alt="" src="eventAsset/image135.jpeg" />
                            <img class="absolute top-[143.9px] left-[-100px] w-[362.4px] h-[217.1px] object-cover z-[2]"
                                alt="" src="eventAsset/image136.jpeg" />
                            <img class="absolute top-[198.6px] left-[626.8px] w-[300.5px] h-[161px] object-cover z-[1]"
                                loading="lazy" alt="" src="eventAsset/image137.jpeg" />
                            <img class="absolute top-[198.6px] left-[283.1px] w-[315.6px] h-[161.8px] object-cover z-[1]"
                                loading="lazy" alt="" src="eventAsset/image138.jpeg" />
                        </div>
                    </div>

                </div>
            </div>

        </section>
    </div>


    {{-- 34 page start from here --}}
    <div
        class="w-full overflow-hidden flex flex-row items-start justify-start leading-[normal] tracking-[normal] {{ $className ? $className : '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-[3.5px] pb-[16.9px] pr-2.5 pl-[26px] box-border relative gap-[47.2px] max-w-full text-left text-[20.1px] text-silver font-inter mq675:gap-[24px]">
            <div class="self-stretch flex flex-row items-start justify-start py-0 pr-px pl-5 box-border max-w-full">


                <div
                    class="flex-1 flex flex-col items-end justify-start py-0 pr-px pl-0 box-border gap-[8.8px] max-w-full">
                    <div
                        class=" whitespace-nowrap z-[1]  title-text text-yellow-500 relative right-[69rem] my-2 mt-16 h-full font-extralight text-2xl">

                        Launch of Aprilia SXR160
                    </div>
                    <div
                        class="self-stretch flex flex-row items-end justify-start gap-[2.8px] max-w-full mq750:flex-wrap">


                        <img class="w-[395.4px] relative max-h-full object-cover max-w-full z-[1] mq750:flex-1"
                            loading="lazy" alt="" src="eventAsset/image143.jpeg" />
                        <img class="h-[307px] flex-1 relative max-w-full overflow-hidden object-cover min-w-[328px] z-[1]"
                            loading="lazy" alt="" src="eventAsset/image139.jpeg" />
                    </div>
                    <div class="self-stretch flex flex-row flex-wrap items-end justify-start gap-[21.6px] max-w-full">
                        <div
                            class="h-[180px] w-[135.7px] flex flex-col items-start justify-start py-0 pr-[15px] pl-0 box-border">
                            <img class="self-stretch flex-1 relative max-w-full overflow-hidden max-h-full object-cover z-[1]"
                                loading="lazy" alt="" src="eventAsset/image142.jpeg" />
                        </div>
                        <img class="h-[180px] w-[269.9px] relative object-cover min-h-[180px] z-[1]" loading="lazy"
                            alt="" src="eventAsset/image140.jpeg" />
                        <img class="h-[180px] flex-1 relative max-w-full overflow-hidden object-cover min-w-[291px] min-h-[180px] z-[1]"
                            loading="lazy" alt="" src="eventAsset/image141.jpeg" />
                    </div>
                </div>
            </div>
        </section>
    </div>




</div>
