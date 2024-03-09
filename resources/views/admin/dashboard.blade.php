<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet"/>
    <link
        rel="stylesheet"
        href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"
    />
    <title>Home Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<script src="//unpkg.com/alpinejs" defer></script>

<!-- component -->
<div class="min-h-screen bg-gray-50/50">
    <x-sidebar-dashboard/>
    <div class="p-4 xl:ml-80">
        <nav class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-1">
            <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
                <div class="capitalize">
                    <nav aria-label="breadcrumb" class="w-max">
                        <ol class="flex flex-wrap items-center w-full bg-opacity-60 rounded-md bg-transparent p-0 transition-all">
                            <li class="flex items-center text-blue-gray-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-light-blue-500">
                                <a href="#">
                                    <p class="block antialiased font-sans text-sm leading-normal text-blue-900 font-normal opacity-50 transition-all hover:text-blue-500 hover:opacity-100">
                                        dashboard</p>
                                </a>
                                <span
                                    class="text-gray-500 text-sm antialiased font-sans font-normal leading-normal mx-2 pointer-events-none select-none">/</span>
                            </li>
                            <li class="flex items-center text-blue-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-blue-500">
                                <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                    home</p>
                            </li>
                        </ol>
                    </nav>
                    <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-gray-900">
                        home</h6>
                </div>
            </div>
        </nav>
        <div class="mt-12">
            <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-3">
                <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                    <div
                        class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             aria-hidden="true" class="w-6 h-6 text-white">
                            <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
                            <path fill-rule="evenodd"
                                  d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"
                                  clip-rule="evenodd"></path>
                            <path
                                d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z"></path>
                        </svg>
                    </div>
                    <div class="p-4 text-right">
                        <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                            Total films</p>
                        <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900"> {{count($films)}}</h4>
                    </div>
                    <div class="border-t border-blue-gray-50 p-4">
                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                            <strong class="text-green-500">+55%</strong>&nbsp;than last week
                        </p>
                    </div>
                </div>
                <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                    <div
                        class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-pink-600 to-pink-400 text-white shadow-pink-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             aria-hidden="true" class="w-6 h-6 text-white">
                            <path fill-rule="evenodd"
                                  d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="p-4 text-right">
                        <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                            Total Users</p>
                        <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                            {{$usersCount}}</h4>
                    </div>
                    <div class="border-t border-blue-gray-50 p-4">
                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                            <strong class="text-green-500">+3%</strong>&nbsp;than last month
                        </p>
                    </div>
                </div>

                <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                    <div
                        class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-orange-600 to-orange-400 text-white shadow-orange-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             aria-hidden="true" class="w-6 h-6 text-white">
                            <path
                                d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z"></path>
                        </svg>
                    </div>
                    <div class="p-4 text-right">
                        <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                            most reserved film</p>
                        <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                            @if($mostReservedFilmDetails)
                                <p> {{ $mostReservedFilmDetails->title }}</p>
                            @else
                                <p>No reservations yet.</p>
                            @endif
                        </h4>
                    </div>
                    <div class="border-t border-blue-gray-50 p-4">
                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
{{--                            <strong class="text-green-500">{{ $mostReservedFilm->reservations_count }}</strong>&nbsp;reservations--}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="mb-4 " id="genre">
                <!-- component -->
                <div class="w-full max-w-full px-3 mb-6  mx-auto">
                    <div
                        class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white m-5">
                        <div
                            class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">
                            <!-- card header -->
                            <div
                                class="px-9 pt-5 flex justify-between items-stretch flex-wrap min-h-[70px] pb-0 bg-transparent">
                                <h3 class="flex flex-col items-start justify-center m-2 ml-0 font-medium text-xl/tight text-dark">

                                </h3>
                                <div class="relative flex flex-wrap items-center my-2">
                                    <a href="javascript:void(0)"
                                       class="inline-block text-[.925rem] font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-150 ease-in-out text-light-inverse bg-light-dark border-light shadow-none border-0 py-2 px-5 hover:bg-secondary active:bg-light focus:bg-light">
                                        <div class="relative flex flex-wrap items-center my-2">

                                            <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                    type="button">
                                                Add
                                            </button>

                                            <div id="default-modal" tabindex="-1" aria-hidden="true"
                                                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <!-- Modal header -->
                                                        <div
                                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                                Add Genre
                                                            </h3>
                                                            <button type="button"
                                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                    data-modal-hide="default-modal">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                     xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                     viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                          stroke-linejoin="round" stroke-width="2"
                                                                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <div class="p-4 md:p-5 space-y-4">
                                                            <x-form action="{{route('genre.store')}}" has-files>
                                                                @csrf

                                                                <div id="specialties" class="mt-4 ">
                                                                    <label for="name" class="text-white">name</label>
                                                                    <input type="text" name="name" id="name">
                                                                </div>
                                                                <div id="specialties" class="mt-4 ">
                                                                    <label for="description" class="text-white">Description</label>
                                                                    <input type="text" name="description"
                                                                           id="description" class="w-full">
                                                                </div>
                                                                <div>
                                                                    <x-input name="image" id="image" type="file"
                                                                             class="p-4c w-full" :value="old('image')"
                                                                             required autofocus autocomplete="image"/>
                                                                    <x-error field="iamge" class="text-red-500"
                                                                             :messages="$errors->get('image')"/>

                                                                </div>
                                                                <div
                                                                    class=" pt-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                    <button data-modal-hide="default-modal"
                                                                            type="submit"
                                                                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                        Add
                                                                    </button>
                                                                </div>

                                                            </x-form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- end card header -->
                            <!-- card body  -->
                            <div class="flex-auto block py-8 pt-6 px-9">
                                <div class="overflow-x-auto">
                                    <table class="w-full my-0 align-middle text-dark border-neutral-200">
                                        <thead class="align-bottom">
                                        <tr class="font-semibold text-[0.95rem] text-secondary-dark">
                                            <th class="pb-3 text-start min-w-[175px]">Genre</th>
                                            <th class="pb-3 text-end min-w-[100px]">Name</th>
                                            <th class="pb-3 text-end min-w-[100px]">Description</th>
                                            <th class="pb-3 pr-12 text-end min-w-[175px]">number of films</th>
                                            <th class="pb-3 pr-12 text-end min-w-[100px]">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($genres as $genre)
                                            <tr class="border-b border-dashed last:border-b-0">
                                                <td class="p-3 pl-0">
                                                    <div class="flex items-center">
                                                        <div class="relative inline-block shrink-0 rounded-2xl me-3">
                                                            <img src="{{ asset('storage/'.$genre->image->path)}}"
                                                                 class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl"
                                                                 alt="genre image">

                                                        </div>
                                                        <div class="flex flex-col justify-start">
                                                            {{$genre->id}}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-3 pr-0 text-end">
                                                    <span
                                                        class="font-semibold text-light-inverse text-md/normal">{{$genre->name}}</span>
                                                </td>
                                                <td class="p-3 pr-0 text-end">
                    <span
                        class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold text-base/none text-success bg-success-light rounded-lg">
                    {{$genre->description}} </span>
                                                </td>
                                                <td class="p-3 pr-12 text-end">
                                                    <span
                                                        class="text-center align-baseline inline-flex px-4 py-3 mr-auto items-center font-semibold text-[.95rem] leading-none text-primary bg-primary-light rounded-lg"> {{ $genre->film_count }}</span>
                                                </td>
                                                <td class="p-3 pr-0 text-end">
                                                    <div class="">
                                                        <button data-genre-name="{{$genre->name}}"
                                                                data-genre-id="{{$genre->id}}"
                                                                data-modal-target="edit-modal-genre"
                                                                data-modal-toggle="edit-modal-genre"
                                                                class=" bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full"
                                                                type="button">
                                                            edit
                                                        </button>

                                                        <div id="edit-modal-genre" tabindex="-1" aria-hidden="true"
                                                             class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                                <!-- Modal content -->
                                                                <div
                                                                    class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                                    <!-- Modal header -->
                                                                    <div
                                                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                                            edit Medicine
                                                                        </h3>
                                                                        <button type="button"
                                                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                                data-modal-hide="edit-modal-medicine">
                                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 fill="none" viewBox="0 0 14 14">
                                                                                <path stroke="currentColor"
                                                                                      stroke-linecap="round"
                                                                                      stroke-linejoin="round"
                                                                                      stroke-width="2"
                                                                                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                            </svg>
                                                                            <span class="sr-only">Close modal</span>
                                                                        </button>
                                                                    </div>
                                                                    <!-- Modal body -->
                                                                    <div class="p-4 md:p-5 space-y-4">
                                                                        <form method="POST"
                                                                              action="{{ route('genre.update', $genre->slug)}}"
                                                                              enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PATCH')
                                                                            <div>
                                                                                <input type="hidden" id="genreId"
                                                                                       value="{{ $genre->id }}"
                                                                                       name="id">
                                                                                <label for="">name</label>
                                                                                <input type="text" name="name"
                                                                                       id="namegenre">
                                                                            </div>
                                                                            <div id="" class="mt-4 ">
                                                                                <label for="">description</label>
                                                                                <input type="text" name="description"
                                                                                       id="">
                                                                            </div>
                                                                            <div>
                                                                                <x-input name="image" id="image"
                                                                                         type="file" class="p-4c w-full"
                                                                                         :value="old('image')" required
                                                                                         autofocus
                                                                                         autocomplete="image"/>
                                                                                <x-error field="iamge"
                                                                                         class="text-red-500"
                                                                                         :messages="$errors->get('image')"/>
                                                                            </div>
                                                                            <div
                                                                                class=" pt-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                                <button data-modal-hide="default-modal"
                                                                                        type="submit"
                                                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                                    update
                                                                                </button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <!-- Modal footer -->
                                                                    <div
                                                                        class="flex items-center p-2  border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                        <button data-modal-hide="default-modal"
                                                                                type="button"
                                                                                class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                                            Decline
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <form method="POST" action="{{ route('genre.update', $genre)}}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit"
                                                                class="mt-4  bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                                                            delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="mb-4 " id="film">
                <!-- component -->
                <div class="w-full max-w-full px-3 mb-6  mx-auto">
                    <div
                        class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white m-5">
                        <div
                            class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">
                            <!-- card header -->
                            <div
                                class="px-9 pt-5 flex justify-between items-stretch flex-wrap min-h-[70px] pb-0 bg-transparent">
                                <h3 class="flex flex-col items-start justify-center m-2 ml-0 font-medium text-xl/tight text-dark">
                                    Film
                                </h3>
                                <div class="relative flex flex-wrap items-center my-2">
                                    <a href="javascript:void(0)"
                                       class="inline-block text-[.925rem] font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-150 ease-in-out text-light-inverse bg-light-dark border-light shadow-none border-0 py-2 px-5 hover:bg-secondary active:bg-light focus:bg-light">
                                        <div class="relative flex flex-wrap items-center my-2">

                                            <button data-modal-target="default-modal1"
                                                    data-modal-toggle="default-modal1"
                                                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                    type="button">
                                                Add
                                            </button>

                                            <div id="default-modal1" tabindex="-1" aria-hidden="true"
                                                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <!-- Modal header -->
                                                        <div
                                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                                Add Film
                                                            </h3>
                                                            <button type="button"
                                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                    data-modal-hide="default-modal1">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                     xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                     viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                          stroke-linejoin="round" stroke-width="2"
                                                                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <div class="p-4 md:p-5 space-y-4">
                                                            <x-form action="{{route('film.store')}}" has-files>
                                                                @csrf
                                                                @method('POST')

                                                                <div class="mt-4 ">
                                                                    <label for="title" class="text-white">title</label>
                                                                    <input type="text" name="title" id="title">
                                                                </div>
                                                                <div class="mt-4 ">
                                                                    <label for="plot" class="text-white">plot</label>
                                                                    <input type="text" name="plot" id="plot"
                                                                           class="w-full">
                                                                </div>
                                                                <div class="mt-4 ">
                                                                    <label for="imdbRating" class="text-white">imdb
                                                                        Radting</label>
                                                                    <input type="text" name="imdbRating" id="imdbRating"
                                                                           class="w-full">
                                                                </div>
                                                                <div class="mt-4 ">
                                                                    <label for="release_date" class="text-white">release
                                                                        date</label>
                                                                    <input type="date" name="release_date"
                                                                           id="release_date" class="w-full">
                                                                </div>
                                                                <div class="mt-4 ">
                                                                    <label for="director"
                                                                           class="text-white">director</label>
                                                                    <input type="text" name="director" id="director"
                                                                           class="w-full">
                                                                </div>
                                                                <div class="mt-4 ">
                                                                    <label for="duration"
                                                                           class="text-white">duration</label>
                                                                    <input type="text" name="duration" id="duration"
                                                                           class="w-full">
                                                                </div>
                                                                <div class="mt-4 ">
                                                                    <select name="genre_id">
                                                                        <option selected disabled value="">select
                                                                            genre
                                                                        </option>
                                                                        @forEach($genres as $genre)

                                                                            <option
                                                                                value="{{$genre->id}}">{{$genre->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="mt-4">

                                                                    @foreach($rooms as $room)
                                                                        <label for="roomDate"
                                                                               class="text-white">date</label>
                                                                        <input type="date" name="roomDate" id="roomDate"
                                                                               class="w-1/2">
                                                                        <label for="room"
                                                                               class="text-white">{{$room->name}}</label>
                                                                        <input type="checkbox" name="room"
                                                                               value="{{$room->id}}">
                                                                    @endforeach

                                                                </div>
                                                                <div class="mt-4">
                                                                    <x-input name="image" id="image" type="file"
                                                                             class="p-4c w-full" :value="old('image')"
                                                                             required autofocus autocomplete="image"/>
                                                                    <x-error field="iamge" class="text-red-500"
                                                                             :messages="$errors->get('image')"/>

                                                                </div>
                                                                <div
                                                                    class=" pt-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                    <button data-modal-hide="default-modal"
                                                                            type="submit"
                                                                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                        Add
                                                                    </button>
                                                                </div>

                                                            </x-form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- end card header -->
                            <!-- card body  -->
                            <div class="flex-auto block py-8 pt-6 px-9">
                                <div class="overflow-x-auto">
                                    <table class="w-full my-0 align-middle text-dark border-neutral-200">
                                        <thead class="align-bottom">
                                        <tr class="font-semibold text-[0.95rem] text-secondary-dark">
                                            <th class="pb-3 text-start min-w-[175px]">Film</th>
                                            <th class="pb-3 text-end min-w-[100px]">Title</th>
                                            <th class="pb-3 text-end min-w-[100px]">Description</th>
                                            <th class="pb-3 pr-12 text-end min-w-[175px]">Genre</th>
                                            <th class="pb-3 pr-12 text-end min-w-[100px]">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($films as $film)
                                            <tr class="border-b border-dashed last:border-b-0">
                                                <td class="p-3 pl-0">
                                                    <div class="flex items-center">
                                                        <div class="relative inline-block shrink-0 rounded-2xl me-3">
                                                            <img src="{{ asset('storage/'.$film->image->path)}}"
                                                                 class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl"
                                                                 alt="genre image">

                                                        </div>
                                                        <div class="flex flex-col justify-start">
                                                            {{$film->id}}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-3 pr-0 text-end">
                                                    <span
                                                        class="font-semibold text-light-inverse text-md/normal">{{$film->title}}</span>
                                                </td>
                                                <td class="p-3 pr-0 text-end">
                    <span
                        class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold text-base/none text-success bg-success-light rounded-lg">
                    {{$film->plot}} </span>
                                                </td>
                                                <td class="p-3 pr-12 text-end">
                                                    <span
                                                        class="text-center align-baseline inline-flex px-4 py-3 mr-auto items-center font-semibold text-[.95rem] leading-none text-primary bg-primary-light rounded-lg"> {{$film->genre->name}}</span>
                                                </td>

                                                <td class="p-3 pr-0 text-end">


                                                    <div class="">
                                                        <button data-genre-name="{{$film->title}}"
                                                                data-genre-id="{{$film->id}}"
                                                                data-modal-target="edit-modal-film"
                                                                data-modal-toggle="edit-modal-film"
                                                                class=" bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full"
                                                                type="button">
                                                            edit
                                                        </button>

                                                        <div id="edit-modal-film" tabindex="-1" aria-hidden="true"
                                                             class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                                <!-- Modal content -->
                                                                <div
                                                                    class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                                    <!-- Modal header -->
                                                                    <div
                                                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                                            edit Film
                                                                        </h3>
                                                                        <button type="button"
                                                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                                data-modal-hide="edit-modal-medicine">
                                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 fill="none" viewBox="0 0 14 14">
                                                                                <path stroke="currentColor"
                                                                                      stroke-linecap="round"
                                                                                      stroke-linejoin="round"
                                                                                      stroke-width="2"
                                                                                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                            </svg>
                                                                            <span class="sr-only">Close modal</span>
                                                                        </button>
                                                                    </div>
                                                                    <!-- Modal body -->
                                                                    <div class="p-4 md:p-5 space-y-4">
                                                                        <x-form action="{{route('film.update',$film)}}"
                                                                                has-files>
                                                                            @csrf
                                                                            @method('PATCH')

                                                                            <div class="mt-4 ">
                                                                                <label for="title" class="text-white">title</label>
                                                                                <input type="text" name="title"
                                                                                       id="title">
                                                                            </div>
                                                                            <div class="mt-4 ">
                                                                                <label for="plot" class="text-white">plot</label>
                                                                                <input type="text" name="plot" id="plot"
                                                                                       class="w-full">
                                                                            </div>
                                                                            <div class="mt-4 ">
                                                                                <label for="imdbRating"
                                                                                       class="text-white">imdb
                                                                                    Radting</label>
                                                                                <input type="text" name="imdbRating"
                                                                                       id="imdbRating" class="w-full">
                                                                            </div>
                                                                            <div class="mt-4 ">
                                                                                <label for="release_date"
                                                                                       class="text-white">release
                                                                                    date</label>
                                                                                <input type="date" name="release_date"
                                                                                       id="release_date" class="w-full">
                                                                            </div>
                                                                            <div class="mt-4 ">
                                                                                <label for="director"
                                                                                       class="text-white">director</label>
                                                                                <input type="text" name="director"
                                                                                       id="director" class="w-full">
                                                                            </div>
                                                                            <div class="mt-4 ">
                                                                                <label for="duration"
                                                                                       class="text-white">duration</label>
                                                                                <input type="text" name="duration"
                                                                                       id="duration" class="w-full">
                                                                            </div>
                                                                            <div class="mt-4 ">
                                                                                <select name="genre_id">
                                                                                    <option selected disabled value="">
                                                                                        select genre
                                                                                    </option>
                                                                                    @forEach($genres as $genre)

                                                                                        <option
                                                                                            value="{{$genre->id}}">{{$genre->name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="mt-4">

                                                                                @foreach($rooms as $room)
                                                                                    <label for="roomDate"
                                                                                           class="text-white">date</label>
                                                                                    <input type="date" name="roomDate"
                                                                                           id="roomDate" class="w-1/2">
                                                                                    <label for="room"
                                                                                           class="text-white">{{$room->name}}</label>
                                                                                    <input type="checkbox" name="room"
                                                                                           value="{{$room->id}}">
                                                                                @endforeach

                                                                            </div>
                                                                            <div class="mt-4">
                                                                                <x-input name="image" id="image"
                                                                                         type="file" class="p-4c w-full"
                                                                                         :value="old('image')" required
                                                                                         autofocus
                                                                                         autocomplete="image"/>
                                                                                <x-error field="iamge"
                                                                                         class="text-red-500"
                                                                                         :messages="$errors->get('image')"/>

                                                                            </div>
                                                                            <div
                                                                                class=" pt-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                                <button data-modal-hide="default-modal"
                                                                                        type="submit"
                                                                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                                    Add
                                                                                </button>
                                                                            </div>

                                                                        </x-form>
                                                                    </div>
                                                                    <!-- Modal footer -->
                                                                    <div
                                                                        class="flex items-center p-2  border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                        <button data-modal-hide="default-modal"
                                                                                type="button"
                                                                                class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                                            Decline
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <form method="POST" action="{{ route('film.destroy', $film)}}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit"
                                                                class="mt-4  bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                                                            delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <h1 class="text-5xl font-bold text-center text-red-700 mb-6" style="font-size: 60px; margin: 20px;">Manage
                Rooms</h1>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6" id="room">


                <div
                    class="lg:col-span-1 bg-white p-6 relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words w-full shadow-lg rounded">
                    <!-- Left content -->
                    <div class="rounded-t mb-0 px-0 border-0">
                        <div class="">
                            <h1 class="text-3xl font-bold text-center text-blue-700 mb-6">Create New Room</h1>
                            @if(session('successRoom'))
                                <div id="successMessage" class="bg-green-200 text-green-800 p-2 mb-4 rounded">
                                    {{ session('successRoom') }}
                                </div>
                            @endif

                            @if(session('errorRoom'))
                                <div id="errorMessage" class="bg-red-200 text-red-800 p-2 mb-4 rounded">
                                    {{ session('errorRoom') }}
                                </div>
                            @endif
                            <form action="{{ route('room.store') }}" method="POST" class="w-full">
                                @csrf
                                <div class="flex items-center justify-between mb-4">
                                    <input name="name" id="name" type="text" placeholder="Room Name"
                                           class="shadow appearance-none border rounded w-2/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-2">
                                    <input name="total_seats" id="total_seats" type="number" placeholder="Total Seats"
                                           class="shadow appearance-none border rounded w-2/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-2">
                                    <button type="submit"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                        Submit
                                    </button>
                                </div>
                            </form>
                            <table class="w-full my-0 align-middle text-dark border-neutral-200">
                                <thead class="align-bottom">
                                <tr class="font-semibold text-[0.95rem] text-secondary-dark">
                                    <th class="pb-3 text-start min-w-[175px]">Room</th>
                                    <th class="pb-3 text-end min-w-[100px]">Total Seats</th>
                                    <th class="pb-3 text-end min-w-[100px]">Total Zones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($rooms as $room)
                                    <tr class="border-b border-dashed last:border-b-0">
                                        <td class="p-3 pl-0">
                                            <div class="flex items-center">
                                                <div class="flex flex-col justify-start">
                                                    <p class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary"> {{$room->name}} </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3 pr-0 text-end">
                                            <span class="font-semibold text-light-inverse text-md/normal">{{$room->total_seats}} seats</span>
                                        </td>
                                        <td class="p-3 pr-0 text-end">
                                            <span class="font-semibold text-light-inverse text-md/normal">3 zones</span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-2 bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md ">
                    <div class="flex max-w-md bg-blend-darken shadow-lg rounded-lg overflow-hidden bg-red-600 hidden"
                         id="message">
                        <div class="w-2 bg-gray-800"></div>
                        <div class="flex items-center px-2 py-3 bg-red-600">
                            <div class="mx-3">
                                <p class="text-white" id="messagetext"></p>
                            </div>
                        </div>
                    </div>
                    @if(session('successShema'))
                        <div id="successMessage" class="bg-green-200 text-green-800 p-2 mb-4 rounded">
                            {{ session('successShema') }}
                        </div>
                    @endif

                    @if(session('errorShema'))
                        <div id="errorMessage" class="bg-red-200 text-red-800 p-2 mb-4 rounded">
                            {{ session('errorShema') }}
                        </div>
                    @endif

                    <div class="font-medium">Adjust schema</div>
                    <form action="{{route('seat.store')}}" method="post">
                        @csrf
                        <div class="mt-4 ">
                            <label for="countries"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-800">Select a
                                room</label>
                            <select
                                class=" w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="room_id">
                                @foreach($rooms as $room)
                                    <option value="{{$room->id}}" class="w-full">
                                        {{$room->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-4 ">
                            <h1 class="block mb-2 text-sm font-bold m-3 text-gray-900 dark:text-gray-800">Select
                                zone </h1>
                            <div class="block w-full overflow-x-auto">
                                <table class="items-center w-full border-collapse text-blueGray-700  ">
                                    <thead class="thead-light ">
                                    <tr>
                                        <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                            Name
                                        </th>
                                        <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                            Tariff
                                        </th>
                                        <th class="px-6 bg-blueGray-50 text-blueGray-700 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">
                                            total seats
                                        </th>
                                        <th class="px-6 bg-blueGray-50 text-blueGray-700 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">
                                            add
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody id="zone-table-body">
                                    @foreach($zones as $zone)
                                        <tr id="zone-select">
                                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                {{$zone->name}}
                                            </th>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                                {{$zone->tariff}} DH
                                            </td>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                <div class="flex items-center">
                                                    <span class="mr-2"> {{$zone->nbr_seats}}</span>
                                                </div>
                                            </td>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                                <input type="checkbox" value="{{$zone->id}}" name="zone_id[]">
                                                <input type="number" name="nbrSeats[{{$zone->id}}]" class="hidden"
                                                       value="{{$zone->nbr_seats}}">

                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-4" id="ZoneArea ">
                            </div>
                            <label>Or </label>
                            <button
                                type="button"
                                data-ripple-light="true"
                                data-popover-target="popover-animation"
                                class="m-3 middle none center rounded-lg bg-gradient-to-tr from-pink-600 to-pink-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            >
                                Add Zone
                            </button>
                        </div>
                        <div class=" pt-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button type="submit"
                                    class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none">
                                Add
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div
                data-popover="popover-animation"
                data-popover-mount="opacity-100 scale-100"
                data-popover-unmount="opacity-0 scale-0 pointer-events-none"
                data-popover-transition="transition-all duration-200 origin-bottom"
                class="absolute w-[500px] whitespace-normal break-words rounded-lg border border-blue-gray-50 bg-white p-4 font-sans text-sm font-normal text-blue-gray-500 shadow-lg shadow-blue-gray-500/10 focus:outline-none"
            >
                <h1>add zone </h1>
                <form action="{{ url('zoneAjax') }}" method="POST" enctype="multipart/form-data" id="add">
                    @csrf
                    <div class="p-4 bg-gray-100 m-3">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-800">name
                                zone </label>
                            <input type="text" name="name"
                                   class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-800">tariff </label>
                            <input type="number" name="tariff"
                                   class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-800">total
                                seats </label>
                            <input type="number" name="nbr_seats"
                                   class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>
                    <button type="submit"
                            class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none">
                        Add
                    </button>

                </form>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function () {

        $('#add').on('submit', function (event) {
            event.preventDefault();
            jQuery.ajax({
                url: "{{ url('zoneAjax') }}",
                data: jQuery('#add').serialize(),
                type: 'post',
                success: function (response) {
                    $('#message').css('display', 'block');
                    jQuery('#messagetext').html(response.message);

                    // Construct the new row
                    var newRow = $('<tr id="zone-select"></tr>');
                    newRow.append($('<th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"></th>').text(response.zone.name));
                    newRow.append($('<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 "></td>').text(response.zone.tariff + ' DH'));
                    newRow.append($('<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"></td>').text(response.zone.nbr_seats));

                    var inputCell = $('<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"></td>');
                    inputCell.append('<input type="checkbox" value="' + response.zone.id + '" name="zone_id[]">');
                    inputCell.append('<input type="hidden" value="' + response.zone.nbr_seats + '" name="nbrSeats[' + response.zone.id + ']">');
                    newRow.append(inputCell);

                    $('#zone-table-body').append(newRow);

                    setTimeout(function () {
                        $('#message').css('display', 'none');
                    }, 3000);
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            const modalgenreButtons = document.querySelectorAll('[data-modal-toggle="edit-modal-genre"]');
            const modalmedicine = document.getElementById("edit-modal-genre");
            const genreId = modalmedicine.querySelector('#genreId');
            const namegenre = modalmedicine.querySelector('#namegenre');
            modalgenreButtons.forEach((button) => {
                button.addEventListener("click", function () {
                    const genreValue = this.getAttribute("data-genre-id");
                    const genreName = this.getAttribute("data-genre-name");
                    genreId.value = genreValue;
                    namegenre.value = genreName;
                });
            });
        });
    });
    setTimeout(function () {
        document.getElementById('successMessage').style.display = 'none';
    }, 5000);

    setTimeout(function () {
        document.getElementById('errorMessage').style.display = 'none';
    }, 5000);
</script>
<script
    type="module"
    src="https://unpkg.com/@material-tailwind/html@latest/scripts/popover.js"
></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</body>
</html>
