<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why BrandWorks</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
</head>

<body class="bg-gray-900 text-white flex justify-center items-center min-h-screen " >
    <div class="absolute inset-0 bg-black opacity-50 "></div
    <div class="container mx-auto px-4">
        <h1 class="text-6xl font-bold text-center text-gray-300">Why Brandworks?</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8  lg:my-10">
            <div class="text-center">
                <p class="text-8xl font-bold text-blue-500"><span class="number"
                        data-target="{{ trans('texts.years_of_experience') }}">0</span><span
                        class="text-3xl">+</span></p>
                <p class="text-xl mt-2 text-gray-100">Collective experience</p></span>
            </div>
            <div class="text-center">
                <p class="text-8xl font-bold text-blue-500"><span class="number"
                        data-target="{{ trans('texts.project_count') }}">0</span><span
                        class="text-3xl">+</span></p>
                <p class="text-xl mt-2 text-gray-100">Projects</p>
            </div>
            <div class="text-center">
                <p class="text-8xl font-bold text-blue-500"><span class="number"
                        data-target="{{ trans('texts.client_count') }}">0</span><span
                        class="text-3xl">+</span></p>
                <p class="text-xl mt-2 text-gray-100">Clients</p>
            </div>
            <div class="text-center">
                <p class="text-8xl font-bold text-blue-500"><span class="number" data-target="11">0</span><span
                        class="text-3xl">+</span></p>
                <p class="text-xl mt-2 text-gray-100">{{ trans('texts.seasoned_professionals') }}</p>
            </div>
            <div class="text-center">
                <p class="text-8xl font-bold text-blue-500"><span class="number" data-target="11">0</span><span
                        class="text-3xl">+</span></p>
                <p class="text-xl mt-2 text-gray-100">{{ trans('texts.seasoned_professionals') }}</p>
            </div>
            <div class="text-center">
                <p class="text-8xl font-bold text-blue-500"><span class="number" data-target="11">0</span><span
                        class="text-3xl">+</span></p>
                <p class="text-xl mt-2 text-gray-100">{{ trans('texts.seasoned_professionals') }}</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const numbers = document.querySelectorAll('.number');
            numbers.forEach(num => {
                const target = parseFloat(num.getAttribute('data-target'));
                anime({
                    targets: num,
                    innerHTML: [0, target],
                    round: 1,
                    easing: 'easeInOutExpo',
                    duration: 2000
                });
            });
        });
    </script>
</body>

</html>
