<!DOCTYPE html>
<html lang="id" class="antialiased bg-white dark:bg-slate-900 text-slate-800 dark:text-slate-200 transition-colors duration-200">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('assets/web/img/favicon.ico') }}" type="image/png">

    <title>LIRADIGI | Partner Digital Untuk Bisnis Anda</title>
    <meta name="description" content="Kami membantu brand dan bisnis Anda tumbuh dengan teknologi digital, desain modern, dan strategi tepat sasaran.">
    <meta name="keywords" content="digital marketing, jasa website, branding, teknologi, SEO, desain grafis, aplikasi web">
    <meta name="keywords" content="digital marketing, jasa pembuatan website, branding, teknologi digital, SEO, desain grafis, pengembangan aplikasi, LIRADIGI, agency digital Indonesia, jasa digital marketing Jakarta, web development">
    <meta name="author" content="LIRADIGI - Lintas Arah Digital">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

     <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="website">
    <meta property="og:title" content="LIRADIGI | Partner Digital Untuk Bisnis Anda">
    <meta property="og:description" content="Kami membantu brand dan bisnis Anda tumbuh dengan teknologi digital, desain modern, dan strategi tepat sasaran.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="LIRADIGI">
    <meta property="og:image" content="{{ asset('assets/web/img/hero.png') }}">
    <meta property="og:image:alt" content="LIRADIGI - Partner Digital Untuk Bisnis Anda">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="LIRADIGI | Partner Digital Untuk Bisnis Anda">
    <meta name="twitter:description" content="Kami membantu brand dan bisnis Anda tumbuh dengan teknologi digital, desain modern, dan strategi tepat sasaran.">
    <meta name="twitter:image" content="{{ asset('assets/web/img/hero.png') }}">
    <meta name="twitter:creator" content="@liradigi">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/web/css/output.css')}}">
    <link rel="stylesheet" href="{{asset('assets/web/css/custom.css')}}">

    <!-- Performance & SEO -->
    <meta name="theme-color" content="#10b981">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  </head>
  <body class="overflow-x-hidden">
    <header class="sticky top-0 z-50 bg-white/80 dark:bg-slate-900/70 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="{{route('home')}}" class="flex items-center gap-1">
                <img src="{{ asset('assets/web/img/logo.png') }}"
                    alt="Logo"
                    class="w-10 h-10 object-contain"
                    loading="lazy">


                <span class="text-2xl font-extrabold text-slate-900 dark:text-slate-100 tracking-tight shadow-2xl">LIRADIGI.</span>
            </a>

            <nav class="hidden md:flex items-center gap-8">
                <a href="#home" class="text-lg font-bold relative text-slate-700 dark:text-slate-200 hover:text-sage-700 dark:hover:text-green-300 font-bold transition group">Home
                    <span class="absolute left-0 -bottom-1 w-0 h-[2px]
                        bg-gradient-to-r from-emerald-400 via-teal-400 to-cyan-400
                        transition-all duration-200 group-hover:w-full">
                    </span>
                </a>
                <a href="#services" class="text-lg font-bold relative text-slate-600 dark:text-slate-300 hover:text-sage-700 dark:hover:text-green-300 font-bold transition group">Services
                     <span class="absolute left-0 -bottom-1 w-0 h-[2px]
                        bg-gradient-to-r from-emerald-400 via-teal-400 to-cyan-400
                        transition-all duration-200 group-hover:w-full">
                    </span>
                </a>
                <a href="#projects" class="text-lg font-bold relative text-slate-600 dark:text-slate-300 hover:text-sage-700 dark:hover:text-green-300 font-bold transition group">Projects
                     <span class="absolute left-0 -bottom-1 w-0 h-[2px]
                        bg-gradient-to-r from-emerald-400 via-teal-400 to-cyan-400
                        transition-all duration-200 group-hover:w-full">
                    </span>
                </a>
                <a href="#testimonials" class="text-lg font-bold relative text-slate-600 dark:text-slate-300 hover:text-sage-700 dark:hover:text-green-300 font-bold transition group">Testimonials
                     <span class="absolute left-0 -bottom-1 w-0 h-[2px]
                        bg-gradient-to-r from-emerald-400 via-teal-400 to-cyan-400
                        transition-all duration-200 group-hover:w-full">
                    </span>
                </a>
                <a href="{{route('posts')}}" class="text-lg font-bold relative text-slate-600 dark:text-slate-300 hover:text-sage-700 dark:hover:text-green-300 font-bold transition group">Articles
                     <span class="absolute left-0 -bottom-1 w-0 h-[2px]
                        bg-gradient-to-r from-emerald-400 via-teal-400 to-cyan-400
                        transition-all duration-200 group-hover:w-full">
                    </span>
                </a>
                <a href="#contact" class="text-lg font-bold relative text-slate-600 dark:text-slate-300 hover:text-sage-700 dark:hover:text-green-300 font-bold transition group">Contact
                     <span class="absolute left-0 -bottom-1 w-0 h-[2px]
                        bg-gradient-to-r from-emerald-400 via-teal-400 to-cyan-400
                        transition-all duration-200 group-hover:w-full">
                    </span>
                </a>
            </nav>


            <div class="flex items-center gap-3">
                <a href="#get-started"
                    class="hidden md:flex group relative items-center justify-center px-6 py-3 rounded-lg
                        bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400
                        text-white text-xl font-semibold shadow-md overflow-hidden
                        transition-all duration-500 ease-in-out hover:shadow-lg hover:scale-105">

                    <!-- Teks -->
                    <span
                    class="transition-all duration-300 ease-in-out group-hover:-translate-x-full group-hover:opacity-0">
                    Konsultasi Gratis
                    </span>

                    <!-- Icon WhatsApp -->
                    <i
                    class="fa-brands fa-whatsapp text-4xl absolute opacity-0 translate-x-full
                            transition-all duration-500 ease-in-out
                            group-hover:translate-x-0 group-hover:opacity-100
                            group-hover:text-white">
                    </i>

                    <!-- Efek sinar -->
                    <span
                    class="absolute inset-0 bg-white rounded-lg opacity-0 scale-0
                            group-hover:opacity-30 group-hover:scale-150 blur-2xl
                            transition-all duration-700 ease-out">
                    </span>
                </a>
                </div>

                <button id="mobile-menu-button" class="md:hidden p-2 rounded-md text-slate-700 dark:text-slate-200 hover:bg-slate-200 dark:hover:bg-slate-800 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu"
            class="hidden md:hidden fixed top-[64px] left-0 right-0 z-40
                    bg-white/70 dark:bg-slate-900/70">
            <div class="max-w-7xl mx-auto px-6 py-6 flex flex-col gap-4">
                <a href="#home" class="text-slate-700 dark:text-slate-200 font-medium py-2">Home</a>
                <a href="#services" class="text-slate-700 dark:text-slate-200 font-medium py-2">Services</a>
                <a href="#projects" class="text-slate-700 dark:text-slate-200 font-medium py-2">Projects</a>
                <a href="#testimonials" class="text-slate-700 dark:text-slate-200 font-medium py-2">Testimonials</a>
                <a href="{{route('posts')}}" class="text-slate-700 dark:text-slate-200 font-medium py-2">Articles</a>
                <a href="#contact" class="text-slate-700 dark:text-slate-200 font-medium py-2">Contact</a>
            </div>
        </div>

    </header>

    <!-- HERO SECTION -->
    <section id="home" class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-12 py-24 relative">
            <!-- Decorative gradient blob behind text -->
            <div class="absolute -top-10 -left-20 w-96 h-96 bg-gradient-to-tr from-green-500 via-teal-400 to-blue-400 rounded-full blur-3xl opacity-30"></div>
            <!-- Text Content -->
            <div class="flex-1 text-center lg:text-left relative z-10">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight tracking-tight text-slate-900 dark:text-white">
                    Partner Digital Untuk <span class="bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400 bg-clip-text text-transparent">Bisnis Anda</span>
                </h1>
                <p class="mt-6 text-lg md:text-xl text-slate-600 dark:text-slate-300 max-w-2xl mx-auto lg:mx-0">
                    Kami menyediakan layanan Pembuatan Website untuk bisnis anda dan membantu bisnis Anda tumbuh dengan teknologi digital terbaru, desain modern, aman, dan strategi tepat sasaran.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#get-started"
                    class="group relative flex items-center justify-center px-6 py-3 rounded-lg
                        bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400
                        text-white text-xl font-semibold shadow-md overflow-hidden
                        transition-all duration-500 ease-in-out hover:shadow-lg hover:scale-105">

                        <!-- Teks -->
                        <span
                        class="transition-all duration-300 ease-in-out group-hover:-translate-x-full group-hover:opacity-0">
                        Konsultasi Gratis
                        </span>

                        <!-- Icon WhatsApp -->
                        <i
                        class="fa-brands fa-whatsapp text-4xl absolute opacity-0 translate-x-full
                                transition-all duration-500 ease-in-out
                                group-hover:translate-x-0 group-hover:opacity-100
                                group-hover:text-white">
                        </i>

                        <!-- Efek sinar -->
                        <span
                        class="absolute inset-0 bg-white rounded-lg opacity-0 scale-0
                                group-hover:opacity-30 group-hover:scale-150 blur-2xl
                                transition-all duration-700 ease-out">
                        </span>
                    </a>
                    <a href="#projects"
                        class="px-6 py-3 rounded-lg border border-slate-300 dark:border-slate-700
                         text-slate-700 dark:text-slate-200 font-semibold hover:bg-slate-100
                          dark:hover:bg-slate-800 transition-all duration-300 ease-in-out group-hover:-translate-x-full group-hover:opacity-0">
                    Lihat Project
                    </a>
                </div>
            </div>

            <!-- Image / Illustration -->
            <div class="hidden flex-1 relative lg:block">
                <div class="w-full max-w-2xl mx-auto lg:mx-0 relative z-10">
                    <!-- Laptop -->
                    <img src="{{ asset('assets/web/img/hero.png') }}"
                        alt="Laptop"
                        class="w-full drop-shadow-2xl animate-float"
                        loading="lazy">

                    <!-- Smartphone (posisi di depan laptop, kanan bawah) -->
                    <img src="{{ asset('assets/web/img/hero-smartphone.png') }}"
                        alt="Smartphone"
                        class="absolute top-10 left-10 w-40 drop-shadow-2xl animate-float-slow z-20 translate-y-4"
                        loading="lazy">

                </div>

                <!-- Decorative gradient blob (different color) -->
                <div class="absolute top-20 -right-20 w-96 h-96 bg-gradient-to-tr from-purple-500 via-pink-400 to-rose-400 rounded-full blur-3xl opacity-30"></div>
            </div>
        </div>
    </section>

    <section id="services" class="relative py-24 bg-gradient-to-b from-slate-50 to-white dark:from-slate-900 dark:to-slate-950">
        <!-- Blob -->
        <div class="absolute -top-20 left-1/2 -translate-x-1/2
                    w-[20rem] h-[10rem] sm:w-[30rem] sm:h-[15rem] lg:w-[40rem] lg:h-[20rem]
                    bg-gradient-to-tr from-green-600 via-emerald-500 to-teal-400
                    rounded-full blur-3xl opacity-20">
        </div>
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-extrabold text-slate-900 dark:text-white">
            Kami Mempercepat <span class="bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400 bg-clip-text text-transparent">Pertumbuhan Bisnis </span>Anda
            </h2>
            <p class="mt-4 text-lg text-slate-600 dark:text-slate-300">
            Dengan Layanan yang Kami berikan, dapat membantu mempercepat pertumbuhan bisnis anda naik ke level berikutnya.
            </p>

            <div class="mt-16 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach($services as $service)
                <!-- Card -->
                <div class="group relative p-8 rounded-2xl bg-white/10 backdrop-blur-lg border border-white/20 shadow-xl hover:scale-105 transition transform">
                    <div class="w-16 h-16 flex items-center justify-center rounded-xl bg-gradient-to-tr from-green-600 via-emerald-500 to-teal-400 text-white text-3xl shadow-lg mx-auto">
                    <i class="fas {{$service->icon}}"></i>
                    </div>
                    <h3 class="mt-6 text-xl font-bold text-slate-900 dark:text-white">{{$service->title}}</h3>
                    <p class="mt-3 text-slate-600 dark:text-slate-300 opacity-80 group-hover:opacity-100 transition">
                    {{$service->short_description}}
                    </p>
                </div>
                @endforeach

            </div>
            <div class="mt-16 flex flex-col sm:flex-row gap-4 justify-center lg:justify-center">
                <a href="#get-started"
                    class="group relative flex items-center justify-center px-6 py-3 rounded-lg
                        bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400
                        text-white text-xl font-semibold shadow-md overflow-hidden
                        transition-all duration-500 ease-in-out hover:shadow-lg hover:scale-105">

                    <!-- Teks -->
                    <span
                    class="transition-all duration-300 ease-in-out group-hover:-translate-x-full group-hover:opacity-0">
                    Konsultasi Gratis
                    </span>

                    <!-- Icon WhatsApp -->
                    <i
                    class="fa-brands fa-whatsapp text-4xl absolute opacity-0 translate-x-full
                            transition-all duration-500 ease-in-out
                            group-hover:translate-x-0 group-hover:opacity-100
                            group-hover:text-white">
                    </i>

                    <!-- Efek sinar -->
                    <span
                    class="absolute inset-0 bg-white rounded-lg opacity-0 scale-0
                            group-hover:opacity-30 group-hover:scale-150 blur-2xl
                            transition-all duration-700 ease-out">
                    </span>
                </a>
            </div>

        </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section id="projects" class="relative py-24 bg-gradient-to-b from-white to-slate-50 dark:from-slate-950 dark:to-slate-900 overflow-hidden">
    <!-- Decorative gradient blobs -->
        <div class="absolute bottom-30 left-1 -translate-x-1/2 w-[40rem] h-[25rem] bg-gradient-to-tr from-green-600 via-emerald-500 to-teal-400 rounded-full blur-3xl opacity-20"></div>
        <div class="absolute bottom-30 right-1 w-[30rem] h-[30rem] bg-gradient-to-tr from-purple-500 via-pink-400 to-rose-400 rounded-full blur-3xl opacity-20"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <!-- Section Title -->
            <div class="text-center">
                <h2 class="text-4xl font-extrabold text-slate-900 dark:text-white">
                    <span class="bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400 bg-clip-text text-transparent">Project</span> Kami
                </h2>
                <p class="mt-4 text-lg text-slate-600 dark:text-slate-300">
                    Beberapa karya terbaik yang telah kami buat untuk klien kami.
                </p>
            </div>

            <!-- Projects Grid -->
            <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($projects as $project)
                <!-- Project Card -->
                <div class="group relative overflow-hidden rounded-2xl shadow-xl bg-white dark:bg-slate-800">
                    <img src="{{ optional($project->images->first())->image
                        ? asset('storage/' . optional($project->images->first())->image)
                        : asset('assets/web/img/default.png') }}"
                    alt="{{$project->name}}"
                    class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110"
                    loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition">
                    <div class="absolute bottom-6 left-6 text-white">
                        <h3 class="text-xl font-bold">{{$project->name}}</h3>
                        <p class="text-sm text-slate-200 line-clamp-3">{!! Str::limit(strip_tags(Purify::clean($project->description)), 120) !!}</p>
                        <a href="{{route('project.show', $project->slug)}}"
                        class="mt-3 inline-block px-4 py-2 rounded-md bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400 text-white font-semibold shadow hover:shadow-lg hover:scale-105 transition">
                        Lihat Detail
                        </a>
                    </div>
                    </div>
                </div>
                @endforeach

            </div>

            <!-- CTA Button -->
            <div class="mt-12 text-center">
            <a href="{{route('project')}}"
                        class="px-6 py-3 rounded-lg border border-slate-300 dark:border-slate-700
                         text-slate-700 dark:text-slate-200 font-semibold hover:bg-slate-100
                          dark:hover:bg-slate-800 transition-all duration-300 ease-in-out group-hover:-translate-x-full group-hover:opacity-0">
                    Lihat Semua Project
                    </a>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section id="faq" class="relative py-24 bg-gradient-to-b from-white to-slate-50 dark:from-slate-950 dark:to-slate-900 overflow-hidden">
        <!-- Decorative gradient blob -->
        <div class="absolute -top-20 left-1/2 -translate-x-1/2
                    w-[25rem] h-[15rem] sm:w-[35rem] sm:h-[20rem] lg:w-[45rem] lg:h-[25rem]
                    bg-gradient-to-tr from-green-600 via-emerald-500 to-teal-400
                    rounded-full blur-3xl opacity-10"></div>

        <div class="max-w-4xl mx-auto px-6 relative z-10">
            <!-- Title -->
            <div class="text-center">
                <h2 class="text-4xl font-extrabold text-slate-900 dark:text-white">
                    <span class="bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400 bg-clip-text text-transparent">FAQs</span>
                </h2>
                <p class="mt-4 text-lg text-slate-600 dark:text-slate-300">
                    Pertanyaan umum yang sering diajukan oleh klien kami seputar layanan dan proses kerja.
                </p>
            </div>

            <!-- Accordion -->
            <div class="mt-12 space-y-1">
            @foreach ($faqs as $faq)
                <div class="faq-item border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden transition-all">
                    <button class="w-full flex justify-between items-center p-5 text-left font-semibold text-slate-900 dark:text-white focus:outline-none group"
                        onclick="toggleFAQ(this)">
                        <span>{{ $faq->question }}</span>
                        <i class="fa-solid fa-chevron-down text-slate-500 transition-transform duration-300"></i>
                    </button>
                    <div class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out px-5 text-slate-600 dark:text-slate-300">
                        <div class="pb-5 prose prose-slate dark:prose-invert max-w-none">
                            {!! $faq->answer !!}
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section id="testimonials" class="relative py-24 bg-gradient-to-b from-slate-50 to-white dark:from-slate-900 dark:to-slate-950 overflow-hidden">
        <!-- Decorative gradient blob -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
                    w-[25rem] h-[15rem] sm:w-[35rem] sm:h-[20rem] lg:w-[45rem] lg:h-[25rem]
                    bg-gradient-to-tr from-purple-500 via-pink-400 to-rose-400
                    rounded-full blur-3xl opacity-10"></div>

        <div class="max-w-4xl mx-auto px-6 relative z-10">
            <!-- Title -->
            <div class="text-center">
                <h2 class="text-4xl font-extrabold text-slate-900 dark:text-white">
                    What Our <span class="bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400 bg-clip-text text-transparent">Clients Say</span>
                </h2>
                <p class="mt-4 text-lg text-slate-600 dark:text-slate-300">
                    Testimoni nyata dari klien yang sudah mempercayakan project mereka kepada kami.
                </p>
            </div>

            <!-- Slider Wrapper -->
            <div class="relative mt-16 overflow-hidden">
                <div id="testimonial-slider" class="flex transition-transform duration-700 ease-in-out">

                    @foreach($testimonials as $testimonial)
                        <div class="min-w-full px-6">
                            <div class="p-8 rounded-2xl bg-white/10 backdrop-blur-lg border border-white/20 shadow-xl text-center">

                                <!-- Foto -->
                                <img src="{{ asset('storage/' . $testimonial->image) }}"
                                    alt="{{ $testimonial->name }}"
                                    class="w-20 h-20 rounded-full mx-auto shadow-lg object-cover">

                                <!-- Nama & posisi -->
                                <h3 class="mt-4 font-bold text-slate-900 dark:text-white">
                                    {{ $testimonial->name }}
                                </h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400">
                                    {{ $testimonial->position }}
                                </p>

                                <!-- Isi testimonial -->
                                <p class="mt-6 text-lg italic text-slate-700 dark:text-slate-300">
                                    “{{ $testimonial->testimonial }}”
                                </p>

                                <!-- Rating -->
                                <div class="flex justify-center mt-4 text-yellow-400">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $testimonial->rating)
                                            <i class="fas fa-star"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </section>


    <!-- CONTACT SECTION -->
    @include('web.components.message')



    <!-- FOOTER SECTION -->
    <footer class="relative pt-16 pb-10 overflow-hidden">
    <!-- Decorative gradient blobs -->
        <div class="absolute -buttom-20 -left-40 w-96 h-96 bg-gradient-to-tr from-green-600 via-emerald-500 to-teal-400 rounded-full blur-3xl opacity-20"></div>
        <div class="absolute -bottom-20 -right-20 w-96 h-96 bg-gradient-to-tr from-purple-500 via-pink-400 to-rose-400 rounded-full blur-3xl opacity-20"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <!-- Top footer -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <!-- Brand -->
                <div>
                    <a href="#" class="flex items-center gap-2">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-tr from-green-600 via-emerald-500 to-teal-400 flex items-center justify-center shadow-md">
                        <span class="text-white font-extrabold text-2xl">LD</span>
                    </div>
                    <span class="text-2xl font-extrabold text-slate-800 dark:text-slate-100">LIRADIGI.</span>
                    </a>
                    <p class="mt-4 text-slate-600 text-sm">
                    Partner Digital Untuk Bisnis Anda.
                    </p>
                    <div class="flex gap-2 mt-6">
                        @foreach($medsos as $media)
                        <a aria-label="{{$media->name}}" href="{{$media->url}}" target="_blank" class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 transition">
                            <i class="fab {{$media->icon}}"></i>
                        </a>
                        @endforeach
                    </div>
                </div>

                <!-- Menu Shortcut -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Company</h3>
                    <ul class="space-y-3 text-slate-600">
                    <li><a href="#home" class="hover:text-green-600 transition">Home</a></li>
                    <li><a href="#services" class="hover:text-green-600 transition">Services</a></li>
                    <li><a href="#projects" class="hover:text-green-600 transition">Projects</a></li>
                    <li><a href="#testimonials" class="hover:text-green-600 transition">Testimonials</a></li>
                    <li><a href="#blogs" class="hover:text-green-600 transition">Blogs</a></li>
                    <li><a href="#contact" class="hover:text-green-600 transition">Contact</a></li>
                    </ul>
                </div>

                <!-- Services Shortcut -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Services</h3>
                    <ul class="space-y-3 text-slate-600">
                        @foreach($services as $service)
                        <li><a href="#" class="hover:text-green-600 transition">{{$service->title}}</a></li>
                        @endforeach
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-3 text-slate-600">
                    <li><i class="fas fa-map-marker-alt mr-2"></i> {{$contacts->address}}</li>
                    <li><i class="fas fa-phone mr-2"></i> +{{$contacts->phone}}</li>
                    <li><i class="fas fa-envelope mr-2"></i> {{$contacts->email}}</li>
                    </ul>
                </div>
            </div>

            <!-- Bottom footer -->
            <div class="mt-12 pt-6 border-t border-slate-700 text-center text-sm text-slate-600">
            © 2025 <a href=""><strong>Lintas Arah Digital</strong></a> All rights reserved.
            </div>
        </div>
    </footer>

    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
    <script src="{{asset('assets/web/js/app.js')}}"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contactForm');
        if (!form) return;

        form.addEventListener('submit', function(event) {
            event.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute("{{ config('services.recaptcha.site_key') }}", {action: 'submit'})
                    .then(function(token) {
                        // isi token ke hidden input
                        document.getElementById('g-recaptcha-response').value = token;
                        // tunggu sedikit agar terisi
                        setTimeout(() => {
                            form.submit();
                        }, 200);
                    });
            });
        });
    });
    </script>
  </body>
</html>
