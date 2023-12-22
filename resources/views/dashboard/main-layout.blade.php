<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">
    <link rel="canonical" href="{{ $page->getUrl() }}">

    <meta name="description" content="{{ $page->description }}">

    <title>{{ $page->title }}</title>

{{--    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">--}}

{{--    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>--}}

    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- font Awesome icons -->
    <script src="https://kit.fontawesome.com/d09f9a669c.js" crossorigin="anonymous"></script>

    <!-- alpine js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

</head>
<body>
<div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">
    @include('dashboard._sidebar')

    <div class="flex-1 flex flex-col overflow-hidden">
        @include('dashboard._header')

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">

                @yield('body')

            </div>
        </main>
    </div>
</div>
</body>
</html>
