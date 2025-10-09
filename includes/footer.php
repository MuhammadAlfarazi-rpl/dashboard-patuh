<!-- Footer -->
<hr>
<footer class="text-dark py-4">
  <div class="container">
    <div class="row d-flex justify-content-between flex-wrap">
      <div class="col-md-5 d-flex flex-column justify-content-between">
        <div class="text-muted" style="font-size: small;">
          <h6 class="fw-bold text-dark">Badan Pusat Statistik</h6>
          <p class="mb-0">Badan Pusat Statistik Provinsi Kepulauan Riau</p>
          <p class="mb-1">Jl.Ahmad Yani No. 21 Tanjungpinang 29124</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="text-muted" style="font-size: small;">
          <h6 class="fw-bold text-dark">Contact</h6>
          <p class="mb-0">Telp. (0771) 4500155 / 4500150 (PST)</p>
          <p class="mb-0">Fax. (0771) 4500157</p>
          <p class="mb-1">E-mail: bps2100@bps.go.id</p>
        </div>
      </div>
      <div class="col-md-3 text-end">
        <div class="d-flex gap-3 justify-content-end" >
          <a href="https://web.facebook.com/bpskepri/?_rdc=1&_rdr#"><i class="bx bxl-facebook text-dark fs-2 icon_footer"></i></a>
          <a href="https://www.instagram.com/bpskepri?igsh=cDhta2YzbDF2Z2E1"><i class="bx bxl-instagram text-dark fs-2 icon_footer"></i></a>
          <a href="https://youtube.com/@bpsprovkepri?si=LT-6OTt4zt70ukgN"><i class="bx bxl-youtube text-dark fs-2 icon_footer"></i></a>
          <a href="https://kepri.bps.go.id/id"><i class="bx bx-globe text-dark fs-2 icon_footer"></i> </a>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php if (basename($_SERVER['PHP_SELF']) === 'index.php'): ?>
    <script src="assets/js/indicator.js"></script>
<?php endif; ?>

<!-- Bootstrap JS -->
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Anime.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>

<!-- Three.js -->
<script src="https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.min.js"></script>


<!-- Vanila Tilt -->
<script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.7.2/dist/vanilla-tilt.min.js"></script>

<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js" defer></script>

<!-- Custom Script -->
<script src="assets/js/script.js"></script>

<script>

// Intro
anime.timeline()

      // Logo fade in 
      .add({
        targets: '#logo',
        opacity: [0, 1],
        translateY: [50, 0],
        easing: 'easeOutExpo',
        duration: 1500
      })

      // Logo geser 
      .add({
        targets: '#logo',
        translateX: -200,
        easing: 'easeInOutQuad',
        duration: 1000
      })
      // Teks 
      .add({
        targets: '#title',
        opacity: [0, 1],
        translateY: [10, -30],
        translateX: 100,
        easing: 'easeOutExpo',
        duration: 2000
      });


const btn = document.querySelector("#btnDashboard");
if (btn) {
  const bg = btn.querySelector(".btn-bg");

  btn.addEventListener("mouseenter", () => {
    anime({
      targets: bg,
      translateX: ["0%", "100%"],
      duration: 500,
      easing: "easeOutQuad"
    });
  });

  btn.addEventListener("mouseleave", () => {
    anime({
      targets: bg,
      translateX: ["-100%", "0%"],
      duration: 500,
      easing: "easeOutQuad"
    });
  });
}

// Agara biar bagian 2 ada animasi scroll
document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {

        // animasi masuk (fade up)
        anime({
          targets: entry.target,
          opacity: [0, 1],
          translateY: [50, 0],
          easing: "easeOutExpo",
          duration: 1000
        });
      } else {

        // animasi keluar (fade down)
        anime({
          targets: entry.target,
          opacity: [1, 0],
          translateY: [0, 50],
          easing: "easeInExpo",
          duration: 800
        });
      }
    });
  }, { threshold: 0.2 });

  document.querySelectorAll(".content, .section-title").forEach((el) => {
    el.style.opacity = 0; 
    observer.observe(el);
  });
});

  document.querySelectorAll(".nav-item").forEach(item => {
    item.addEventListener("click", () => {
      window.location.href = item.dataset.url;
    });
  });

// Navbar bold
  const navLinks = document.querySelectorAll(".nav-item");
  const currentPage = window.location.pathname.split("/").pop();

  navLinks.forEach(link => {
    if (link.getAttribute("href") === currentPage) {
      link.classList.add("fw-bold", "text-dark"); 
    } else {
      link.classList.remove("fw-bold");
    }
  });

  const sidebar = document.getElementById("sidebar");
  const toggleBtn = document.getElementById("sidebarToggle");
  const arrow = document.getElementById("arrow");
  const mainContent = document.getElementById("mainContent");

  let isCollapsed = false;

  toggleBtn.addEventListener("click", () => {
    if (!isCollapsed) {
      anime({
        targets: "#sidebar",
        translateX: "-100%",
        duration: 400,
        easing: "easeInOutQuad"
      });
      anime({
      targets: "#sidebarToggle",
      translateX: "40px",   
      translateY: "-50%",
      duration: 400,
      easing: "easeInOutQuad"
    });
    anime({
      targets: "#mainContent",
      width: ["100%", "132%"], 
      translateX: ["0%", "-24%"],
      duration: 400,
      easing: "easeInOutQuad"
    });
      arrow.textContent = "⮞";
    } else {
      anime({
        targets: "#sidebar",
        translateX: "0%",
        duration: 400,
        easing: "easeInOutQuad"
      });
      anime({
      targets: "#sidebarToggle",
      translateX: "0px",   
      duration: 400,
      easing: "easeInOutQuad"
    });
    anime({
      targets: "#mainContent",
      width: ["100%", "100%"], 
      translateX: ["-5%", "0%"],
      duration: 400,
      easing: "easeInOutQuad"
    });
      arrow.textContent = "⮜";
    }
    isCollapsed = !isCollapsed;
  });

  const sidebar = document.getElementById('sidebar');
  const toggleBtn = document.getElementById('sidebarToggle');
  const mainContent = document.getElementById('mainContent');

  toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('show');
    mainContent.classList.toggle('shifted');
  });
</script>


</body>
</html>