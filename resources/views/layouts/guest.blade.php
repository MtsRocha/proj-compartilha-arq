<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Compartilhar Arquivos') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <svg width="50px" height="50px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M891.881933 421.488537c-4.233766-8.531013-12.894812-13.868527-22.399539-13.868526H702.203081V120.401747a24.943894 24.943894 0 0 0-7.291087-17.64564c-4.690419-4.687347-11.071272-7.35764-17.712192-7.35764l-327.978115 0.066553c-13.801974 0-25.00328 11.198234-25.003279 25.00328v287.152734H154.402931c-9.507799 0-18.165773 5.337514-22.399539 13.868527-4.233766 8.498248-3.256979 18.685907 2.473707 26.240133L492.082359 919.005679a25.136385 25.136385 0 0 0 19.92276 9.834419 25.013518 25.013518 0 0 0 19.925833-9.8979l357.473179-471.212504c5.73171-7.554226 6.707473-17.742909 2.477802-26.241157z" fill="#27323A" /><path d="M512.005119 810.78612l267.749085-353.158526H677.198778c-13.801974 0-25.00328-11.201305-25.00328-25.00328V173.616139c-39.132897 0.033788-238.835586 0.066553-277.970531 0.066553v258.941622c0 13.801974-11.198234 25.00328-25.00328 25.00328H244.162862l267.842257 353.158526z" fill="#79CCBF" /><path d="M204.734062 457.627594c47.860496 63.029357 274.976691 362.276225 307.272081 404.859615 32.298463-42.583391 259.284624-341.830259 307.142048-404.859615h-42.029468l-265.11258 349.708032-265.239541-349.708032h-42.03254z" fill="#F4CE73" /><path d="M374.224967 145.031308h277.970531v33.338731H374.224967z" fill="#FFFFFF" /></svg>
            </div>
            <p> <strong>Compartilhe Arquivos</strong> </p>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
