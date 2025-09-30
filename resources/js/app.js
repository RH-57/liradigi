
      const themeToggle = document.getElementById('theme-toggle');
      const iconSun = document.getElementById('icon-sun');
      const iconMoon = document.getElementById('icon-moon');
      const mobileBtn = document.getElementById('mobile-menu-button');
      const mobileMenu = document.getElementById('mobile-menu');

      // init theme from localStorage or prefers-color-scheme
      // init theme
        const saved = localStorage.getItem('theme');
            if (saved === 'dark' || (!saved && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            iconSun.classList.add('hidden');
            iconMoon.classList.remove('hidden');
            } else {
            document.documentElement.classList.remove('dark');
            iconSun.classList.remove('hidden');
            iconMoon.classList.add('hidden');
            }

            themeToggle.addEventListener('click', () => {
            const isDark = document.documentElement.classList.toggle('dark');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
            iconSun.classList.toggle('hidden');
            iconMoon.classList.toggle('hidden');
        });

      // mobile menu
      mobileBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
      });

      // smooth anchor scroll
      document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', (e) => {
          const href = a.getAttribute('href');
          if (!href || href === '#') return;
          const el = document.querySelector(href);
          if (!el) return;
          e.preventDefault();
          mobileMenu.classList.add('hidden'); // close mobile menu
          window.scrollTo({ top: el.offsetTop - 80, behavior: 'smooth' });
        });
      });

 // ambil elemen utama
  const mainImage = document.getElementById("mainImage");
  const thumbnails = document.querySelectorAll(".thumbnail");

  thumbnails.forEach(thumb => {
    thumb.addEventListener("click", () => {
      mainImage.src = thumb.src;
    });
  });
