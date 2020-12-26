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


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <a href="index.php" class="hero-logo boss" data-aos="zoom-in"><img src="images/bg4.png" alt=""></a>
      <h1 data-aos="zoom-in">Let's Fight Together Against Corona Virus</h1>
      <h2 data-aos="fade-up">Be Safe Be Strong</h2>
      <a data-aos="fade-up" href="#main" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->




  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container">

      <!-- The main logo is shown in mobile version only. The centered nav-logo in nav menu is displayed in desktop view  -->
      <div class="logo d-block d-lg-none">
        <a href="index.php" class="img_style"><img src="images/bg4.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul class="nav-inner">
          <li class="active"><a href="#main">COVID-19</a></li>
          <li class="drop-down"><a href="">About</a>
            <ul>
              <li><a href="#about">About COVID-19</a></li>
              <li><a href="#symptoms">Symptoms</a></li>
              <li><a href="#prevention">Prevention</a></li>
              <li><a href="#answer">Q & A</a></li>
              <li><a href="#activity">Activity</a></li>
              <li><a href="#contact">Contact Us</a></li>

            </ul>
          </li>
          <li><a href="hospital.php">TESTING LAB'S & FREE FOOD</a></li>

          <li class="nav-logo"><a href="index.php" class="img_style"><img src="images/bg4.png" alt="" class="img-fluid"></a></li>
          <li><a href="indiaday.php">IndiaDayWise</a></li>
          <li><a href="worldlive.php">WorldCoronaLive</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

<section class="corona_update container-fluid">
  <div class="my-5">
    <h3 class="text-center text-uppercase pb-5">COVID-19 LIVE UPDATES OF THE INDIA </h3>
    <div class="table-responsive">
    <div class="searchBox">
    <input class="searchInput" type="text" name="" id="myInput" placeholder="Search state..." onkeyup="searchFun()">
    <button class="searchButton" href="#">
    <i class="material-icons">
    search
    </i>
      </button>
        </div><br><br><br>
      <table class=" table table-bordered table-striped text-center" id="myTable">
        <tr>
          <th> Lastupdatedtime </th>
          <th> State </th>
          <th> Confirmed </th>
          <th>Active</th>
          <th>Recovered</th>
          <th>Death</th>  
        </tr>


<?php
$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);

