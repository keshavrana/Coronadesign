<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Corona</title>
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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">




</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container">

      <!-- The main logo is shown in mobile version only. The centered nav-logo in nav menu is displayed in desktop view  -->
      <div class="logo d-block d-lg-none">
        <a href="index.php"><img src="images/bg4.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul class="nav-inner">
          <li class="active"><a href="index.php">COVID-19</a></li>

          <li><a href="hospital.php"> TESTING LAB'S & FREE FOOD</a></li>

          <li class="nav-logo"><a href="index.php"><img src="images/bg4.png" alt="" class="img-fluid"></a></li>

          
          <li><a href="indiaday.php">INDIADAYWISE</a></li>
          <li><a href="worldlive.php">WORLDCORONALIVE</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->


<section class="corona_update container-fluid">
  <div class="my-5">
    <h3 class="text-center text-uppercase pb-5">COVID-19 LIVE UPDATES OF THE INDIA </h3>
    <div class="table-responsive">
    <div class="searchBox">
    <input class="searchInput" type="text" name="" id="myInput" placeholder="Search Here..." onkeyup="searchFun()">
    <button class="searchButton" href="#">
    <i class="material-icons">
    search
    </i>
      </button>
        </div><br><br><br>



      <table class=" table table-bordered table-striped text-center" id="myTable">
        <tr>
          <th>Country</th>
          <th>TotalConfirmed</th>
          <th>TotalRecovered</th>
          <th>TotalDeaths</th>
          <th>NewConfirmed</th>
          <th>NewRecovered</th>
          <th>NewDeaths</th>  
        </tr>


<?php
$data = file_get_contents('https://api.covid19api.com/summary');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['Countries']);

$i=0;
while($i < $statescount){
  ?>
  <tr>
    <td style="background: #7a4a91;" class="text-white"><?php echo $coranalive['Countries'][$i]['Country'] ?></td>
    <td style="background: #4bb7d8;"><?php echo $coranalive['Countries'][$i]['TotalConfirmed'] ?></td>
    <td style="background: #f36e23;"><?php echo $coranalive['Countries'][$i]['TotalRecovered'] ?></td>
    <td style="background: #4bb7d8;"><?php echo $coranalive['Countries'][$i]['TotalDeaths'] ?></td>
    <td style="background: #9cc850;"><?php echo $coranalive['Countries'][$i]['NewConfirmed'] ?></td>
    <td style="background: #f36e23;"><?php echo $coranalive['Countries'][$i]['NewRecovered'] ?></td>
    <td style="background: #f36e23;"><?php echo $coranalive['Countries'][$i]['NewDeaths'] ?></td>

  </tr>

<?php
  $i++;

}
?>


      </table>

<script>
const searchFun = () =>{
  let filter = document.getElementById('myInput').value.toUpperCase();

  let myTable = document.getElementById('myTable');

  let tr = document.getElementsByTagName('tr');

  for(var i=0; i<tr.length; i++){
      let td = tr[i].getElementsByTagName('td')[0];

      if(td){
          let textvalue = td.textContent || td.innerHTML;

          if (textvalue.toUpperCase().indexOf(filter) > -1){
            tr[i].style.display = "";
          }else{
              tr[i].style.display = "none";
          }
      }
  }

}
</script>

    </div>

  </div>
  
</section>



<!---

    <section class="corona_update container-fluid mt-5" id="live">
  <div class="mb-3">
    <h3 class="text-center text-uppercase pb-5">COVID-19 LIVE UPDATES OF THE WORLDS </h3>
    <div class="table-responsive">
      <table class=" table table-bordered table-striped text-center" id="tbval">
        <tr>
          <th>Country</th>
          <th>TotalConfirmed</th>
          <th>TotalRecovered</th>
          <th>TotalDeaths</th>
          <th>NewConfirmed</th>
          <th>NewRecovered</th>
          <th>NewDeaths</th>
        </tr>
      </table>
    </div>

  </div>
  
</section>


<script>

function fetch(){
  $.get("https://api.covid19api.com/summary",

    function (data){
      var tbval = document.getElementById('tbval');

      for(var i=1; i<(data['Countries'].length); i++){
        var x = tbval.insertRow();
        x.insertCell(0);
        tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
        tbval.rows[i].cells[0].style.background = '#7a4a91';

        tbval.rows[i].cells[0].style.color = '#fff';

        x.insertCell(1);
        tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
        tbval.rows[i].cells[1].style.background = '#4bb7d8';

        x.insertCell(2);
        tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
        tbval.rows[i].cells[2].style.background = '#4bb7d8';

        x.insertCell(3);
        tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
        tbval.rows[i].cells[3].style.background = '#f36e23';

        x.insertCell(4);
        tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
        tbval.rows[i].cells[4].style.background = '#4bb7d8';

        x.insertCell(5);
        tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
        tbval.rows[i].cells[5].style.background = '#9cc850';

        x.insertCell(6);
        tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
        tbval.rows[i].cells[6].style.background = '#f36e23';

      }
    }
  );

}

</script>
---->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-6">
            <a href="#header" class="scrollto footer-logo"><img src="images/bg4.png" alt=""></a>
            <h3>Stay Home Stay Safe</h3>
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

        Designed by <a href="https://keshavtechnical.netlify.com/">Keshav Rana</a>
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