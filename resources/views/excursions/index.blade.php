@extends('layouts.main')

@section('content')
<div class="mx-auto my-10 space-x-7 flex flex-wrap items-center justify-center">
    <a class="text-xl leading-tight border-b-4 border-amber-400 dark:border-amber-600 text-gray-900 dark:text-white font-semibold transition duration-150 ease-in-out"
        href="#">Все</a>
    <a class="text-xl leading-tight border-b-4 border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 font-semibold transition duration-150 ease-in-out"
        href="#">Индивидуальные</a>
    <a class="text-xl leading-tight border-b-4 border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 font-semibold transition duration-150 ease-in-out"
        href="#">Групповые</a>
</div>
@endsection
