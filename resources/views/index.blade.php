<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nur Alimah</title>
    <link rel="icon" type="image/png" href="{{ URL::asset('assets/images/logo-gelora.png') }}">

    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,500,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
@include('elements/navbar')

<div class="container w-full h-full p-4 mx-auto my-20">
    <div class="relative w-full xl:max-w-screen-xl mx-auto h-[524px] md:h-80 lg:h-[480px] xl:h-[524px] rounded-2xl object-cover flex flex-col overflow-hidden" style="background-image: url('/assets/images/hero-background.png');">
        <div class="">
            <img class="absolute h-32 lg:h-32 md:h-24 -left-24 md:-left-0 bottom-48 md:bottom-0" src="{{ URL::asset('assets/images/cloud-bottom.png') }}" alt="cloud" />
            <img class="absolute top-0 h-48 lg:h-48 md:h-36 left-48 xl:left-56" src="{{ URL::asset('assets/images/cloud-top.png') }}" alt="cloud" />
            <div class="absolute flex flex-col text-white w-fit left-4 md:left-12 lg:left-16 xl:left-24 top-16 md:top-24 lg:top-36 xl:top-48 2xl:top-52">
                <span class="text-xl font-bold md:text-lg lg:text-xl xl:text-3xl">Gelorakan Politik Indonesia, </span>
                <span class="text-xl font-bold md:text-lg lg:text-xl xl:text-3xl">Bersama Anak Muda!</span>
                <span class="pt-2 pb-4 text-base font-medium md:text-sm lg:text-base xl:text-xl">Kawal Alimah Duduk di DPR RI 2024</span>
                <button type="button" class="w-24 lg:w-32 text-white bg-[#44CFF5] hover:bg-primary focus:outline-none focus:ring-4 focus:ring-blue-100 font-medium rounded-full text-sm px-3 py-2 lg:px-5 lg:py-2.5 text-center me-2 mb-2">Dukung</button>
            </div>
        </div>
        <div class="flex justify-center md:justify-normal">
            <img class="bottom-0 right-0 hidden md:flex md:absolute md:h-44 lg:h-64 xl:h-72" src="{{ URL::asset('assets/images/indonesia-map.png') }}" alt="indonesia-map" />
            <img class="absolute bottom-0 h-72 lg:h-96 xl:h-[480px] pl-2 lg:pl-0 md:right-10 lg:right-16" src="{{ URL::asset('assets/images/alimah.png') }}" alt="alimah">
        </div>
    </div>

</div>
    
</body>
</html>