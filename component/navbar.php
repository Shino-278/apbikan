<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../asset/css/style.css" />
    <!-- Boxicons CSS -->
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="../asset/js/script.js" defer></script>
  </head>
  <body>
    <nav class="sidebar locked">
      <div class="logo_items flex">
        <span class="nav_image">
          <!-- <img src="../image/bidandelima.png"/> -->
        </span>
        <span class="logo_name"><b>APBIKAN</b></span>
        <!-- <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
        <i class="bx bx-x" id="sidebar-close"></i> -->
      </div>

      <div class="menu_container">
        <div class="menu_items">
          <ul class="menu_item">
            <li class="item">
              <a href="home.php" class="link flex">
                <i class="bx bx-home-alt"></i>
                <span>Overview</span>
              </a>
            </li>
          </ul>

          <ul class="menu_item">
            <div class="menu_title flex">
              <span class="title">Proses</span>
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="pendaftaran.php" class="link flex">
                <i class='bx bxs-data'></i>
                <span>Pendaftaran</span>
              </a>
            </li>
            <li class="item">
              <a href="data-dokter.php" class="link flex">
                <i class='bx bxs-data'></i>
                <span>Data Dokter</span>
              </a>
            </li>
            <li class="item">
              <a href="data-pasien.php" class="link flex">
               <i class='bx bx-data'></i>
                <span>Data Pasien</span>
              </a>
            </li>
          </ul>

          <ul class="menu_item">
            <div class="menu_title flex">
              <span class="title">Pembayaran</span>
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="pembayaran.php" class="link flex">
                <i class='bx bx-math'></i>
                <span>Pembayaran</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="menu_items">
         <li class="item">
              <a href="logout.php" class="link flex">
                <i class='bx bx-log-out'></i>
                <span>Logout</span>
              </a>
            </li>
          </div>
        </div>
      </div>
    </nav>

    <!-- Navbar -->
    
  </body>
</html>