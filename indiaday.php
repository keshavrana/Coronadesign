<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Knight Bootstrap Template</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">



  <!-- =======================================================
  * Template Name: Knight - v2.0.
  * Template URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body onload="fetch()">

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container">

      <!-- The main logo is shown in mobile version only. The centered nav-logo in nav menu is displayed in desktop view  -->
      <div class="logo d-block d-lg-none">
        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul class="nav-inner">
          <li class="active"><a href="index.php">COVID-19</a></li>

          

          <li class="nav-logo"><a href="index.html"><img src="images/bg4.png" alt="" class="img-fluid"></a></li>

          
          <li><a href="indiaday.php">INDIADAYWISE</a></li>
          <li><a href="worldlive.php">WORLDCORONALIVE</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

<!-- ======= Breadcrumbs ======= -->


<section class="corona_update container-fluid">
  <div class="my-3">
    <h3 class="text-uppercase text-center"> COVID-19 Live Update Of The INDIA Day Wise</h3>
  </div>
  <div class="table-responsive">
    <table class="table text-center" id="tbl">
<?php
$data = file_get_contents('https://api.covid19india.org/data.json');
$coronadata = json_decode($data,true);

$totalcount = count($coronadata['cases_time_series']);

$i=0;
while ($i < $totalcount){
?>
<tr>
  <th class="text-left">Date & month</th>
  <th colspan="5"></th>
</tr>
<tr>
  <td colspan="6" class="text-left"> <?php echo $coronadata['cases_time_series'][$i]['date'] . " <br> " ; ?> </td>
</tr>
<tr class="text-capitalize text-white">
  <th style="color: #fff; background: #2196f3;">total confirmed</th>
  <th style="color: #fff; background: #ffc107;">daily confirmed</th>
  <th style="color: #fff; background: #008c76FF;">daily recovered</th>
  <th style="color: #fff; background: #e91e7f;">daily deceased</th>
  <th style="color: #fff; background: #4caf50;">total recovered</th>
  <th style="color: #fff; background: #EE2737FF;">total deceased</th>
</tr>
<tr class="mb-5">
  <td style="background: #bed2f3;"> <?php echo $coronadata['cases_time_series'][$i]['totalconfirmed'] . "<br>" ; ?></td>
  <td style="background: #ffe493;"> <?php echo $coronadata['cases_time_series'][$i]['dailyconfirmed'] . "<br>" ; ?></td>
  <td style="background: #9ED9CCFF;"> <?php echo $coronadata['cases_time_series'][$i]['dailyrecovered'] . "<br>" ; ?></td>
  <td style="background: #fc95c6;"> <?php echo $coronadata['cases_time_series'][$i]['dailydeceased'] . "<br>" ; ?></td>
  <td style="background: #88d28b;"> <?php echo $coronadata['cases_time_series'][$i]['totalrecovered'] . "<br>" ; ?></td>
  <td style="background: #fb99a1;"> <?php echo $coronadata['cases_time_series'][$i]['totaldeceased'] . "<br>" ; ?></td>
</tr>

<?php
$i++;
}
?>

    </table>
    
  </div>
  

</section>





 </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-6">
            <a href="#header" class="scrollto footer-logo"><img src="images/bg4.png" alt=""></a>
            <h3>Keshav Rana</h3>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>@2020</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/knight-free-bootstrap-theme/ -->
        Designed by <a href="https://keshav.com/">Keshav Rana</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>







