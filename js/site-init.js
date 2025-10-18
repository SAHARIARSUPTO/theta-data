// small initialization moved out of index.html

(function () {
  const el = document.getElementById("footer-year");
  if (el) el.textContent = new Date().getFullYear();

  if (window.AOS) {
    AOS.init({
      once: true,
      duration: 600,
    });
  }
})();
