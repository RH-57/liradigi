
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
            <div id="contacts" class="grid lg:grid-cols-2 gap-12">
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
                    <form id="contactForm" action="{{route('message.store')}}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-slate-700 dark:text-slate-300">Nama</label>
                                <input id="name" type="text" name="name"
                                    class="mt-2 w-full px-4 py-3 rounded-lg bg-white/70 dark:bg-slate-800/70
                                        border border-slate-300 dark:border-slate-700
                                        focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500
                                        outline-none transition" required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-700 dark:text-slate-300">Email</label>
                                <input id="email" type="email" name="email"
                                    class="mt-2 w-full px-4 py-3 rounded-lg bg-white/70 dark:bg-slate-800/70
                                        border border-slate-300 dark:border-slate-700
                                        focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500
                                        outline-none transition" required>
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-slate-700 dark:text-slate-300">Subjek</label>
                            <input id="subject" type="text" name="subject"
                                class="mt-2 w-full px-4 py-3 rounded-lg bg-white/70 dark:bg-slate-800/70
                                    border border-slate-300 dark:border-slate-700
                                    focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500
                                    outline-none transition" required>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-slate-700 dark:text-slate-300">Pesan</label>
                            <textarea id="message" name="message" rows="5"
                                class="mt-2 w-full px-4 py-3 rounded-lg bg-white/70 dark:bg-slate-800/70
                                    border border-slate-300 dark:border-slate-700
                                    focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500
                                    outline-none transition" required></textarea>
                        </div>


                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

                        @error('g-recaptcha-response')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                        <button type="submit" class="w-full px-6 py-3 rounded-lg bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400 text-white font-semibold shadow-md hover:shadow-lg hover:scale-105 transform transition">
                            Kirim Pesan
                        </button>
                        <p class="mt-4 text-xs text-center text-slate-500 dark:text-slate-400">
                            This site is protected by reCAPTCHA and the
                            <a href="https://policies.google.com/privacy" target="_blank" class="underline hover:text-green-600">Privacy Policy</a>
                            and
                            <a href="https://policies.google.com/terms" target="_blank" class="underline hover:text-green-600">Terms of Service</a>
                            apply.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
