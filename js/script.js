document.addEventListener("DOMContentLoaded", () => {
  const targets = document.querySelectorAll('.fadein-up, .fadein-down, .fadein-left, .fadein-right');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
      }
    });
  }, {
    threshold: 0.1
  });

  targets.forEach(el => observer.observe(el));
});


document.addEventListener("DOMContentLoaded", function () {
  const track = document.querySelector(".slider-track");
  const items = document.querySelectorAll(".slider-track-item");

  // 画像を複製して無限ループ用に追加する
  items.forEach(item => {
    const clone = item.cloneNode(true);
    track.appendChild(clone);
  });

  gsap.to(track, {
    x: "-50%", // 元の半分までスライド
    duration: 30, // 10秒で移動
    repeat: -1, // 無限ループ
    ease: "linear",
  });
});


document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.getElementById("hamburger");
  const navMenu = document.getElementById("nav-menu");
  const accordions = document.querySelectorAll(".accordion");

  hamburger.addEventListener("click", function () {
    navMenu.classList.toggle("active");
  });

  accordions.forEach(accordion => {
    const btn = accordion.querySelector(".accordion-btn");
    const content = accordion.querySelector(".accordion-content");
    const icon = btn.querySelector(".icon");

    btn.addEventListener("click", function () {
      content.classList.toggle("active");
      icon.textContent = content.classList.contains("active") ? "ー" : "+";
    });
  });
});


let blogSwiper = null;

function initBlogSwiper() {
  const screenWidth = window.innerWidth;

  if (screenWidth <= 820 && blogSwiper === null) {
    blogSwiper = new Swiper('.sns-blog-section.swiper', {
      slidesPerView: 'auto',
      spaceBetween: 32,
      centeredSlides: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  } else if (screenWidth > 820 && blogSwiper !== null) {
    blogSwiper.destroy(true, true);
    blogSwiper = null;
  }
}

window.addEventListener('load', initBlogSwiper);
window.addEventListener('resize', initBlogSwiper);
