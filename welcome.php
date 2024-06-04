<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="css/coba.css">
    <script src="//code.tidio.co/vqk1rdvmddzjtkratdhvradewart7maw.js" async></script>
</head>
<body >

  <?php include_once('includes/navbar.php') ?>
  <div class="sb-nav-fixed">

    <div id="layoutSidenav">
      <?php include_once('includes/sidebar.php') ?>

        <div class="main-content">
          <!-- TULIS CONTENT DI SINI -->
          <div class="upcomming-appointment">
                <h2>Upcomming Appointment</h2>
                <div class="sub-appointment">
                  <div class="periksa">
                    Medical Checkup
                  </div>
                  <div class="date">
                    27-10-2022 at 14.45
                  </div>
                  <div class="namaPasien">
                    Kaiahelga Tabina Oktosoma
                  </div>
                  <div class="kamar">
                    Room 2103
                  </div>
                </div>
            </div>

            <!-- STATISTIC 1 -->
            <div class="statistic1">
                <div class="statistic1-head">
                    <h3>Laporan Tahunan</h3>
                </div>
                <div class="chart-statistic">
                    <div id="statistic"></div>
                </div>
            </div>

            <!-- STATISTIC 2 -->
            <div class="statistic2">
                <div class="statistic2-head">
                    <h3>Kepuasan Pasien</h3>
                </div>
                <div class="chart-kepuasan">
                    <div id="kepuasan"></div>
                </div>
            </div>
        </div>
    </div>

  </div>



    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/coba.js"></script>
</body>
</html>
