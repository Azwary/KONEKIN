
<?php
include "../../head.php";
include "../../config/koneksi.php";
?>
<html>
<head>
    <link rel="stylesheet" href="../../css/style.css">
    <title>Bolean 22</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        .card-latest {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
 <!-- Navbar -->
 <nav class="navbar navbar-1 navbar-expand-lg navbar-dark position-fixed w-100 wave-animation navbarSaya" id="myNavbar">
      <div class="container ">
        <a class="navbar-brand no-effect" href="#">
          <img src="../../assets/konekin-bulat.png" alt="" width="30" class="d-inline-block align-text-top me-2" />
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
                <li><a class="dropdown-item" href="../organisasi.php">Organisai</a></li>
                <li><a class="dropdown-item" href="../individu.php" >Individu</a></li>
              </ul>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" id="portofolio" href="portofolio">Forum</a>
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
                              <li><a class="dropdown-item" href="../../user/logout.php">Keluar</a></li>
                          
                          </ul>
                      </div>';
                  }
                  ?>
              </ul>
            </li>        
          </div>
          <!-- <div>
            <button class="button-primary"><a href="login.html">Login</a></button>
            
            <a class="button-secondary" href="sighin.html" >Sigh In</a>
          </div> -->
        </div>
      </div>
    </nav><br><br><br>
  

    <section class="halaman-isi">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                <h1 class="event-komunitas mt-4" >Event Komunitas</h1>
            <p class="mt-4"><span class="fw-bold">"I have successfully</span>  completed several projects after becoming a full stack developer."</p>
                    <div class="card border-0">
                        <div class="card-body">

                        <div class="gambar-isi">
                        <img src="../../assets/gambar-isi.png" alt="">
                        </div>

                        <div>
                        <p class="mt-4 paragraf-isi" > Suatu hari, seorang anak bernama Aria memutuskan untuk menjelajahi hutan ajaib yang terletak di luar desanya. Diceritakan bahwa hutan tersebut dipenuhi dengan makhluk-makhluk aneh dan misterius. Meskipun banyak orang desanya memperingatkan Aria untuk tidak masuk ke dalam hutan, rasa penasaran yang besar mendorongnya untuk mengabaikan peringatan tersebut.

                        Ketika Aria memasuki hutan, dia segera merasakan atmosfer magis yang mengelilinginya. Pepohonan tinggi dan rimbun membuatnya merasa seolah-olah berada di dunia dongeng. Saat menjelajah lebih dalam, Aria bertemu dengan seekor burung berwarna cerah yang bisa berbicara. Burung itu bernama Lila dan mengajak Aria untuk menjalani petualangan bersamanya.

                        Bersama Lila, Aria menjelajahi hutan ajaib. Mereka menemui bunga-bunga cantik yang bisa berbicara, sungai-sungai yang bersinar dengan cahaya berwarna, dan hewan-hewan yang memiliki kekuatan magis. Setiap makhluk yang mereka temui memberikan Aria pelajaran berharga tentang keberanian, persahabatan, dan keajaiban alam.

                        Namun, petualangan mereka tidak hanya penuh dengan keindahan. Mereka juga menghadapi tantangan berbahaya, seperti monster-monster legendaris dan labirin misterius. Tetapi dengan keberanian dan kerjasama, Aria dan Lila selalu berhasil mengatasi setiap rintangan yang muncul di depan mereka.

                        Selama petualangan mereka, Aria belajar menghargai keajaiban alam dan keberanian yang ada dalam dirinya. Dia juga menemukan arti persahabatan sejati melalui hubungannya dengan Lila. Setelah melewati berbagai macam pengalaman, Aria tumbuh menjadi anak yang lebih bijaksana dan berani.

                        Setelah beberapa minggu menjelajahi hutan ajaib, Aria dan Lila memutuskan untuk kembali ke desa. Mereka membawa pulang cerita-cerita luar biasa tentang keajaiban hutan dan pengalaman yang tak terlupakan. Aria menyadari bahwa meskipun dunia luar penuh dengan keajaiban, keberanian dan persahabatan adalah hal-hal yang paling berharga yang dapat dimiliki oleh seseorang.."</p>

                        </div>  
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-body">
                        <p class="mt-4 paragraf-isi" > Suatu hari, seorang anak bernama Aria memutuskan untuk menjelajahi hutan ajaib yang terletak di luar desanya. Diceritakan bahwa hutan tersebut dipenuhi dengan makhluk-makhluk aneh dan misterius. Meskipun banyak orang desanya memperingatkan Aria untuk tidak masuk ke dalam hutan, rasa penasaran yang besar mendorongnya untuk mengabaikan peringatan tersebut.

                              Ketika Aria memasuki hutan, dia segera merasakan atmosfer magis yang mengelilinginya. Pepohonan tinggi dan rimbun membuatnya merasa seolah-olah berada di dunia dongeng. Saat menjelajah lebih dalam, Aria bertemu dengan seekor burung berwarna cerah yang bisa berbicara. Burung itu bernama Lila dan mengajak Aria untuk menjalani petualangan bersamanya.

                              Bersama Lila, Aria menjelajahi hutan ajaib. Mereka menemui bunga-bunga cantik yang bisa berbicara, sungai-sungai yang bersinar dengan cahaya berwarna, dan hewan-hewan yang memiliki kekuatan magis. Setiap makhluk yang mereka temui memberikan Aria pelajaran berharga tentang keberanian, persahabatan, dan keajaiban alam.

                              Namun, petualangan mereka tidak hanya penuh dengan keindahan. Mereka juga menghadapi tantangan berbahaya, seperti monster-monster legendaris dan labirin misterius. Tetapi dengan keberanian dan kerjasama, Aria dan Lila selalu berhasil mengatasi setiap rintangan yang muncul di depan mereka.

                              Selama petualangan mereka, Aria belajar menghargai keajaiban alam dan keberanian yang ada dalam dirinya. Dia juga menemukan arti persahabatan sejati melalui hubungannya dengan Lila. Setelah melewati berbagai macam pengalaman, Aria tumbuh menjadi anak yang lebih bijaksana dan berani.

                              Setelah beberapa minggu menjelajahi hutan ajaib, Aria dan Lila memutuskan untuk kembali ke desa. Mereka membawa pulang cerita-cerita luar biasa tentang keajaiban hutan dan pengalaman yang tak terlupakan. Aria menyadari bahwa meskipun dunia luar penuh dengan keajaiban, keberanian dan persahabatan adalah hal-hal yang paling berharga yang dapat dimiliki oleh seseorang.<p class="mt-4 paragraf-isi" > Suatu hari, seorang anak bernama Aria memutuskan untuk menjelajahi hutan ajaib yang terletak di luar desanya. Diceritakan bahwa hutan tersebut dipenuhi dengan makhluk-makhluk aneh dan misterius. Meskipun banyak orang desanya memperingatkan Aria untuk tidak masuk ke dalam hutan, rasa penasaran yang besar mendorongnya untuk mengabaikan peringatan tersebut.

                              Ketika Aria memasuki hutan, dia segera merasakan atmosfer magis yang mengelilinginya. Pepohonan tinggi dan rimbun membuatnya merasa seolah-olah berada di dunia dongeng. Saat menjelajah lebih dalam, Aria bertemu dengan seekor burung berwarna cerah yang bisa berbicara. Burung itu bernama Lila dan mengajak Aria untuk menjalani petualangan bersamanya.

                              Bersama Lila, Aria menjelajahi hutan ajaib. Mereka menemui bunga-bunga cantik yang bisa berbicara, sungai-sungai yang bersinar dengan cahaya berwarna, dan hewan-hewan yang memiliki kekuatan magis. Setiap makhluk yang mereka temui memberikan Aria pelajaran berharga tentang keberanian, persahabatan, dan keajaiban alam.

                              Namun, petualangan mereka tidak hanya penuh dengan keindahan. Mereka juga menghadapi tantangan berbahaya, seperti monster-monster legendaris dan labirin misterius. Tetapi dengan keberanian dan kerjasama, Aria dan Lila selalu berhasil mengatasi setiap rintangan yang muncul di depan mereka.

                              Selama petualangan mereka, Aria belajar menghargai keajaiban alam dan keberanian yang ada dalam dirinya. Dia juga menemukan arti persahabatan sejati melalui hubungannya dengan Lila. Setelah melewati berbagai macam pengalaman, Aria tumbuh menjadi anak yang lebih bijaksana dan berani.

                              Setelah beberapa minggu menjelajahi hutan ajaib, Aria dan Lila memutuskan untuk kembali ke desa. Mereka membawa pulang cerita-cerita luar biasa tentang keajaiban hutan dan pengalaman yang tak terlupakan. Aria menyadari bahwa meskipun dunia luar penuh dengan keajaiban, keberanian dan persahabatan adalah hal-hal yang paling berharga yang dapat dimiliki oleh seseorang.."</p>."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container" align="center">
      <div class="komentar">
      <div class="col-md-4" >
      <h3 align="left"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat-right-text" viewBox="0 0 16 16">
        <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
        <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
      </svg> Kolom Komentar</h3>
      <form action="simpan_komentar.php"method="post">
        <div class="input-group">
          <span ></span>
          <textarea class="form-control" placeholder="Pertanyaan,saran,kritik atau diskusi" name="komentar"></textarea>
        </div><br>
        </div>
        </div>
        <div class="btn" align="left">
        <button type="submit"class="btn btn-primary">Kirim</button>
      </form>
      <div>
      
      <?php 

      $qu=mysqli_query($conn,"SELECT * FROM komentar_acara ORDER BY id_komentar ASC ") or die(mysqli_error($conn));
       while($row=mysqli_fetch_array($qu)){ 
                                            
      echo $row['komentar'];
      ?>
      <br>
      <?php
       }
      ?>
      </div>
    </div>
    </div>
    
  

</body>

     <!--Link untuk JS untuk Bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    // Konfigurasi Swiper di sini
  });
</script>

<!-- TESTI END -->

<script>
  const buttonPrimary = document.querySelector(".button-primary");
  const buttonSecondary = document.querySelector(".button-secondary");

  buttonPrimary.addEventListener("mouseover", () => {
    buttonSecondary.classList.add("shift-background");
  });

  buttonPrimary.addEventListener("mouseout", () => {
    buttonSecondary.classList.remove("shift-background");
  });
</script>
</html>

<?php
include "../../footer.php";
?>

