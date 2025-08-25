<nav class="navbar mb-2 py-2">
  <div class="container-fluid d-flex justify-content-between align-items-center p-2">

    <!-- Bagian KIRI -->
    <a href="index.php" class="text-decoration-none text-dark">
      <div class="ms-3 d-flex align-items-center">
        <img src="assets/img/bps.png" alt="BPS" width="30" class="me-2">
        <strong>Badan Pusat Statistik</strong>
      </div>
    </a>

    <!-- Bagian KANAN -->
    <div class="me-3 d-flex align-items-center gap-3">
  <!-- Language / Menu Switch -->
  <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    $dropdown_label = "Pilihan Pedoman";

    if ($current_page === "pedoman_dinas.php") {
      $dropdown_label = "Pedoman Dinas";
    } elseif ($current_page === "kategori_belanja.php") {
      $dropdown_label = "Pedoman Administrasi";
    }
  ?>
  
<div class="dropdown">
  <div class="language-switch dropdown-toggle align-items-center" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer;">
    <span><?php echo $dropdown_label; ?></span>
  </div>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item disabled">Pilihan Pedoman</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="kategori_belanja.php">Pedoman Administrasi</a></li>
    <li><a class="dropdown-item" href="pedoman_dinas.php">Pedoman Dinas</a></li>
  </ul>
</div>


  </div>
</nav>
