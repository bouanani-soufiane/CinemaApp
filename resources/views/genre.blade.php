<!DOCTYPE html>
<html lang="en" :class="isDark ? 'dark' : 'light'" x-data="{ isDark: false }">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Mazyar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style.css" rel="stylesheet">
    <meta name="author" content="Mazyar">
    <title>Movie Management Dashboard</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body class="font-montserrat text-sm bg-white dark:bg-zinc-900 " >
<div class="flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700 ">
    <!-- Left Sidebar -->

    <main class=" flex-1 py-10  px-5 sm:px-10 ">

        <header class=" font-bold text-lg flex items-center  gap-x-3 md:hidden mb-12 ">
                <span class="mr-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-gray-700 dark:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" />
                      </svg>
                </span>
            <svg class="h-8 w-8 fill-red-600 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z"></path>
            </svg>
            <div class="tracking-wide dark:text-white flex-1">MMovie<span class="text-red-600">.</span></div>

            <div class="relative items-center content-center flex ml-2">
                    <span class="text-gray-400 absolute left-4 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </span>
                <input type="text" class="text-xs ring-1 bg-transparent ring-gray-200 dark:ring-zinc-600 focus:ring-red-300 pl-10 pr-5 text-gray-600 dark:text-white  py-3 rounded-full w-full outline-none focus:ring-1" placeholder="Search ...">
            </div>
        </header>

        <section>
            <nav class="flex space-x-6 text-gray-400 font-medium">
                <a href="#" class="hover:text-gray-700 dark:hover:text-white">TV Series</a>
                <a href="#" class="text-gray-700 dark:text-white font-semibold">Movies</a>
                <a href="#" class="hover:text-gray-700 dark:hover:text-white ">Animes</a>
            </nav>

            <div class="flex flex-col justify-between mt-4 bg-black/10 bg-blend-multiply rounded-3xl h-80 overflow-hidden bg-cover bg-center px-7 pt-4 pb-6 text-white"
                 style="background-image: url('{{ asset('storage/'.$genre->image->path) }}');" >

            <div class="bg-gradient-to-r from-black/30 to-transparent -mx-7 -mb-6 px-7 pb-6 pt-2">
                    <span class="uppercase text-3xl font-semibold drop-shadow-lg ">{{$genre->name}}</span>
                    <div class="text-xs text-gray-200 mt-2">
                      <p>{{$genre->description}}</p>
                    </div>
                    <div class="mt-4 flex space-x-3 items-center">
                        <a href="#" class="px-5 py-2.5 bg-red-600 hover:bg-red-700 rounded-lg text-xs inline-block"> {{count($films)}} films</a>
                        <a href="#" class="p-2.5 bg-gray-800/80 rounded-lg hover:bg-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-9">
            <div class="flex items-center justify-between">
                <span class="font-semibold text-gray-700 text-base dark:text-white">Similar Movies</span>
                <div class="flex items-center space-x-2 fill-gray-500">
                    <svg class="h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 dark:fill-white dark:hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M13.293 6.293L7.58 12l5.7 5.7 1.41-1.42 -4.3-4.3 4.29-4.293Z"></path>
                    </svg>
                    <svg class="h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 dark:fill-white dark:hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M10.7 17.707l5.7-5.71 -5.71-5.707L9.27 7.7l4.29 4.293 -4.3 4.29Z"></path>
                    </svg>
                </div>
            </div>

            <div class="mt-4 grid grid-cols-2 gap-y-5 sm:grid-cols-3 gap-x-5 ">
                @foreach($films as $film )
                <div class="flex flex-col rounded-xl overflow-hidden aspect-square border dark:border-zinc-600 ">
                    <img src="{{ asset('storage/'.$film->image->path)}}" class=" h-4/5 object-cover w-full  " alt="">
                    <div class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between border-t-2 border-t-red-600">
                        <span class="capitalize  font-bold text-3xl truncate"><a href="{{route('film.show', $film->slug )}}">  {{$film->title}}</a>
                        </span>
                        <div class="flex space-x-2 items-center text-xs">
                            <a href="#" class="px-5 py-2.5 text-xl bg-red-600 hover:bg-red-700 rounded-lg text-xs inline-block"> {{$film->imdbRating}}
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

    </main>

</div>

</body>

</html>
