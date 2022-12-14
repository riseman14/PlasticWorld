  <!--  AWAL NAV  -->
  <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
          <a class="navbar-brand" href="<?= base_url('') ?>"><img src="<?= base_url('assets/'); ?>img/logo.png"
                  width="55px" alt="logo-pw"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="<?= base_url('') ?>">Beranda<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('home/komunitas/') ?>">Komunitas</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('home/umkm/') ?>">UMKM</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('home/event/') ?>">Event</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('home/artikel/') ?>">Artikel</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="<?= base_url('masyarakat/'); ?>"><i
                                  class="fas fa-fw fa-user mr-3"></i>Profile</a>

                          <div class="dropdown-divider"></div>

                          <a class="dropdown-item" href="<?= base_url('masyarakat/edit'); ?>"><i
                                  class="fas fa-fw fa-user-edit mr-3"></i>Edit Profile</a>

                          <div class="dropdown-divider"></div>

                          <!-- <a class="dropdown-item" href="<?= base_url('reward/'); ?>"><i
                                  class="fas fa-fw fa-coins mr-3"></i><?= $masyarakat['poin'] ?> Poin</a> -->

                          <div class="dropdown-divider"></div>

                          <a class="dropdown-item" href="<?= base_url('auth/keluar') ?>"><i
                                  class="fas fa-fw fa-sign-out-alt mr-3"></i>Keluar</a>
                      </div>

                  </li>
              </ul>
          </div>
      </div>
  </nav>