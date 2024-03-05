@php
    $subject = $subject ?? '';
    $body = $body ?? '';
    $user = $user ?? null;
@endphp
{{--@dd($reservations) --}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEINMA STAR Flight Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-6">
<main class="flex flex-col w-screen h-screen"  >
    <section class="flex items-center justify-center flex-grow w-full p-4 " >
        <div class="flex w-full h-64 max-w-3xl text-zinc-50" style="background-image: url('https://previews.123rf.com/images/deniskolt/deniskolt1710/deniskolt171000015/87850874-festival-de-cin%C3%A9ma-ou-mod%C3%A8le-d-affiche-de-temps-de-cin%C3%A9ma-illustration-vectorielle.jpg'); background-repeat: no-repeat;">
            {{-- code bar --}}
            {{-- <div class="flex items-center justify-center mr-4">
                <img src="path/to/your/qr_code.png" alt="QR Code" class="">
            </div> --}}
            <div class="flex px-3 mt-2 rounded-full bg-lime-400" style="rotate: 90deg;heigth:12rem">
                <span class="text-sm text-white ">Ticket Number :   13234567</span>
            </div>
            <div class="relative flex flex-col items-center justify-between h-full border-2 border-dashed bg-zinc-900 border-zinc-50">
                <div class="absolute w-8 h-8 rounded-full bg-zinc-200 -top-5"></div>
                <div class="absolute w-8 h-8 rounded-full bg-zinc-200 -bottom-5"></div>
            </div>
            <div class="flex flex-col flex-grow h-full px-10 py-8 bg-zinc-900 rounded-r-3xl">
                <div class="flex items-center justify-between w-full">
                    <div class="flex flex-col ">
                        <span class="text-2xl font-bold">{!! $body !!}</span>
                        <span class="text-sm text-white">{!! $user->name !!}</span>
                        <span class="text-sm text-white">{!! $user->email !!}</span>
                    </div>
                    <div class="flex flex-col items-center flex-grow px-10">
                        <span class="text-xs font-bold text-white">YOUCODE</span>
                        <div class="flex items-center w-full mt-2">
                            <div class="w-3 h-3 "></div>
                            <div class="flex-grow h-px "></div>
                            <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 67 67" xmlns="http://www.w3.org/2000/svg" width="30px" style="fill: black;">
                                <path d="m2.083 8.333v50c0 1.151.933 2.084 2.084 2.084h58.333c1.151 0 2.083-.933 2.083-2.084v-50c0-1.15-.932-2.083-2.083-2.083h-58.333c-1.151 0-2.084.933-2.084 2.083z"/>
                                <path d="m16.667 52.083v4.167h-10.417v-4.167z"/>
                                <path d="m20.833 56.25h10.417v-4.167h-10.417z"/>
                                <path d="m35.417 56.25h10.416v-4.167h-10.416z"/>
                                <path d="m50 52.083h10.417v4.167h-10.417z"/>
                                <path d="m6.25 18.75h54.167v29.167h-54.167z" fill="#dedede"/>
                                <path d="m6.25 18.75h27.083v29.167h-27.083z" fill="#f2f2f2"/>
                                <path d="m42.716 35.133c.64-.373 1.034-1.059 1.034-1.8s-.394-1.426-1.034-1.799l-12.5-7.292c-.644-.376-1.44-.378-2.087-.007-.647.372-1.046 1.061-1.046 1.807v14.583c0 .746.399 1.435 1.046 1.807.647.371 1.443.368 2.087-.007z"/>
                                <path d="m37.532 33.333-6.282 3.665v-7.329z"/>
                                <path d="m33.333 30.884v4.899l-2.083 1.215v-7.329z"/>
                                <path d="m50 10.417h10.417v4.166h-10.417z"/>
                                <path d="m35.417 14.583h10.416v-4.166h-10.416z"/>
                                <g fill="#666">
                                    <path d="m20.833 14.583h10.417v-4.166h-10.417z"/>
                                    <path d="m16.667 10.417v4.166h-10.417v-4.166z"/>
                                </g>
                            </svg>

                            <div class="flex-grow h-px "></div>
                            <div class="w-3 h-3 "></div>
                        </div>
                    </div>
                    @foreach($reservations as $reservation)
                        <div class="flex flex-col items-center">



                            <span class="text-4xl font-bold">{{ $reservation['film_name'] }}</span>

                            <span class="text-sm text-white">{{ $reservation['salleName'] }}</span>
                        </div>
                </div>
                <div class="flex justify-between w-full mt-auto">
                    <div class="flex flex-col">
                        <span class="text-xs font-bold">Date</span>
                        <span class="font-mono text-white ">09/06/2023</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xs font-bold">Departure</span>
                        <span class="font-mono text-white ">{{ $reservation['showingTime'] }}</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xs font-bold">Zone</span>
                        <span class="font-mono text-white ">{{ $reservation['zone_name'] }}</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xs font-bold">Seat</span>
                        <span class="font-mono text-white ">A{{ $reservation['seat_id'] }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
</body>
</html>
