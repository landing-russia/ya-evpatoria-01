@extends('layouts.main')

@section('content')
<div class="mx-auto my-10 space-x-7 flex flex-wrap items-center justify-center">
    <a class="text-xl leading-tight border-b-4 border-amber-400 dark:border-amber-600 text-gray-900 dark:text-white font-semibold transition duration-150 ease-in-out"
        href="#">Кино</a>
    <a class="text-xl leading-tight border-b-4 border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 font-semibold transition duration-150 ease-in-out"
        href="#">Театр</a>
    <a class="text-xl leading-tight border-b-4 border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 font-semibold transition duration-150 ease-in-out"
        href="#">Развлечения</a>
    <a class="text-xl leading-tight border-b-4 border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 font-semibold transition duration-150 ease-in-out"
        href="#">Акции</a>
</div>
<div class="container mx-auto mb-32 px-2 sm:px-6 lg:px-8 grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
    <div class="mb-3">
        <a href="#" class="group">
            <img class="w-full h-auto object-cover group-hover:opacity-90 group-hover:shadow-xl transition duration-150 ease-in-out"
                src="/img/2669547265.jpg" alt="movie">
            <div
                class="mt-3 text-gray-700 group-hover:text-gray-900 text-xl font-bold dark:text-gray-400 dark:group-hover:text-gray-200 transition duration-150 ease-in-out">
                Небеса подождут</div>
            <div
                class="text-base font-medium  text-gray-500 group-hover:text-gray-700 dark:text-gray-500 dark:group-hover:text-gray-400 transition duration-150 ease-in-out">
                Комедия, драма</div>
        </a>
    </div>
    <div class="mb-3">
        <a href="#" class="group">
            <img class="w-full h-auto object-cover group-hover:opacity-90 group-hover:shadow-xl transition duration-150 ease-in-out"
                src="/img/2138302646.jpg" alt="movie">
            <div
                class="mt-3 text-gray-700 group-hover:text-gray-900 text-xl font-bold dark:text-gray-400 dark:group-hover:text-gray-200 transition duration-150 ease-in-out">
                День города</div>
            <div
                class="text-base font-medium  text-gray-500 group-hover:text-gray-700 dark:text-gray-500 dark:group-hover:text-gray-400 transition duration-150 ease-in-out">
                Комедия</div>
        </a>
    </div>
    <div class="mb-3">
        <a href="#" class="group">
            <img class="w-full h-auto object-cover group-hover:opacity-90 group-hover:shadow-xl transition duration-150 ease-in-out"
                src="/img/2627949992.jpg" alt="movie">
            <div
                class="mt-3 text-gray-700 group-hover:text-gray-900 text-xl font-bold dark:text-gray-400 dark:group-hover:text-gray-200 transition duration-150 ease-in-out">
                Конь Юлий и большие скачки</div>
            <div
                class="text-base font-medium text-gray-500 group-hover:text-gray-700 dark:text-gray-500 dark:group-hover:text-gray-400 transition duration-150 ease-in-out">
                Мультфильм</div>
        </a>
    </div>
    <div class="mb-3">
        <a href="#" class="group">
            <img class="w-full h-auto object-cover group-hover:opacity-90 group-hover:shadow-xl transition duration-150 ease-in-out"
                src="/img/3000966082.jpg" alt="movie">
            <div
                class="mt-3 text-gray-700 group-hover:text-gray-900 text-xl font-bold dark:text-gray-400 dark:group-hover:text-gray-200 transition duration-150 ease-in-out">
                Последний богатырь: Корень зла</div>
            <div
                class="text-base font-medium  text-gray-500 group-hover:text-gray-700 dark:text-gray-500 dark:group-hover:text-gray-400 transition duration-150 ease-in-out">
                Приключения</div>
        </a>
    </div>
    <div class="mb-3">
        <a href="#" class="group">
            <img class="w-full h-auto object-cover group-hover:opacity-90 group-hover:shadow-xl transition duration-150 ease-in-out"
                src="/img/2772623099.jpg" alt="movie">
            <div
                class="mt-3 text-gray-700 group-hover:text-gray-900 text-xl font-bold dark:text-gray-400 dark:group-hover:text-gray-200 transition duration-150 ease-in-out">
                Душа</div>
            <div
                class="text-base font-medium  text-gray-500 group-hover:text-gray-700 dark:text-gray-500 dark:group-hover:text-gray-400 transition duration-150 ease-in-out">
                Мультфильм</div>
        </a>
    </div>
    <div class="mb-3">
        <a href="#" class="group">
            <img class="w-full h-auto object-cover group-hover:opacity-90 group-hover:shadow-xl transition duration-150 ease-in-out"
                src="/img/1757750622.jpg" alt="movie">
            <div
                class="mt-3 text-gray-700 group-hover:text-gray-900 text-xl font-bold dark:text-gray-400 dark:group-hover:text-gray-200 transition duration-150 ease-in-out">
                Заклятье. Другая сторона</div>
            <div
                class="text-base font-medium  text-gray-500 group-hover:text-gray-700 dark:text-gray-500 dark:group-hover:text-gray-400 transition duration-150 ease-in-out">
                Ужасы</div>
        </a>
    </div>
    <div class="mb-3">
        <a href="#" class="group">
            <img class="w-full h-auto object-cover group-hover:opacity-90 group-hover:shadow-xl transition duration-150 ease-in-out"
                src="/img/2014372694.jpg" alt="movie">
            <div
                class="mt-3 text-gray-700 group-hover:text-gray-900 text-xl font-bold dark:text-gray-400 dark:group-hover:text-gray-200 transition duration-150 ease-in-out">
                Чудо-Женщина: 1984</div>
            <div
                class="text-base font-medium  text-gray-500 group-hover:text-gray-700 dark:text-gray-500 dark:group-hover:text-gray-400 transition duration-150 ease-in-out">
                Боевик, приключения, фэнтези</div>
        </a>
    </div>
    <div class="mb-3">
        <a href="#" class="group">
            <img class="w-full h-auto object-cover group-hover:opacity-90 group-hover:shadow-xl transition duration-150 ease-in-out"
                src="/img/1945895012.jpg" alt="movie">
            <div
                class="mt-3 text-gray-700 group-hover:text-gray-900 text-xl font-bold dark:text-gray-400 dark:group-hover:text-gray-200 transition duration-150 ease-in-out">
                Охотник на монстров</div>
            <div
                class="text-base font-medium  text-gray-500 group-hover:text-gray-700 dark:text-gray-500 dark:group-hover:text-gray-400 transition duration-150 ease-in-out">
                Фантастика</div>
        </a>
    </div>
</div>
@endsection
