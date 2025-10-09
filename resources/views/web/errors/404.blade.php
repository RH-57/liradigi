<!DOCTYPE html>
<html lang="id" class="antialiased bg-white dark:bg-slate-900 text-slate-800 dark:text-slate-200 transition-colors duration-200">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="{{ asset('assets/web/img/favicon.ico') }}" type="image/png">
  <title>Halaman Tidak Ditemukan | LIRADIGI</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/web/css/output.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/web/css/custom.css') }}">
</head>

<body class="overflow-hidden flex flex-col min-h-screen items-center justify-center relative">
  <!-- Background Gradient Blobs -->
  <div class="absolute -top-20 -left-20 w-96 h-96 bg-gradient-to-tr from-green-500 via-teal-400 to-blue-400 rounded-full blur-3xl opacity-30"></div>
  <div class="absolute bottom-0 right-0 w-[28rem] h-[28rem] bg-gradient-to-tr from-purple-500 via-pink-400 to-rose-400 rounded-full blur-3xl opacity-30"></div>

  <!-- Main Content -->
  <div class="relative z-10 text-center px-6">
    <h1 class="text-[8rem] font-extrabold text-slate-900 dark:text-white leading-none tracking-tight animate-pulse">
      404
    </h1>
    <h2 class="mt-4 text-3xl font-bold text-slate-800 dark:text-slate-200">
      Halaman Tidak Ditemukan
    </h2>
    <p class="mt-3 text-lg text-slate-600 dark:text-slate-400 max-w-md mx-auto">
      Sepertinya halaman yang kamu cari tidak tersedia atau telah dipindahkan.
    </p>

    <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
      <a href="{{ route('home') }}"
         class="group relative flex items-center justify-center px-6 py-3 rounded-lg
         bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400
         text-white text-lg font-semibold shadow-md overflow-hidden
         transition-all duration-500 ease-in-out hover:shadow-lg hover:scale-105">
        <span class="transition-all duration-300 ease-in-out group-hover:-translate-x-full group-hover:opacity-0">
          Kembali ke Beranda
        </span>
        <i class="fa-solid fa-arrow-left text-2xl absolute opacity-0 translate-x-full
            transition-all duration-500 ease-in-out
            group-hover:translate-x-0 group-hover:opacity-100
            group-hover:text-white"></i>
        <span class="absolute inset-0 bg-white rounded-lg opacity-0 scale-0
            group-hover:opacity-30 group-hover:scale-150 blur-2xl
            transition-all duration-700 ease-out"></span>
      </a>

      <a href="https://wa.me/{{ $contacts->phone }}?text=Hallo%20saya%20mengalami%20error%20di%20website%20LIRADIGI"
         target="_blank"
         class="px-6 py-3 rounded-lg border border-slate-300 dark:border-slate-700
         text-slate-700 dark:text-slate-200 font-semibold hover:bg-slate-100
         dark:hover:bg-slate-800 transition-all duration-300 ease-in-out">
         Hubungi Kami
      </a>
    </div>
  </div>
</body>
</html>
