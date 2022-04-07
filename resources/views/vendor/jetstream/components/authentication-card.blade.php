<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 dark:bg-gray-800" style="background-image: url('./images/header.png');">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-900 shadow-2xl overflow-hidden sm:rounded-lg  dark:text-gray-200">
        {{ $slot }}
    </div>
</div>
