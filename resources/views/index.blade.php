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

<div class="container w-full h-full p-4 mx-auto mt-24 mb-6 space-y-16">
    <div class="relative w-full xl:max-w-screen-xl mx-auto h-[524px] md:h-80 lg:h-[480px] xl:h-[524px] rounded-2xl object-cover flex flex-col overflow-hidden" style="background-image: url('/assets/images/hero-background.png');">
        <div class="">
            <img class="absolute h-32 lg:h-32 md:h-24 -left-24 md:-left-0 bottom-48 md:bottom-0" src="{{ URL::asset('assets/images/cloud-bottom.png') }}" alt="cloud" />
            <img class="absolute top-0 h-48 lg:h-48 md:h-36 left-48 xl:left-56" src="{{ URL::asset('assets/images/cloud-top.png') }}" alt="cloud" />
            <div class="absolute flex flex-col text-white w-fit left-4 md:left-12 lg:left-16 xl:left-24 top-16 md:top-24 lg:top-36 xl:top-48 2xl:top-52">
                <span class="text-xl font-bold md:text-lg lg:text-xl xl:text-3xl">Gelorakan Politik Indonesia, </span>
                <span class="text-xl font-bold md:text-lg lg:text-xl xl:text-3xl">Bersama Anak Muda!</span>
                <span class="pt-2 pb-4 text-base font-medium md:text-sm lg:text-base xl:text-xl">Kawal Alimah Duduk di DPR RI 2024</span>
                <a href="#support" class="w-24 lg:w-32 text-white bg-[#44CFF5] hover:bg-primary focus:outline-none focus:ring-4 focus:ring-blue-100 font-medium rounded-full text-sm px-3 py-2 lg:px-5 lg:py-2.5 text-center me-2 mb-2">Dukung</a>
            </div>
        </div>
        <div class="flex justify-center md:justify-normal">
            <img class="bottom-0 right-0 hidden md:flex md:absolute md:h-44 lg:h-64 xl:h-72" src="{{ URL::asset('assets/images/indonesia-map.png') }}" alt="indonesia-map" />
            <img class="absolute bottom-0 h-72 lg:h-96 xl:h-[480px] pl-2 lg:pl-0 md:right-10 lg:right-16" src="{{ URL::asset('assets/images/alimah.png') }}" alt="alimah">
        </div>
    </div>

    <section id="about" class="flex flex-col justify-between w-full mx-auto space-y-8 md:space-y-0 md:flex-row xl:max-w-screen-xl" x-data="aboutData()">
        <div class="flex space-x-7 md:w-1/2 md:p-4 lg:justify-center" id="image">
            <div class="" >
                <img :src="currentContent.firstImage" alt="about-alimah-1" class="w-64 rounded-xl" :class="loadingScreen ? 'transition ease-in scale-105 duration-300' : 'transition ease-out scale-100 duration-300'">
            </div>
            <div class="pt-10">
                <img :src="currentContent.secondImage" alt="about-alimah-2" class="w-64 rounded-xl" :class="loadingScreen ? 'transition ease-in scale-105 duration-300' : 'transition ease-out scale-100 duration-300'">
            </div>
        </div>
        <div class="flex flex-col items-center justify-start w-full space-y-8 text-center md:p-4 md:w-1/2">
            <div class="">
                <h3 class="font-semibold text-[#6C6767] pb-1">ABOUT</h3>
                <h2 class="text-2xl font-bold" x-text="currentContent.header"></h2>
            </div>
            <p class="font-Poppins text-[#4A4A4A] text-justify w-full xl:w-4/5 mx-auto leading-relaxed text-sm xl:text-base" x-text="currentContent.body"></p>
            <div class="flex items-center justify-center space-x-2">
                <button @click="[ currentIndex = currentIndex != 0 ? currentIndex - 1 : 2, changeContent(currentIndex)]" class="flex items-center justify-center h-4 pr-6 focus:text-primary" type="button"><span class="font-bold material-symbols-rounded">arrow_left_alt</span></button>
                <button @click="changeContent(0)" type="button" class="w-4 h-4 rounded-full" :class="currentIndex == 0 ? 'bg-primary' : 'bg-[#D9D9D9]' "></button>
                <button @click="changeContent(1)" type="button" class="w-4 h-4 rounded-full " :class="currentIndex == 1 ? 'bg-primary' : 'bg-[#D9D9D9]' "></button>
                <button @click="changeContent(2)" type="button" class="w-4 h-4 rounded-full " :class="currentIndex == 2 ? 'bg-primary' : 'bg-[#D9D9D9]' "></button>
                <button @click="[ currentIndex = currentIndex != 2 ? currentIndex + 1 : 0, changeContent(currentIndex)]" class="flex items-center justify-center h-4 pl-6 focus:text-primary" type="button"><span class="font-bold material-symbols-rounded">arrow_right_alt</span></button>
            </div>
        </div>
    </section>

    <section id="campaign-message" class="flex flex-col-reverse justify-between w-full mx-auto space-y-8 md:space-y-0 md:flex-row xl:max-w-screen-xl">
        <div class="flex flex-col justify-center w-full pt-8 space-y-8 md:pt-0 md:p-4 md:w-1/2">
            <div class="md:px-4">
                <h3 class="font-semibold text-[#6C6767] pb-1">CAMPAIGN MESSAGE</h3>
                <h2 class="text-2xl font-bold">Bengkulu Bergelora</h2>
            </div>
            <div class="flex md:space-x-4">
                <span class="h-full bg-[#0BA0C8] p-0.5 rounded-full hidden md:flex"></span>
                <p class="font-Poppins text-[#4A4A4A] text-justify w-full xl:w-4/5 leading-relaxed flex flex-col text-sm xl:text-base">Bengkulu bukan sekedar daerah untuk dihuni tapi Bengkulu menjadi tempat lahir nya sosok pemuda yang berani bergagasan,merumuskan masalah dan menciptakan solusi untuk  membawa dampak untuk Indonesia. <span>Dan itu aku. Seorang pemudanya.</span></p>
            </div>
        </div>
        <div class="relative flex flex-row-reverse items-center justify-between w-full h-full md:p-4 md:w-1/2">
            <div class="bg-[#EEFBFE] w-[224px] h-[288px] lg:w-[384px] lg:h-[448px] right-0 p-6 rounded-xl flex-col justify-end items-end inline-flex">
                <img src="{{ URL::asset('assets/images/bubble.png') }}" alt="bubble-dot" class="h-20 lg:h-36">
            </div>
            <img class="absolute left-0 h-52 md:left-4 lg:h-72 rounded-2xl" src="{{ URL::asset('assets/images/campaign-message.png') }}" />
        </div>
    </section>

    <section id="key-issues" class="flex flex-col justify-between w-full mx-auto space-y-16 xl:max-w-screen-xl">
        <div class="flex flex-col items-center justify-between w-full space-y-2">
            <h3 class="font-semibold text-[#6C6767] pb-1">KEY ISSUES</h3>
            <h2 class="text-2xl font-bold">Isu Prioritas Alimah</h2>
        </div>
        <div class="flex flex-col items-center justify-center w-full space-y-6 md:px-4 md:space-y-8">
            <div class="flex flex-col w-full space-y-6 md:space-y-0 md:space-x-6 md:flex-row">
                <div class="flex space-x-4 md:w-1/2 md:space-x-8">
                   
                    <div class="bg-[#EEFBFE] w-fit h-fit p-2 rounded-lg flex md:justify-center md:items-center">
                        <span class="text-4xl material-symbols-rounded text-[#0BA0C8]">school</span>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <h4 class="font-semibold">Isu Pendidikan</h4>
                        <p class="font-Poppins text-[#4A4A4A] text-justify md:text-left text-sm md:text-base">Revolusi pendidikan adalah salah satu upaya untuk meningkatkan mutu kualitas manusia nya</p>
                    </div>
                </div>
                <div class="flex space-x-4 md:w-1/2 md:space-x-8 ">
                   
                    <div class="bg-[#EEFBFE] w-fit h-fit p-2 rounded-lg flex justify-center items-center">
                        <span class="text-4xl material-symbols-rounded text-[#0BA0C8]">sprint</span>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <h4 class="font-semibold">Isu Pemuda</h4>
                        <p class="font-Poppins text-[#4A4A4A] text-justify md:text-left text-sm md:text-base">Pemuda adalah estafet pembangunan. Kontribusi pemuda saat ini sangat diperlukan untuk menuju generasi emas 2045, untuk mencapai maka pemuda di Bengkulu perlu ditingkatkan kualitas nya agar berdaya dan berdampak untuk Bengkulu, bahkan dunia.</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-full space-y-6 md:space-y-0 md:space-x-6 md:flex-row">
                <div class="flex space-x-4 md:w-1/2 md:space-x-8">
                   
                    <div class="bg-[#EEFBFE] w-fit h-fit p-2 rounded-lg flex md:justify-center md:items-center">
                        <span class="text-4xl material-symbols-rounded text-[#0BA0C8]">storefront</span>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <h4 class="font-semibold">Isu kewirausahaan</h4>
                        <p class="font-Poppins text-[#4A4A4A] text-justify md:text-left text-sm md:text-base">Perlu ada nya pemerataan pendidikan kewirausahaan yang berkualitas di Bengkulu, karena merupakan salah satu agenda pembangunan nasional, sesuai dengan Rencana Pembangunan Jangka Menengah Nasional (RPJMN) 2020-2024, dengan target 4,5 juta wirausahawan baru pada tahun 2024.</p>
                    </div>
                </div>
                <div class="flex space-x-4 md:w-1/2 md:space-x-8 ">
                   
                    <div class="bg-[#EEFBFE] w-fit h-fit p-2 rounded-lg flex justify-center items-center">
                        <span class="text-4xl material-symbols-rounded text-[#0BA0C8]">woman</span>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <h4 class="font-semibold">Isu Perempuan</h4>
                        <p class="font-Poppins text-[#4A4A4A] text-justify md:text-left text-sm md:text-base">Pendidikan perempuan adalah investasi dalam masa depan yang lebih baik bagi semua orang. Dengan memastikan bahwa semua anak perempuan memiliki akses ke pendidikan yang berkualitas, kita dapat membangun masyarakat yang lebih adil, sejahtera, makmur dan berkelanjutan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="flex flex-col justify-between w-full pt-16 pb-10 mx-auto space-y-10 xl:max-w-screen-xl">
        <div class="flex flex-col items-center justify-between w-full space-y-2">
            <h3 class="font-semibold text-[#6C6767] pb-1">GALLERY</h3>
            <h2 class="text-2xl font-bold">Aktivitas Terkini</h2>
        </div>
        <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
            <div>
                <img class="object-cover w-full rounded-lg h-72" src="{{ URL::asset('assets/images/gallery-1.jpeg') }}" alt="">
            </div>
            <div>
                <img class="object-cover w-full rounded-lg h-72" src="{{ URL::asset('assets/images/gallery-2.jpeg') }}" alt="">
            </div>
            <div>
                <img class="object-cover w-full rounded-lg h-72" src="{{ URL::asset('assets/images/gallery-3.jpeg') }}" alt="">
            </div>
            <div>
                <img class="object-cover w-full rounded-lg h-72" src="{{ URL::asset('assets/images/gallery-4.jpeg') }}" alt="">
            </div>
            <div>
                <img class="object-cover w-full rounded-lg h-72" src="{{ URL::asset('assets/images/gallery-5.jpeg') }}" alt="">
            </div>
            <div>
                <img class="object-cover w-full rounded-lg h-72" src="{{ URL::asset('assets/images/gallery-6.jpeg') }}" alt="">
            </div>
        </div>
    </section>

    <section id="support" class="flex justify-between w-full h-full mx-auto md:space-x-4 xl:max-w-screen-xl bg-[#EEFBFE] rounded-xl p-2 md:p-4">
        <div class="hidden w-1/2 p-4 bg-cover rounded-lg md:relative md:flex" style="background-image: url('/assets/images/hero-background.png');">
            <img class="absolute h-32 lg:h-32 md:h-24 -left-24 md:-left-0 bottom-48 md:bottom-0" src="{{ URL::asset('assets/images/cloud-bottom.png') }}" alt="cloud" />
            <img class="absolute h-48 -top-6 -right-6 lg:h-48 md:h-36" src="{{ URL::asset('assets/images/cloud-top.png') }}" alt="cloud" />
            <div class="flex items-center justify-center w-full h-full">
                <h2 class="text-2xl font-medium text-white">Dukung Alimah <span class="font-bold">Menuju DPR RI 2024</span></h2>
            </div>
        </div>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdn23Lf2rTqKS6hT0W9_Ub1vkCwThsORBAnHJ-2FyIaWJ6zOg/viewform?embedded=true" height="512" frameborder="0" marginheight="0" marginwidth="0" class="w-full bg-white rounded-lg md:w-1/2">Loading…</iframe>
    </section>

    

    <footer class="flex flex-col-reverse items-center justify-center w-full h-full p-2 mx-auto md:justify-between md:flex-row md:space-x-4 xl:max-w-screen-xl">
        <div class="w-full text-center md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 Nur Alimah</span>
        </div>
        <div class="w-full text-center md:flex md:items-center md:justify-end">
        <span class="text-sm text-gray-500 uppercase sm:text-center dark:text-gray-400">Paid For By Friends of Nur Alimah</span>
        </div>
    </footer>

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
                    firstImage: "{{ URL::asset('assets/images/alimah-work-1.png') }}",
                    secondImage: "{{ URL::asset('assets/images/alimah-work-2.png') }}",
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