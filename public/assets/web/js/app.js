const mobileBtn = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

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

// Simple auto-slide
const slider = document.getElementById('testimonial-slider');
const slides = slider.children.length;
let index = 0;

setInterval(() => {
    index = (index + 1) % slides;
    slider.style.transform = `translateX(-${index * 100}%)`;
}, 5000);

 const navLinks = document.querySelectorAll("nav a");

navLinks.forEach(link => {
    link.addEventListener("click", function() {
        // Hapus active dari semua link
        navLinks.forEach(l => l.classList.remove("active"));
        // Tambahkan active ke link yang diklik
        this.classList.add("active");
    });
});

const sections = document.querySelectorAll("section[id]");
  const navLink = document.querySelectorAll("nav a");

  function setActiveLink() {
    let current = "";

    // cek posisi scroll
    sections.forEach(section => {
      const sectionTop = section.offsetTop - 100; // offset biar pas
      const sectionHeight = section.clientHeight;
      if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
        current = section.getAttribute("id");
      }
    });

    // hapus & set active
    navLink.forEach(link => {
      link.classList.remove("active");
      if (link.getAttribute("href") === `#${current}`) {
        link.classList.add("active");
      }
    });
  }

  window.addEventListener("scroll", setActiveLink);


//image project
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

 document.addEventListener('DOMContentLoaded', () => {
        window.toggleFAQ = (button) => {
            const content = button.nextElementSibling;
            const parentItem = button.closest('.faq-item');
            const icon = button.querySelector('i');

            // Tutup semua item lain
            document.querySelectorAll('.faq-item').forEach(item => {
                if (item !== parentItem) {
                    item.classList.remove('active');
                    const inner = item.querySelector('div.max-h-0, div[style]');
                    if (inner) inner.style.maxHeight = null;
                    const iconEl = item.querySelector('i');
                    if (iconEl) iconEl.classList.remove('rotate-180');
                }
            });

            // Toggle item yang diklik
            const isActive = parentItem.classList.toggle('active');
            if (isActive) {
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.classList.add('rotate-180');
            } else {
                content.style.maxHeight = null;
                icon.classList.remove('rotate-180');
            }
        };
    });
