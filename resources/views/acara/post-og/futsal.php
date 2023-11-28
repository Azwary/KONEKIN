<?php
include "../../head.php";
?>

<html>
<title>Futsal</title>
    <!-- Navbar -->
    <nav class="navbar navbar-1 navbar-expand-lg navbar-dark position-fixed w-100 wave-animation navbarSaya" id="myNavbar">
      <div class="container ">
        <a class="navbar-brand no-effect" href="#">
          <img src="../../konekin-bulat.png" alt="" width="30" class="d-inline-block align-text-top me-2" />
          Konekin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-4">
              <a class="nav-link" aria-current="page" href="../../index.php">Beranda</a>
            </li>
            <li class="nav-item dropdown mx-4">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Acara</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="organisasi.php">Organisai</a></li>
                <li><a class="dropdown-item" href="individu.php" >Individu</a></li>
              </ul>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" id="portofolio" href="portofolio">Forum</a>
            </li>
            
          </ul>
          <div>
            <button class="button-primary"><a href="login.html">Login</a></button>
            
            <a class="button-secondary" href="sighin.html" >Sigh In</a>
          </div>
        </div>
      </div>
    </nav>
</html>

<?php
include "../../footer.php";
?>