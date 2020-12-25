@extends('layouts.main')

@section('content')
<div class="mx-auto my-12 space-x-5 flex flex-wrap items-center justify-center">
    <a class="px-5 py-2 text-lg bg-amber-400 dark:bg-amber-600 text-gray-900 dark:text-white rounded-full font-semibold transition duration-150 ease-in-out"
        href="#">Все</a>
    <a class="px-5 py-2 text-lg bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-full font-semibold transition duration-150 ease-in-out"
        href="#">Индивидуальные</a>
    <a class="px-5 py-2 text-lg bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-full font-semibold transition duration-150 ease-in-out"
        href="#">Групповые</a>
</div>
@endsection
