<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css1/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css1/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
      <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0" style="background: #0c4f69; height: 110px;">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
        >
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0">
          <a href="Student_index.php" class="nav-item nav-link ">Home</a>
            <a href="Student_locationmap.php" class="nav-item nav-link ">Location Map</a>
            <a href="Student_announcement.php" class="nav-item nav-link active">Announcements</a>
            <a href="Student_contact.php" class="nav-item nav-link">Contact</a>
          </div>
        </div>
      </nav>
<!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container py-5" style="margin-top: 100px;">
        <div
          class="section-title text-center position-relative pb-3 mb-5 mx-auto"
          style="max-width: 600px"
        >
          <h5 class="fw-bold text-primar text-uppercase">Admin Announcements</h5>
          <h1 class="mb-0">Notifications by admin to ensure your safety and new information</h1>
        </div>
        <div class="row g-5">
          <!-- repeat -->

          <?php 
try {
    $conn = new PDO("mysql:host=localhost;dbname=accommodations", "root", "");
    $stmt = $conn->query("SELECT * FROM adminadd_advertisements");
    while ($row = $stmt->fetch()) {
?>

          <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
            <div
              class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center"
            >
              <div class="service-icon">
              <i class="fa fa-shield-alt text-primar"></i>
              </div>
              <h4 class="mb-3"><?php echo $row['header']; ?></h4>
              <p class="m-0">
              <?php echo $row['details']; ?>
              </p>
              
            </div>
          </div>

<?php
        }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

          <!-- end repeat -->
          
          <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
            <div
              class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5"
            >
              <h3 class="text-white mb-3">Call Us</h3>
              <p class="text-white mb-3">
              24 hour helpline to solve your problems.
              </p>
              <h2 class="text-white mb-0">077 667 9711</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

      <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>