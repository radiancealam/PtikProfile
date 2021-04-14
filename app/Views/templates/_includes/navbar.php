<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="">PTIK</a></h1>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto <?= $active == 'beranda' ? 'active' : ''; ?>" href="<?= base_url('/'); ?>">Beranda</a></li>
        <li><a class="nav-link scrollto <?= $active == 'profil' ? 'active' : ''; ?>" href="<?= base_url('/profil'); ?>">Profil</a></li>
        <li><a class="nav-link scrollto <?= $active == 'akademik' ? 'active' : ''; ?>" href="<?= base_url('/akademik'); ?>">Akademik</a></li>
        <li><a class="nav-link scrollto <?= $active == 'kemahasiswaan' ? 'active' : ''; ?>" href="<?= base_url('/kemahasiswaan'); ?>">Kemahasiswaan</a></li>
        <li><a class="nav-link scrollto <?= $active == 'fasilitas' ? 'active' : ''; ?>" href="<?= base_url('/fasilitas'); ?>">Fasilitas</a></li>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>

  </div>
</header>