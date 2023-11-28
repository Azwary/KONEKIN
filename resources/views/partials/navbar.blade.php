<nav class="navbar nav-padding navbar-expand-lg navbar-dark position-fixed w-100 wave-animation navbarSaya" id="myNavbar" >
  <div class="container">
    <a class="navbar-brand no-effect" href="#">
      <img src="konekin-bulat.png" alt="" width="30" class="d-inline-block align-text-top me-2" />
      Konekin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item mx-4">
          <a class="nav-link" aria-current="page" href="index2.php">Beranda</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" aria-current="page" href="komunitas.php">Komunitas</a>
        </li>
        <li class="nav-item dropdown mx-4">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Acara</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="acara/organisasi.php" >Organisasi</a></li>
            <li><a class="dropdown-item" href="acara/organisasi.php" >Individu</a></li>
          </ul>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" id="portofolio" href="forum.php">Forum</a>
        </li>
      </ul>
      <div>
      <ul class="navbar-nav mx-auto">
      <li class="nav-item dropdown mx-4">
      <?php
              session_start();

              if (isset($_SESSION['username'])) {
                  $username = $_SESSION['username']; 
                  echo '
                  <div class="dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          ' . $username . '
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="user/logout.php">Keluar</a></li>
                      </ul>
                  </div>';
              }
              ?>
          </ul>
        </li>        
      </div>
    </div>
  </div>
</nav>