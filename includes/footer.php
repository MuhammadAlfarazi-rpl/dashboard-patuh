<footer></footer>

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
