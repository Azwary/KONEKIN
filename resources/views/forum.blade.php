
@include('partials.head')
<!DOCTYPE html>
<html lang="en">
<head>
<title>Forum</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  @include('partials.navbar')
   
    <div class="row">
      <div class="col-200">
    <form action="simpan_forum.php"method="post" class="forum" style="background: #DF8D00;">
    <label for="comment" class="text-pesan">Pesan : </label><br><br>
    <textarea id="comment" name="comment" style=" border-radius: 10px; height:200px; width:90%"></textarea><br>
    <button type="submit" class="btn btn-pesan mt-4" >Kirim Pesan</button>
</form>
</div>
</div>

<div class="forum text-pesan" style="background: #DF8D00;">      
      <?php 
      $qu=mysqli_query($conn,"SELECT * FROM forum ORDER BY id_forum ASC ") or die(mysqli_error($conn));
      while($row=mysqli_fetch_array($qu)){ 
      ?>
      <?php                           
       echo "<strong>" . $row["username"] . "</strong> (" . $row["created_at"] . "): " . $row["comment"] . "<br>";
      ?>
      <br>
      <?php
       }
      ?>
</div>
</body>
<?php include "footer.php"?> 
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
@include('partials.footer')