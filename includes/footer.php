<!-- Footer -->
<hr>
<footer class="text-dark py-2">
  <div class="container">
    <div class="row d-flex justify-content-between flex-wrap">
      <div class="col-md-5 d-flex flex-column justify-content-between">
        <div class="text-muted">
          <h5 class="fw-bold text-dark">Badan Pusat Statistik</h5>
          <p>Badan Pusat Statistik Provinsi Kepulauan Riau</p>
          <p>Jl.Ahmad Yani No. 21 Tanjungpinang 29124</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="text-muted">
          <h6 class="fw-bold text-dark">Contact</h6>
          <p>Telp. (0771) 4500155 / 4500150 (PST)</p>
          <p>Fax. (0771) 4500157</p>
          <p>E-mail: bps2100@bps.go.id</p>
        </div>
      </div>
      <div class="col-md-3 text-md-end text-center">
        <div class="d-flex gap-3 justify-content-md-end justify-content-center" >
          <a href="https://web.facebook.com/bpskepri/?_rdc=1&_rdr#"><i class="bx bxl-facebook text-dark fs-2"></i></a>
          <a href="https://www.instagram.com/bpskepri?igsh=cDhta2YzbDF2Z2E1"><i class="bx bxl-instagram text-dark fs-2"></i></a>
          <a href="https://youtube.com/@bpsprovkepri?si=LT-6OTt4zt70ukgN"><i class="bx bxl-youtube text-dark fs-2"></i></a>
          <a href="https://kepri.bps.go.id/id"><i class="bx bx-globe text-dark fs-2"></i> </a>
        </div>
      </div>
    </div>
  </div>
</footer>

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
  // Navbar react + sliding underlinr
const navLinks = document.querySelectorAll('.nav-link');
const indicator = document.querySelector('.underline-indicator');

function moveIndicator(el) {
  const rect = el.getBoundingClientRect();
  const parentRect = el.closest('.nav').getBoundingClientRect();
  indicator.style.width = `${rect.width}px`;
  indicator.style.transform = `translateX(${rect.left - parentRect.left}px)`;
}

navLinks.forEach(link => {
  link.addEventListener('click', e => {
    navLinks.forEach(l => l.classList.remove('active'));
    e.currentTarget.classList.add('active');
    moveIndicator(e.currentTarget);
  });
});


// Warna jadinya ada animasi ngikutin curso
document.addEventListener('mousemove', function(e) {
  const underline = document.querySelector('.underline-indicator');
  if (!underline) return;

  const percentage = (e.clientX / window.innerWidth) * 100;
  underline.style.backgroundPosition = `${percentage}% 50%`;
});

const initialActive = document.querySelector('.nav-link.active');
if (initialActive) moveIndicator(initialActive);


// Switch Theme Icon
const toggle = document.querySelector('.darkmode-toggle');
const icon = toggle.querySelector('i');

toggle.addEventListener('click', () => {
  document.body.classList.toggle('dark');
  
  if (document.body.classList.contains('dark')) {
    icon.classList.replace('bx-sun', 'bx-moon');
  } else {
    icon.classList.replace('bx-moon', 'bx-sun');
  }
});
</script>

</body>
</html>