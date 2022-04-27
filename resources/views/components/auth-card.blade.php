<div class="min-h-screen bg-cloud-gray">
    <div class="p-2">
            {{ $btnInicio }}
    </div>

    <div class="flex flex-col sm:justify-center items-center pt-3 sm:pt-0 ">
        <div>
            {{ $logo }}
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-light-gray shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</div>
