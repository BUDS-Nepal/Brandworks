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
            <h1 class=" text-3xl font-light tracking-widest uppercase text-gray-300 opacity-85">CORPORATE EVENTS AND
                CELEBRATIONS
            </h1>
        </div>
    </div>

    
    {{-- Page 18 --}}

    <div class="title-text text-yellow-500  relative mt-20 mb-10 text-start h-full font-extralight  text-3xl">
        Shivam Kriti Samaroha
    </div>
    <div
        class="w-full overflow-hidden flex flex-row items-start justify-start leading-[normal] tracking-[normal] pb-10 {{ $className ?? '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-[3.5px] pb-[0.7px] pr-[5px] pl-0 box-border relative gap-[43.2px] max-w-full shrink-0 text-left text-[20.1px] text-silver font-inter mq675:gap-[22px]">
            <div class="self-stretch flex flex-col justify-start relative max-w-full">
                <div
                    class="h-[372.4px] flex-1 flex flex-col items-end justify-start pt-0 px-0 pb-[10px] box-border gap-[13.7px] max-w-full mq675:h-auto mq675:pb-[79px] mq675:box-border">
                    <div class="self-stretch flex flex-row items-start justify-end max-w-full shrink-0">

                        <div
                            class="w-[781.3px] flex flex-row items-end justify-center py-0 pr-0 pl-5 box-border gap-[5.3px] shrink-0 max-w-full mq675:flex-wrap md:pr-72">
                            <img class="h-[345.4px] flex-1 relative max-w-full overflow-hidden object-cover min-w-[800px] z-[1] mq450:min-w-full"
                                loading="lazy" alt="" src="eventAsset/image76.jpeg">
                            <div
                                class="h-[345.4px] w-[216px] flex flex-col items-start justify-start gap-[6.6px] min-w-[516px] mq675:flex-1">
                                <img class="self-stretch h-1/2 relative max-w-full overflow-hidden shrink-0 object-cover z-[1]"
                                    loading="lazy" alt="" src="eventAsset/image83.jpeg">
                                <img class="self-stretch h-1/2 flex-1 relative max-w-full overflow-hidden max-h-full object-cover z-[1]"
                                    loading="lazy" alt="" src="eventAsset/image82.jpeg">
                            </div>
                        </div>
                    </div>

                </div>
                <div
                    class="w-full flex flex-row items-stretch justify-start py-0 pl-0 box-border gap-[8.2px] shrink-0 max-w-full mt-10 ">
                    <div class="flex flex-row w-1/2 items-stretch justify-start gap-[8.2px]">
                        <img class="w-full max-h-[200px] object-cover" loading="lazy" alt=""
                            src="eventAsset/image77.jpeg">
                        <img class="w-full max-h-[200px] object-cover" loading="lazy" alt=""
                            src="eventAsset/image78.jpeg">
                        <img class="w-full max-h-[200px] object-cover" loading="lazy" alt=""
                            src="eventAsset/image79.jpeg">
                    </div>
                    <div class="flex flex-row w-1/2 items-stretch justify-start gap-[8.2px] ">
                        <img class="w-full max-h-[200px] object-cover ml-4" loading="lazy" alt=""
                            src="eventAsset/image80.jpeg">
                        <img class="w-full max-h-[200px] object-cover" loading="lazy" alt=""
                            src="eventAsset/image81.jpeg">
                    </div>
                </div>
            </div>
    </div>
    </section>
</div>

{{-- Page 19 --}}

<div
    class="w-full overflow-hidden flex flex-row items-start justify-start leading-[normal] tracking-[normal]  {{ $className ?? '' }}">
    <section
        class="bg-black flex-1 flex flex-col items-start justify-start pt-0 px-0 pb-[13.3px] box-border relative gap-[19.5px] max-w-full text-left text-[18px] text-gold font-inter">
        <div
            class="title-text text-yellow-500  relative top-20 left-16 mt-20 mb-10 text-start h-full font-extralight  text-3xl">
            Honda 50 Years Celebration
        </div>
        <div
            class="bg-black self-stretch flex flex-row items-start justify-end py-0 px-[47px] box-border max-w-full mq900:pl-[23px] mq900:pr-[23px] mq900:box-border">
            <div
                class="w-[795.9px] flex flex-row flex-wrap items-start justify-start gap-[174.1px] max-w-full mq450:gap-[44px] mq900:gap-[87px]">
                <div class="flex-1 flex flex-col items-start justify-start gap-[5.6px] min-w-[288px] max-w-full">
                    <img class="self-stretch h-64 relative max-w-full overflow-hidden shrink-0 object-cover z-[1]"
                        loading="lazy" alt="" src="eventAsset/image84.jpeg">
                    <img class="self-stretch h-64 relative max-w-full overflow-hidden shrink-0 object-cover z-[1]"
                        loading="lazy" alt="" src="eventAsset/image85.jpeg">
                    <div class="flex flex-row items-start justify-start gap-[45.9px] mq450:gap-[23px] mq700:flex-wrap">
                        <img class="self-stretch h-full w-[30%] relative max-h-full object-cover z-[1]" loading="lazy"
                            alt="" src="eventAsset/image87.jpeg">
                        <img class="self-stretch w-[30%]  h-full relative max-h-full object-cover z-[1]" loading="lazy"
                            alt="" src="eventAsset/image88.jpeg">
                        <img class="md:h-[160px] w-[30%] relative object-cover z-[1]" loading="lazy" alt=""
                            src="eventAsset/image86.jpeg">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


