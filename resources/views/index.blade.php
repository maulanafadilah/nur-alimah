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

<div class="container w-full h-full p-4 mx-auto my-24 space-y-16">
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
    <!-- <div class="flex justify-center w-full py-10">
        <a href="#about">
            <span class="text-5xl material-symbols-rounded text-primary animate-bounce">keyboard_arrow_down</span>
        </a>
    </div> -->

    <section id="about" class="flex flex-col justify-between w-full mx-auto space-y-8 md:flex-row xl:max-w-screen-xl" x-data="aboutData()">
        <div class="flex space-x-7" id="image">
            <div class="" >
                <img :src="currentContent.firstImage" alt="about-alimah-1" class="w-64 rounded-xl" :class="loadingScreen ? 'transition ease-in scale-105 duration-300' : 'transition ease-out scale-100 duration-300'">
            </div>
            <div class="pt-10">
                <img :src="currentContent.secondImage" alt="about-alimah-2" class="w-64 rounded-xl" :class="loadingScreen ? 'transition ease-in scale-105 duration-300' : 'transition ease-out scale-100 duration-300'">
            </div>
        </div>
        <div class="flex flex-col justify-start w-full space-y-8 text-center md:w-1/2">
            <div class="">
                <h3 class="font-semibold text-[#6C6767] pb-1">ABOUT</h3>
                <h2 class="text-2xl font-bold" x-text="currentContent.header"></h2>
            </div>
            <p class="font-Poppins text-[#4A4A4A] text-justify w-11/12 md:w-4/5 mx-auto" x-text="currentContent.body"></p>
            <div class="flex items-center justify-center space-x-2">
                <button @click="[ currentIndex = currentIndex != 0 ? currentIndex - 1 : 2, changeContent(currentIndex)]" class="flex items-center justify-center h-4 pr-6 focus:text-primary" type="button"><span class="font-bold material-symbols-rounded">arrow_left_alt</span></button>
                <button @click="changeContent(0)" type="button" class="w-4 h-4 rounded-full" :class="currentIndex == 0 ? 'bg-primary' : 'bg-[#D9D9D9]' "></button>
                <button @click="changeContent(1)" type="button" class="w-4 h-4 rounded-full " :class="currentIndex == 1 ? 'bg-primary' : 'bg-[#D9D9D9]' "></button>
                <button @click="changeContent(2)" type="button" class="w-4 h-4 rounded-full " :class="currentIndex == 2 ? 'bg-primary' : 'bg-[#D9D9D9]' "></button>
                <button @click="[ currentIndex = currentIndex != 2 ? currentIndex + 1 : 0, changeContent(currentIndex)]" class="flex items-center justify-center h-4 pl-6 focus:text-primary" type="button"><span class="font-bold material-symbols-rounded">arrow_right_alt</span></button>
            </div>
        </div>
    </section>

</div>

<script>
    function aboutData(){
        return{
            contentData: [
                {
                    firstImage: "{{ URL::asset('assets/images/alimah-about-1.png') }}",
                    secondImage: "{{ URL::asset('assets/images/alimah-about-2.png') }}",
                    header: "Kenali Nur Alimah",
                    body: "Perkenalkan nama saya Nur Alimah, biasa disapa AlImah. Lahir di Bengkulu 10 November 2000. Salah satu gadis Bengkulu yang memiliki ketertarikan pada marketing, manajemen, organisasi, kewirausahaan, pendidikan dan politik. Imah memiliki hobi sama seperti anak-anak muda Gen Z lainnya yaitu Kulineran dan Jalan-jalan. Disela waktu lain, imah hobi membaca buku, menonton film genre action berdiskusi dan menggambar."
                },
                {
                    firstImage: "{{ URL::asset('assets/images/alimah-edu-1.png') }}",
                    secondImage: "{{ URL::asset('assets/images/alimah-edu-2.png') }}",
                    header: "Pendidikan Alimah",
                    body: "Alimah menempuh pendidikan sekolah dasar hingga menengah di yayasan Alfida. Mulai dari SDIT IQRA 2, SMPIT IQRA, dan SMAIT IQRA Bengkulu. Pada tahun 2019, Alimah melanjutkan jenjang pendidikan vokasi di Telkom University. Gelar yang diraih dari jurusan  Manajemen pemasaran yakni AMd.M dengan predikat lulusan terbaik : IPK : 3.75 pada tahun 2022."
                },
                {
                    firstImage: "{{ URL::asset('assets/images/alimah-about-1.png') }}",
                    secondImage: "{{ URL::asset('assets/images/alimah-about-2.png') }}",
                    header: "Pekerjaan & Organisasi",
                    body: "Alimah mengawali karir nya sebelum lulus kuliah dengan magang di industri teknologi, startup. Bidang startup yang menjadi titik awal karir nya yakni edutech. Kontribusi pekerjaan yang menjadi fokus pada peranan product tech marketing. Pada tahun 2021, pasca pandemi melandai. Alimah berkolaborasi dengan rekan antar kampus dan antar usia bersama mendirikan PT. Solusi Abadi Usaha dan diamanahi menjadi direktur. Perusahaan yang berfokus pada pendidikan kewirausahaan dan konsultasi bisnis."
                },
            ],
            currentIndex: 0,
            loadingScreen: false,
            get currentContent() {
                return this.contentData[this.currentIndex];
            },
            changeContent(index){
                this.loadingScreen = true;
                setTimeout(() => {
                    this.loadingScreen = false;
                }, 600);
                this.currentIndex = index;

            }
        }
    }
</script>
    
</body>
</html>