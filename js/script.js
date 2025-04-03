document.addEventListener("DOMContentLoaded", function () {
  const track = document.querySelector(".slider-track");
  const items = document.querySelectorAll(".slider-track-item");

  // 画像を複製して無限ループ用に追加
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
