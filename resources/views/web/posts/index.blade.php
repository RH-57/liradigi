<!DOCTYPE html>
<html class="antialiased bg-white dark:bg-slate-900 text-slate-800 dark:text-slate-200 transition-colors duration-200">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="{{ asset('assets/web/img/logo.png') }}" type="image/png">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/web/css/output.css')}}">
  <link rel="stylesheet" href="{{asset('assets/web/css/custom.css')}}">
</head>
<body class="overflow-x-hidden">

  <!-- HEADER -->
  <header class="sticky top-0 z-50 bg-white/80 dark:bg-slate-900/70 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="#" class="flex items-center gap-1">
                <img src="{{ asset('assets/web/img/logo.png') }}"
                    alt="Logo"
                    class="w-10 h-10 object-contain">

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
                    <i class="fa-brands fa-whatsapp text-2xl"></i>
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
                <a href="#blogs" class="text-slate-700 dark:text-slate-200 font-medium py-2">Articles</a>
                <a href="{{route('home')}}" class="text-slate-700 dark:text-slate-200 font-medium py-2">Contact</a>
            </div>
        </div>

    </header>

  <section class="py-20 bg-gradient-to-b from-white to-slate-50 dark:from-slate-950 dark:to-slate-900">
  <div class="max-w-6xl mx-auto px-6">
    <h1 class="text-4xl font-extrabold text-center mb-12 text-slate-900 dark:text-white">Semua Artikel</h1>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach($posts as $post)
        <a href="{{ route('web.posts.show', $post->slug) }}"
           class="group block overflow-hidden rounded-xl shadow-md bg-white dark:bg-slate-800 hover:-translate-y-1 hover:shadow-lg transition">
          <img src="{{ asset('storage/' . $post->featured_image) }}"
               alt="{{ $post->title }}"
               class="w-full h-48 object-cover group-hover:scale-105 transition">
          <div class="p-5">
            <h2 class="font-bold text-xl text-slate-900 dark:text-white line-clamp-2">{{ $post->title }}</h2>
            <p class="text-sm text-slate-500 dark:text-slate-400 mt-2 line-clamp-3">
              {!! Str::limit(strip_tags($post->content), 120) !!}
            </p>
            <span class="text-xs text-slate-400 mt-3 block">
              <i class="fa-regular fa-calendar"></i> {{ $post->created_at->format('d M Y') }}
            </span>
          </div>
        </a>
      @endforeach
    </div>

    {{-- Pagination --}}
    <div class="mt-12">
      {{ $posts->links() }}
    </div>
  </div>
</section>



  <!-- CONTACT SECTION -->
    <section id="contact" class="relative py-24 bg-gradient-to-b from-slate-50 to-white dark:from-slate-900 dark:to-slate-950 overflow-hidden">
    <!-- Decorative blobs -->

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <!-- Title -->
            <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-slate-900 dark:text-white">
                Get in <span class="bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400 bg-clip-text text-transparent">Touch</span>
            </h2>
            <p class="mt-4 text-lg text-slate-600 dark:text-slate-300">
                Hubungi kami untuk konsultasi gratis atau diskusi project Anda.
            </p>
            </div>

            <!-- Contact Form -->
            <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Info -->
                <div class="space-y-3">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white">Kontak Kami</h3>
                    <p class="text-slate-600 dark:text-slate-300">
                    Kami siap membantu Anda dengan solusi digital terbaik. Isi form di samping atau hubungi kami langsung:
                    </p>
                    <ul class="space-y-4 text-slate-600 dark:text-slate-300">
                    <li class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-green-600 via-emerald-500 to-teal-400 flex items-center justify-center text-white">
                        <i class="fas fa-map-marker-alt"></i>
                        </div>
                        {{$contacts->address}}
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-green-600 via-emerald-500 to-teal-400 flex items-center justify-center text-white">
                        <i class="fas fa-phone"></i>
                        </div>
                        +{{$contacts->phone}}
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-green-600 via-emerald-500 to-teal-400 flex items-center justify-center text-white">
                        <i class="fas fa-envelope"></i>
                        </div>
                        {{$contacts->email}}
                    </li>
                    </ul>
                </div>

                <!-- Right Form -->
                <div class="p-8 rounded-2xl bg-white/10 backdrop-blur-xl border border-white/20 shadow-xl">
                    <form action="{{route('message.store')}}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300">Nama</label>
                            <input type="text" name="name" class="mt-2 w-full px-4 py-3 rounded-lg bg-white/70 dark:bg-slate-800/70 border border-slate-300 dark:border-slate-700 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition">
                            </div>
                            <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300">Email</label>
                            <input type="text" name="email" class="mt-2 w-full px-4 py-3 rounded-lg bg-white/70 dark:bg-slate-800/70 border border-slate-300 dark:border-slate-700 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300">Subjek</label>
                            <input type="text" name="subject" class="mt-2 w-full px-4 py-3 rounded-lg bg-white/70 dark:bg-slate-800/70 border border-slate-300 dark:border-slate-700 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300">Pesan</label>
                            <textarea name="message" rows="5" class="mt-2 w-full px-4 py-3 rounded-lg bg-white/70 dark:bg-slate-800/70 border border-slate-300 dark:border-slate-700 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition"></textarea>
                        </div>
                        <button type="submit" class="w-full px-6 py-3 rounded-lg bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400 text-white font-semibold shadow-md hover:shadow-lg hover:scale-105 transform transition">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

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

  <script src="{{asset('assets/web/js/app.js')}}"></script>
</body>
</html>
