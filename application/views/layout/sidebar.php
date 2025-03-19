<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="<?= base_url('dashboard') ?>">
            <img src="<?= base_url('') ?>/assets/img/logo1.png" class="navbar-brand-img h-100 rounded-circle"
                alt="main_logo">
            <span class="ms-2 font-weight-bold">PPK</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?= ($title === "Dashboard") ? 'active' : '' ?>" href="<?= base_url('dashboard') ?>">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-sound-wave text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <!-- <li class="nav-item">
        <a class="nav-link <?= ($title === "Mahasiswa") ? 'active' : '' ?>" href="<?= base_url('mahasiswa') ?>">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Mahasiswa</span>
        </a>
      </li> -->
            <li class="nav-item">
                <a class="nav-link <?= ($title === "Input") ? 'active' : '' ?>" href="<?= base_url('ppk') ?>">
                    <!-- <a type="button" class="nav-link" onclick="sabarki()"> -->
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-building text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">kontrak</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($title === "Perusahaan") ? 'active' : '' ?>"
                    href="<?= base_url('perusahaan') ?>">
                    <!-- <a type="button" class="nav-link" onclick="sabarki()"> -->
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-collection text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">perusahaan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($title === "Termin") ? 'active' : '' ?>" href="<?= base_url('termin ') ?>">
                    <!-- <a type="button" class="nav-link" onclick="sabarki()"> -->
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-chart-pie-35 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Termin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($title === "Periode") ? 'active' : '' ?>" href="<?= base_url('periode ') ?>">
                    <!-- <a type="button" class="nav-link" onclick="sabarki()"> -->
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-chart-pie-35 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Periode</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= ($title === "Management User") ? 'active' : '' ?>"
                    href="<?= base_url('management_user') ?>">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-settings-gear-65 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Management User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('login/logout') ?>">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-atom text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Logout</span>
                </a>
            </li>
            <li class="nav-item">
                <div class="container">
                    <div class="mt-2 mb-5 d-flex">
                        <h6 class="mb-0">Light / Dark</h6>
                        <div class="form-check form-switch ps-0 ms-auto my-auto">
                            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                                onclick="darkMode(this)">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>