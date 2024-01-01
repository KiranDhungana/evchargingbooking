<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</head>
<body>
   
<div class="parking_details">
    <div class="parking_area_images">
        

        <div id="controls-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="data:image/jpeg;base64,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" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="https://webbox.imgix.net/images/fkasnjcmlhnbwpkv/ac1975e4-f8ee-4b5c-b76d-321325562de3.jpg?auto=format,compress&fit=crop&crop=entropy" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </div>

    <div class="area_info">
        

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
        <div class="flex flex-col justify-center">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Parking in Khaireni</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
           

            <div class="parking_paramaters">
                    <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-blue-600 rounded-full me-1.5 flex-shrink-0"></span>Space
                        <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500">123 Sq.m</kbd>
                </span>
            <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-purple-500 rounded-full me-1.5 flex-shrink-0"></span>Short Term
        
            <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500">Yes</kbd>
        </span>
            <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-indigo-500 rounded-full me-1.5 flex-shrink-0"></span>Municipality
            <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500">Kathmandu</kbd></span>

            <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-teal-500 rounded-full me-1.5 flex-shrink-0"></span>Street
            <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500">Sankhamul</kbd>
        </span>
            <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-teal-500 rounded-full me-1.5 flex-shrink-0"></span>From
            <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500">2023/02/20</kbd>
        </span>
            <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-teal-500 rounded-full me-1.5 flex-shrink-0"></span>To
            <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500">2023/03/05</kbd>
        </span>
            </div>
            <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0">
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Book Area
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.3035415383183!2d85.33019177536796!3d27.677011776200008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19c18b827885%3A0x4207ecf181978d2e!2sHimalaya%20College%20of%20Engineering!5e0!3m2!1sen!2snp!4v1704111740362!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

    </div>
</div>


    
</body>
</html>