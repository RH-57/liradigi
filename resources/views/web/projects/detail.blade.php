<!DOCTYPE html>
<html class="antialiased bg-white dark:bg-slate-900 text-slate-800 dark:text-slate-200 transition-colors duration-200">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="{{ asset('assets/web/img/logo.png') }}" type="image/png">
  <title>{{$project->name}} - LIRADIGI | Portfolio Project</title>

  <meta name="title" content="{{$project->meta_title}}">
  <meta name="description" content="{{$project->meta_description}}">
  <link rel="canonical" href="{{url()->current()}}">

  <!-- Open Graph Meta Tags -->
  <meta property="og:title" content="{{ $project->meta_title }} - Liradigi">
  <meta property="og:description" content="{{ $project->meta_description }}">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:type" content="website">
  @if($project->images->first())
  <meta property="og:image" content="{{ asset('storage/' . $project->images->first()->image) }}">
  @endif
  <meta property="og:site_name" content="Liradigi">

   <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="{{ $project->meta_title }} - Liradigi">
  <meta name="twitter:description" content="{{ $project->meta_description }}">
  @if($project->images->first())
  <meta name="twitter:image" content="{{ asset('storage/' . $project->images->first()->image) }}">
  @endif

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/web/css/output.css')}}">
  <link rel="stylesheet" href="{{asset('assets/web/css/custom.css')}}">
</head>
<body class="overflow-x-hidden">

  <!-- HEADER -->
  <header class="sticky top-0 z-50 bg-white/80 dark:bg-slate-900/70 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="{{route('home')}}" class="flex items-center gap-1">
                <img src="{{ asset('assets/web/img/logo.png') }}"
                    alt="Logo"
                    class="w-10 h-10 object-contain">

                <span class="text-2xl font-extrabold text-slate-900 dark:text-slate-100 tracking-tight shadow-2xl">LIRADIGI.</span>
            </a>

            <nav class="hidden md:flex items-center gap-8">
                <a href="{{route('home')}}" class="text-lg font-bold relative text-slate-700 dark:text-slate-200 hover:text-sage-700 dark:hover:text-green-300 font-bold transition group">Home
                    <span class="absolute left-0 -bottom-1 w-0 h-[2px]
                        bg-gradient-to-r from-emerald-400 via-teal-400 to-cyan-400
                        transition-all duration-200 group-hover:w-full">
                    </span>
                </a>
                <a href="{{route('home')}}" class="text-lg font-bold relative text-slate-600 dark:text-slate-300 hover:text-sage-700 dark:hover:text-green-300 font-bold transition group">Services
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
                <a href="{{route('home')}}" class="text-lg font-bold relative text-slate-600 dark:text-slate-300 hover:text-sage-700 dark:hover:text-green-300 font-bold transition group">Testimonials
                     <span class="absolute left-0 -bottom-1 w-0 h-[2px]
                        bg-gradient-to-r from-emerald-400 via-teal-400 to-cyan-400
                        transition-all duration-200 group-hover:w-full">
                    </span>
                </a>
                <a href="#blogs" class="text-lg font-bold relative text-slate-600 dark:text-slate-300 hover:text-sage-700 dark:hover:text-green-300 font-bold transition group">Articles
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
                <!-- Get Started button (desktop only) -->
                <a href="https://wa.me/{{$contacts->phone}}?text=I'm%20interested%20in%20your%20car%20for%20sale" target="_blank" class="hidden lg:inline-block px-5 py-2 rounded-lg bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400 text-white text-xl font-semibold shadow-md hover:shadow-lg hover:scale-105 transform transition">
                    Konsultasi Gratis
                </a>
                <button id="mobile-menu-button" class="md:hidden p-2 rounded-md text-slate-700 dark:text-slate-200 hover:bg-slate-200 dark:hover:bg-slate-800 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu"
            class="hidden md:hidden fixed top-[64px] left-0 right-0 z-40
                    bg-white/70 dark:bg-slate-900/70 backdrop-blur-sm">
            <div class="max-w-7xl mx-auto px-6 py-6 flex flex-col gap-4">
                <a href="{{route('home')}}" class="text-slate-700 dark:text-slate-200 font-medium py-2">Home</a>
                <a href="{{route('home')}}" class="text-slate-700 dark:text-slate-200 font-medium py-2">Services</a>
                <a href="{{route('home')}}" class="text-slate-700 dark:text-slate-200 font-medium py-2">Projects</a>
                <a href="{{route('home')}}" class="text-slate-700 dark:text-slate-200 font-medium py-2">Testimonials</a>
                <a href="{{ route('posts') }}" class="text-slate-700 dark:text-slate-200 font-medium py-2">Articles</a>
                <a href="{{route('home')}}" class="text-slate-700 dark:text-slate-200 font-medium py-2">Contact</a>
            </div>
        </div>

    </header>


    <section class="relative py-24 bg-gradient-to-b from-white to-slate-50 dark:from-slate-950 dark:to-slate-900 overflow-hidden">
  <!-- Decorative gradient blobs -->
  <div class="absolute -top-20 -left-20 w-[30rem] h-[30rem] bg-gradient-to-tr from-green-600 via-emerald-500 to-teal-400 rounded-full blur-3xl opacity-20"></div>
  <div class="absolute top-40 -right-20 w-[25rem] h-[25rem] bg-gradient-to-tr from-purple-500 via-pink-400 to-rose-400 rounded-full blur-3xl opacity-20"></div>

  <div class="max-w-7xl mx-auto px-6 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

      <!-- LEFT: Project Detail -->
      <div>
        <!-- Title -->
        <h1 class="text-4xl font-extrabold text-slate-900 dark:text-white mb-4">
          <span class="bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400 bg-clip-text text-transparent">
            {{$project->name}}
          </span>
        </h1>
        <!-- Description -->
        <p class="text-lg text-slate-600 dark:text-slate-300 mb-6 text-left">
          {!! Purify::clean($project->description) !!}
        </p>

        <!-- Info badges -->
        <div class="flex flex-wrap gap-6 mt-6 text-sm">
          <!-- URL -->
          <div>
            <span class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1">URL</span>
            <a href="{{$project->url}}" target="_blank"
              class="px-3 py-1 rounded-full bg-emerald-50 text-emerald-700
                     dark:bg-emerald-900/40 dark:text-emerald-300
                     hover:bg-emerald-100 dark:hover:bg-emerald-800 transition">
              <strong>{{$project->url}}</strong>
            </a>
          </div>
          <!-- Year -->
          <div>
            <span class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1">Year</span>
            <span class="px-3 py-1 rounded-full bg-teal-50 text-teal-700
                         dark:bg-teal-900/40 dark:text-teal-300">
              <strong>{{$project->year}}</strong>
            </span>
          </div>
          <!-- Tech Stack -->
          <div>
            <span class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1">Tech Stack</span>
            <span class="px-3 py-1 rounded-full bg-purple-50 text-purple-700
                         dark:bg-purple-900/40 dark:text-purple-300">
              <strong>{{$project->techstack}}</strong>
            </span>
          </div>
        </div>
      </div>

      <!-- RIGHT: Project Gallery -->
      <div class="max-w-5xl mx-auto">
        <!-- Foto Besar -->
        <div class="mb-4">
            <img id="mainImage" src="{{ optional($project)->images->first()
                                ? asset('storage/' . $project->images->first()->image)
                                : asset('assets/web/img/default.png') }}"
                                alt="{{$project->name}}"
            class="w-full h-72 object-cover rounded-xl shadow-lg transition">
        </div>

        <!-- Grid Foto Kecil -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            @foreach($project->images as $image)
            <img src="{{ asset('storage/' . $image->image) }}"
                alt="Thumbnail"
                class="thumbnail cursor-pointer h-20 w-full object-cover rounded-lg shadow-md hover:opacity-80 transition">
            @endforeach
        </div>
    </div>

    </div>
  </div>
