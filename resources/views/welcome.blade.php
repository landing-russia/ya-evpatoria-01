<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="antialiased bg-gray-100 dark:bg-gray-800 font-sans">
    <nav x-data="{ open: false, dark: localStorage.theme === 'dark', htmlClasses: document.querySelector('html').classList  }"
        class="bg-white dark:bg-gray-900 shadow">
        <div class="max-w-full mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex justify-between h-16 lg:h-18">
                <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                    <button @click="open = !open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-600 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-600 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center md:items-stretch md:justify-start">
                    <div class="flex-shrink-0 flex items-center">
                        <img x-show="dark" class="block lg:hidden h-10 w-auto" src="/img/Я-Евпатория!-dark.svg"
                            alt="Я-Евпатория!" />
                        <img x-show="!dark" class="block lg:hidden h-10 w-auto" src="/img/Я-Евпатория!.svg"
                            alt="Я-Евпатория!" />
                        <img x-show="dark" class="hidden lg:block h-12 w-auto" src="/img/Я-Евпатория!-dark.svg"
                            alt="Я-Евпатория!" />
                        <img x-show="!dark" class="hidden lg:block h-12 w-auto" src="/img/Я-Евпатория!.svg"
                            alt="Я-Евпатория!" />
                    </div>
                    <div class="hidden md:ml-6 md:flex md:items-center lg:ml-12">
                        <a href="#"
                            class="ml-3 block rounded-full font-semibold text-gray-900 bg-amber-400 dark:bg-amber-600  dark:text-white text-sm px-3 py-1 lg:text-base lg:px-4 lg:py-2 transition duration-150 ease-in-out">
                            Афиша
                        </a>
                        <a href="#"
                            class="ml-3 block rounded-full font-semibold text-gray-500 dark:text-gray-500 hover:bg-gray-100 dark:hover:text-gray-300 hover:text-gray-900 dark:hover:bg-gray-800 text-sm px-3 py-1 lg:text-base lg:px-4 lg:py-2 transition duration-150 ease-in-out">
                            Экскурсии
                        </a>
                        <a href="#"
                            class="ml-3 block rounded-full font-semibold text-gray-500 dark:text-gray-500 hover:bg-gray-100 dark:hover:text-gray-300 hover:text-gray-900 dark:hover:bg-gray-800 text-sm px-3 py-1 lg:text-base lg:px-4 lg:py-2 transition duration-150 ease-in-out">
                            Проживание
                        </a>
                        <a href="#"
                            class="ml-3 block rounded-full font-semibold text-gray-500 dark:text-gray-500 hover:bg-gray-100 dark:hover:text-gray-300 hover:text-gray-900 dark:hover:bg-gray-800 text-sm px-3 py-1 lg:text-base lg:px-4 lg:py-2 transition duration-150 ease-in-out">
                            Питание
                        </a>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 md:static md:inset-auto md:ml-6 md:pr-0">
                    <button @click="{
                    if(localStorage.theme == 'dark') {
                        dark = false;
                        htmlClasses.remove('dark');
                        localStorage.removeItem('theme');
                    } else {
                        dark = true;
                        htmlClasses.add('dark');
                        localStorage.theme = 'dark';
                    }}" title="Тема"
                        class="hidden sm:block mr-2 p-1 border-2 border-transparent text-amber-500 dark:text-gray-700 rounded-full hover:text-amber-600 dark:hover:text-gray-500 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out">
                        <template x-if="!dark">
                            <svg class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </template>
                        <template x-if="dark">
                            <svg class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                            </svg>
                        </template>
                    </button>
                    <button title="Избранное"
                        class="hidden sm:block p-1 border-2 border-transparent text-gray-400 dark:text-gray-700 rounded-full hover:text-gray-500 dark:hover:text-gray-500 focus:outline-none focus:text-gray-500 focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                    <div @click.away="open = false" class="ml-3 relative" x-data="{ open: false }">
                        <div>
                            <button @click="open = !open"
                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                <img class="h-8 w-8 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="" />
                            </button>
                        </div>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                            <div
                                class="py-1 rounded-md bg-white dark:bg-gray-800 border border-gray-200  dark:border-gray-700 shadow-xs">
                                <a href="#"
                                    class="block px-4 py-2 text-sm font-medium leading-5 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Профиль</a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm font-medium leading-5 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Выйти</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div :class="{'block': open, 'hidden': !open}" class="hidden md:hidden">
            <div class="pt-2 pb-4">
                <a href="#"
                    class="block pl-3 pr-4 py-2 border-l-4 border-indigo-500 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out">Афиша</a>
                <a href="#"
                    class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">Экскурсии</a>
                <a href="#"
                    class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">Проживание</a>
                <a href="#"
                    class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">Питание</a>
            </div>
        </div>
    </nav>
    <div class="mx-auto my-12 space-x-5 flex flex-wrap items-center justify-center">
        <a class="px-5 py-2 text-lg bg-amber-400 dark:bg-amber-600 text-gray-900 dark:text-white rounded-full font-semibold transition duration-150 ease-in-out"
            href="#">Кино</a>
        <a class="px-5 py-2 text-lg bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-full font-semibold transition duration-150 ease-in-out"
            href="#">Театр</a>
        <a class="px-5 py-2 text-lg bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-full font-semibold transition duration-150 ease-in-out"
            href="#">Развлечения</a>
        <a class="px-5 py-2 text-lg bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-full font-semibold transition duration-150 ease-in-out"
            href="#">Акции</a>
    </div>
    <div class="container mx-auto mb-32 px-4 grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
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
                    class="text-base font-medium  text-gray-500 group-hover:text-gray-700 dark:text-gray-500 dark:group-hover:text-gray-400 transition duration-150 ease-in-out">
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
    <footer></footer>
</body>

</html>