{{-- Page 20 --}}
<div class="w-full overflow-hidden flex flex-row items-start justify-start leading-[normal] tracking-[normal] {{ $className ?? '' }}">
    <section class="bg-black flex-1 flex flex-col items-start justify-start pt-[3.5px] px-[26px] pb-[35.5px] box-border relative gap-[42.1px] max-w-full text-left text-[20.1px] text-silver font-inter mqp700:gap-[21px]">
        <div class="self-stretch flex flex-row items-start justify-start py-0 pr-[22px] pl-[19px] box-border max-w-full text-[18px] text-gold">
            <div class="flex-1 flex flex-col items-end justify-start gap-[8.4px] max-w-full">
                <div class="self-stretch flex flex-row items-end justify-start gap-[7.1px] max-w-full mp900:flex-wrap">
                    <div class="flex-1  flex flex-col items-start justify-end pt-0 px-0 pb-[8.4px] box-border w-1/2">
                        <div class="self-stretch flex flex-col items-start justify-start gap-[33.1px] max-w-full mp450:gap-[17px]">
                            <div class="self-stretch flex flex-row items-start justify-start py-0 pr-0 pl-0.5 box-border max-w-full">
                                <div class="flex-1 flex flex-row items-start justify-start max-w-full gap-2 mq450:flex-wrap">
                                    <div class="flex flex-col items-start justify-start pt-0.5 px-0 pb-0 box-border min-w-1/6">
                                        <img class="self-stretch h-64 relative max-w-full overflow-hidden w-full shrink-0 object-cover z-[1]" loading="lazy" alt="" src="eventAsset/image91.jpeg">
                                    </div>
                                    <img class="h-64 relative max-w-full overflow-hidden object-cover min-w-1/2 left-0 z-[1]" loading="lazy" alt="" src="eventAsset/image94.jpeg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="w-[45%] relative max-h-full object-cover max-w-full z-[1] mp900:flex-1" loading="lazy" alt="" src="eventAsset/image89.jpeg">
                </div>
                <div class="self-stretch flex flex-row items-end justify-start gap-[55px] max-w-full mp450:gap-[36px] mp900:flex-wrap p-4 -mx-3">
                    <img class="self-stretch relative max-h-full object-cover h-72 min-h-52 z-[1]" loading="lazy" alt="" src="eventAsset/image90.jpeg">
                    <img class="self-stretch relative max-h-full object-cover h-72 max-w-full z-[1] -mx-3" loading="lazy" alt="" src="eventAsset/image92.jpeg">
                    <img class="self-stretch relative max-h-full object-cover h-72 z-[1]" loading="lazy" alt="" src="eventAsset/image93.jpeg">
                </div>
            </div>
        </div>
    </section>
</div>


{{-- Page 21 --}}
<div class="w-full overflow-hidden flex flex-row items-center justify-center leading-[normal] tracking-[normal] {{ $className ?? '' }}">
    <header class="bg-black flex flex-col items-start justify-start pt-[122.8px] px-[45px] pb-[22.9px] box-border relative gap-[107.5px] max-w-full text-left text-lg text-gold font-inter mq450:gap-[54px] mq450:pt-20 mq450:px-[22px] mq450:pb-5 mq450:box-border">
        <div class="flex flex-col items-start justify-start gap-[26.8px]">
            <a class="[text-decoration:none] relative text-[inherit] whitespace-nowrap z-[1]">EO Everest Summit</a>
            <div class="flex flex-row items-start justify-start relative">
                <div class="absolute !m-[0] top-[-19.4px] left-[0px] whitespace-nowrap z-[1]">EO Nepal's signature event</div>
                <div class="relative whitespace-nowrap z-[2]">exclusively for EO members</div>
            </div>
        </div>
        <div class="flex flex-row items-center w-full justify-center gap-[51.1px] ml-36 max-w-full mq450:gap-[26px] scale-[1.2]">
            <img class="h-full w-[25%] relative object-cover min-h-[216px] z-[1]" loading="lazy" alt="" src="eventAsset/image95.png" />
            <img class="self-stretch w-[25%] relative max-h-full object-contain max-w-full z-[2]" alt="" src="eventAsset/image98.png" />
            <div class="flex flex-row items-start justify-start relative w-6/12">
                <img class="h-full w-full absolute !m-[0] top-[-216.2px] left-[-238.7px] object-cover z-[1]" alt="" src="eventAsset/image96.png" />
                <img class="h-full w-[58%] relative object-cover z-[2]" loading="lazy" alt="" src="eventAsset/image97.png" />
            </div>
        </div>
        {{-- <img class="w-[43.2px] h-[43.2px] absolute !m-[0] top-[3.5px] left-[26.8px] object-cover z-[1]" loading="lazy" alt="" src="eventAsset/image96.png" /> --}}
    </header>
</div>

</div>
