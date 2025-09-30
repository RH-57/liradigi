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