</section>



   <!-- RELATED PROJECTS -->
    @if($relatedProjects->count())
    <section class="py-20 bg-gradient-to-b from-slate-50 to-white dark:from-slate-900 dark:to-slate-950">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-slate-900 dark:text-white mb-12">Project Lainnya</h2>

            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($relatedProjects as $rel)
                <div class="group relative overflow-hidden rounded-2xl shadow-lg bg-white dark:bg-slate-800
                            transition-transform duration-500 hover:-translate-y-2 hover:shadow-2xl">

                    <!-- Image -->
                    <img src="{{ asset('storage/' . $rel->images->first()->image) }}"
                        alt="{{ $rel->name }}"
                        class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent
                                opacity-0 group-hover:opacity-100 transition">

                        <div class="absolute bottom-6 left-6 right-6 text-white">
                            <h3 class="text-xl font-bold">{{ $rel->name }}</h3>
                            <p class="text-sm text-slate-200 line-clamp-3">{!! Purify::clean($rel->description) !!}</p>
                            <a href="{{ route('project.show', $rel->slug) }}"
                            class="mt-3 inline-block px-4 py-2 rounded-md bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400
                                    text-white font-semibold shadow hover:shadow-lg hover:scale-105 transition">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif



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
                        <a href="{{$media->url}}" target="_blank" class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 transition">
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

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/{{$contacts->phone}}?text=Halo%20saya%20tertarik%20dengan%20layanan%20Anda"
        target="_blank"
        class="group fixed bottom-6 right-1 z-50 w-16 h-16 rounded-full
                bg-gradient-to-tr from-green-600 via-emerald-500 to-teal-400
                flex items-center justify-center text-white text-3xl shadow-lg
                hover:scale-110 hover:shadow-2xl transition-all duration-300">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

  <script src="{{asset('assets/web/js/app.js')}}" defer></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        const mainImage = document.getElementById("mainImage");
        const thumbnails = document.querySelectorAll(".thumbnail");

        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener("click", function () {
                // Ganti src gambar utama dengan src thumbnail yang diklik
                mainImage.src = this.src;

                // Optional: kasih efek highlight di thumbnail yang aktif
                thumbnails.forEach(t => t.classList.remove("ring-4", "ring-emerald-500"));
                this.classList.add("ring-4", "ring-emerald-500");
            });
        });
    });
    </script>
</body>
</html>