$i=0;
while($i < $statescount){
  ?>
  <tr>
    <td style="background: #7a4a91;" class="text-white"><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?></td>
    <td style="background: #4bb7d8;"><?php echo $coranalive['statewise'][$i]['state'] ?></td>
    <td style="background: #f36e23;"><?php echo $coranalive['statewise'][$i]['confirmed'] ?></td>
    <td style="background: #4bb7d8;"><?php echo $coranalive['statewise'][$i]['active'] ?></td>
    <td style="background: #9cc850;"><?php echo $coranalive['statewise'][$i]['recovered'] ?></td>
    <td style="background: #f36e23;"><?php echo $coranalive['statewise'][$i]['deaths'] ?></td>

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
      let td = tr[i].getElementsByTagName('td')[1];

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

<!--- Daily Updates -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>About COVID19</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="image">
              <img src="images/about.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
              <h3>What is COVID_19 (Corona-Virus)</h3>
              <p class="font-italic">
                COVID-19 is the infectious disease caused by the most recently dicovered coronavirus. This new virus and diseas were unknown before the outbreak began in Wuhan, China, in December 2019.
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i>Coronaviruses are a large family of viruses which may cause illness in animals or humans. </li>
              </ul>
              <p class="font-italic">
                In humans, several coronavirus which may causes respiratory infections ranging form the common cold to move serve Acute Respiratory Syndrome (SARS), The most rcently discovered coronavirus disease COVID-19.
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="symptoms" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Coronavirus Symptoms</h2>
        </div>

       <div class="row">
          <div class="col-lg-4 col-md-4 col-12 mt-5" data-aos="fade-right">
          <figure class="text-center">
          <img src="images/cough.png" class="img-fluid" width="120"
          height="120">
          <figcaption>cough</figcaption>
          </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5" data-aos="fade-down">
          <figure class="text-center">
          <img src="images/rhinitis.png" class="img-fluid" width="120"
          height="120">
          <figcaption>runny nose</figcaption>
          </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5" data-aos="fade-left">
          <figure class="text-center">
          <img src="images/fever.png" class="img-fluid" width="120"
          height="120">
          <figcaption>fever</figcaption>
          </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5" data-aos="fade-right">
          <figure class="text-center">
          <img src="images/sick.png" class="img-fluid" width="120"
          height="120">
          <figcaption>cold</figcaption>
          </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5" data-aos="fade-up">
          <figure class="text-center">
          <img src="images/arm.png" class="img-fluid" width="120"
          height="120">
          <figcaption>tiredness</figcaption>
          </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5" data-aos="fade-left">
          <figure class="text-center">
          <img src="images/breathing.png" class="img-fluid" width="120"
          height="120">
          <figcaption>difficulty breathing</figcaption>
          </figure>
          </div>
          
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Featured Section ======= -->
    <section id="prevention" class="featured">
      <div class="container">

        <div class="container pt-5 sub_section pb-5" id="preventid">
  <div class="section_header section-title text-center mb-5 mt-4" data-aos="fade-up">
    <h2>6 Steps prevention Against Coronavirus </h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12 mt-5" data-aos="fade-right">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                  <img src="images/wash.png" class="img-fluid" width="90" height="90">
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub</p>  
              </div>
            </div>
            </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5" data-aos="fade-down">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                  <img src="images/man.png" class="img-fluid" width="90" height="90">
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>  
              </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5" data-aos="fade-left">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                  <img src="images/keep-distance.png" class="img-fluid" width="90" height="90">
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>Avoid close contact (1 meter or 3 feet) with people who are unwell</p> 
              </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5" data-aos="fade-right">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                  <img src="images/stay-home.png" class="img-fluid" width="90" height="90">
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>Stay home and self-isolate from others in the household if you feel unwell</p> 
              </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5" data-aos="fade-right">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                  <img src="images/aaj.png" class="img-fluid" width="90" height="90">
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>Stay informed by watching news & follow the recommended practices</p>  
              </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5" data-aos="fade-right">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                  <img src="images/doctor.png" class="img-fluid" width="90" height="90">
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>If you have fever, caugh and difficulty breathing, seek medical care early</p> 
              </div>
            </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="answer" class="why-us">
      <div class="container-fluid">

              <div class="container-fluid section-title text-center mb-5 mt-4" data-aos="fade-up">
    <h2>Q&A on coronaviruses (COVID-19) </h2>

        <div class="row">

          <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content" data-aos="fade-up">
              <h3><strong>World Health Organization</strong></h3>
            </div>

            <div class="accordion-list">
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span> What is coronavirus? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p>
                      Coronaviruses are a large family of viruses which may cause illness in animals or humans.  In humans, several coronaviruses are known to cause respiratory infections ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span> What is COVID-19? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <p>
                      COVID-19 is the infectious disease caused by the most recently discovered coronavirus. This new virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019.
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span> What are the symptoms of COVID-19 ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p>
                      The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. Some people become infected but don’t develop any symptoms and don't feel unwell. Most people (about 80%) recover from the disease without needing special treatment
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 align-items-stretch video-box" style='background-image: url("images/modi.webp");' data-aos="zoom-in">
            <a href="https://www.youtube.com/watch?v=ogBXkJ06nN8" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Portfolio Section ======= -->
        <section id="activity" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Activity</h2>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="images/image.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p>GOVERMENT OF INDIA</p>
                <div class="portfolio-links">
                  <a href="https://www.mygov.in/" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="images/image3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p>GOVERMENT OF INDIA</p>
                <div class="portfolio-links">
                  <a href="https://www.mygov.in/" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="images/image5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <p>GOVERMENT OF INDIA</p>
                <div class="portfolio-links">
                  <a href="https://www.mygov.in/" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>


      </div>
    </section>

    <section id="team" class="testimonials">
      <div class="container" data-aos="zoom-in">
        <div class="quote-icon">
          <i class="bx bxs-quote-right"></i>
        </div>
        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <p>
              Face IT...!! Fight IT...!! Finish IT...!!
            </p>
            <img src="images/keshav.jpg" class="testimonial-img" alt="">
            <h3>Keshav Rana</h3>
            
          </div>

        </div>

      </div>
    </section> 

    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>

        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Roorkee,<br>Uttrakhand, INDIA 247667</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>keshavrana9756@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+91 8630983005</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="index.php" method="POST">

  <div class="form-group">
    <label></label>
    <input type="text" class="form-control" name="username" placeholder="Your Name" autocomplete="off" required data-aos="fade-left">
  </div>

  <div class="form-group">
    <label></label>
    <input type="number" class="form-control" name="mobile" placeholder="Mobile " autocomplete="off" required data-aos="fade-left">
  </div>
<div class="form-group" data-aos="fade-left">
  <label></label><br>
  <div class="custom-control custom-checkbox custom-control-inline text-capitalize" >
    <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
    <label class="custom-control-label" for="customcheckbox1">Cold</label>  
  </div>
  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
    <label class="custom-control-label" for="customcheckbox2">Fever</label> 
  </div>
  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
    <label class="custom-control-label" for="customcheckbox3">Difficulty in breath</label>  
  </div>
  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
    <label class="custom-control-label" for="customcheckbox4">Triedness</label> 
  </div>
  
</div>



  <div class="form-group">
    <label for="exampleFormControlTextarea1" data-aos="fade-left">Message:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg" data-aos="fade-left"></textarea>
  </div>

 <button type="submit" class="btn btn-success" name="submit" data-aos="fade-left">Send Message</button>
</form>
</div>
</div>

</div>
</div>
    </section><!-- End Contact Section -->

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

<?php
include 'dbcon.php';

if(isset($_POST['submit'])){

  $username = $_POST['username'];
  $mobile = $_POST['mobile'];
  $symp = $_POST['coronasym'];
  $msg = $_POST['msg'];

  $chk ="";
  foreach ($symp as $chk1) {
    $chk .= $chk1."," ;
  }
  $insertquery = "insert into coronacase( name, mobile, symp, message) values('$username', '$mobile', '$chk', '$msg')";
  $query = mysqli_query($con, $insertquery);

if ($query){
  ?>
  <script>
    alert("connetion successful");
  </script>
  <?php
}else{
  ?>
  <script>
    alert("Our Team Will Contact You ASAP");
  </script>
  <?php
  }

}

?>
