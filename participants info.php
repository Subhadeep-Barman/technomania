<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fest Mangement System- Admin Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Fest Management System</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html#events">Events</a></li>
          <li><a class="nav-link scrollto" href="participants info.php">Participants Info</a></li>
          <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="index.html#register" class="register-btn scrollto d-none d-lg-flex">Register</a>

    </div>
  </header><!-- End Header -->
  

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Participants Info</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Participants Info</li>
          </ol>
        </div>

      </div>
    </section>

    <section class="inner-page">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Admin Login</h2>
          <p>Participants Info</p>
        </div>

        <!--<div class="bg-dark text-dark "
            style="align-items:center; display: flex; justify-content: center;background-color: #f1faee;height:20%;border-radius:10px;"
            id="delevent">
            <form method="post" style="width:45vw;min-height:20vw;">
                <div class="form-group rounded" style="text-align:center;">
                    <label style="font-weight: bolder;margin-top:4%;margin-bottom:5%;;font-style:Trebuchet MS;color:antiquewhite" class="h2"
                        for="inlineFormCustomSelect">Get  Event Information </label>
                    <select name="Event" class="form-control w-100 border border-dark">
                        <option selected>Select Event</option>
                        {% for event in events %}
                        <option value="{{event[0]}}">{{event[1]}}</option>
                        {% endfor %}
                    </select>
                </div>
            </form>
        </div> -->

        <div style="color:white; padding-top: 50px; margin: 30px;">
          <table class="table">
            <thead class="thead-dark bg-dark text-light">
                <tr>
                    <th scope="col">Participant Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <th scope="col">Events</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                                    $con = mysqli_connect("localhost","root","","admin");

                                    $query = "SELECT * FROM regform";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td style="color:#cda45e"><?= $row['sid']; ?></td>
                                                <td style="color:#cda45e"><?= $row['fname']; ?></td>
                                                <td style="color:#cda45e"><?= $row['phone']; ?></td>
                                                <td style="color:#cda45e"><?= $row['email']; ?></td>
                                                <td style="color:#cda45e"><?= $row['eventcode']; ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                            <tr>
                                                <td colspan="4">No Record Found</td>
                                            </tr>
                                        <?php
                                    }
                                ?>
          
            </tbody>
        </table>
        </div>

        

      </div>
    </section><!-- End Register Section -->
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Technovate</h3>
              <p>
                IIIT Naya Raipur, Sector-24, Near Purkhoti Muktangan, <br>
                Abhanpur, Chhattisgarh<br><br>
                <strong>Phone:</strong> +077124 74040<br>
                <strong>Email:</strong> https://technovate.iiitnr.ac.in//<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
