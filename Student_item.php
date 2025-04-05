<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Item</title>
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
  <!-- Font Icon -->

  <script
  src="https://kit.fontawesome.com/45a812b4f2.js"
  crossorigin="anonymous"
></script>
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

  <!-- Custom styles for this template -->
  <link href="css2/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css2/responsive.css" rel="stylesheet" />
  <!-- details style -->
  <link href="css3/style.css" rel="stylesheet" />
  
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
      <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0" style="background: #0c4f69; height: 110px; margin-top: 0%; position:relative;">
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
          <a href="Student_index.php" class="nav-item nav-link active">Home</a>
            <a href="Student_locationmap.php" class="nav-item nav-link">Location Map</a>
            <a href="Student_announcement.php" class="nav-item nav-link">Announcements</a>
            <a href="Student_contact.php" class="nav-item nav-link">Contact</a>
          </div>
        </div>
      </nav>

<!--details -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Retrieve form data
        $id = $_POST['item_id'];

        // Connect to database
        $conn = new PDO("mysql:host=localhost;dbname=accommodations", "root", "");
        $stmt = $conn->prepare("SELECT * FROM advertisement_table2 WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Fetch and display rows
        while ($row = $stmt->fetch()) {
?>


<div class="container1" style="margin-top: -2%;">
    <div class="box1">
      <div class="images1">
        <div class="img-holder1 active1">
          <img src="img/<?php echo $row['image']; ?>" />
        </div>
        
      </div>
      <div class="basic-info">
        <h2><?php echo $row['header']; ?></h2>

        <span>Rs.<?php echo $row['price']; ?></span>
      </div>
      <div class="description">
        <p style="font-size: 1.2rem; text-decoration: black;">
        <?php echo $row['description']; ?>
        </p>
        <ul class="features">
          <li><i class="fa-sharp fa-solid fa-circle" style="color: rgb(0, 0, 0);"></i>Distance :<?php echo $row['distance']; ?>Km</li>
          <li><i class="fa-sharp fa-solid fa-circle" style="color: rgb(0, 0, 0);"></i>Room Mates :<?php echo $row['mates']; ?></li>
          <li><i class="fa-sharp fa-solid fa-circle" style="color: rgb(0, 0, 0);"></i>Key Money : Rs.<?php echo $row['key']; ?>.00</li>
          <li><i class="fa-sharp fa-solid fa-circle" style="color: rgb(0, 0, 0);"></i>Phone Number :<?php echo $row['phonenumber']; ?></li>
        </ul>
      </div>
    </div>
  </div>
<!-- end details -->

<!-- request section -->

<section class="contact_section layout_padding" style=" margin-top: 1%;">
    <div class="container px-0" >
        
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
            <div id="map" style="width: 100%; height: 400px;"></div>

<!-- JavaScript -->
<script>
    function initMap() {
        // Center the map
        var myLatLng = { lat: <?php echo $row['latitude']; ?>, lng: <?php echo $row['longitude']; ?> };

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14, // zoom level
            center: myLatLng
        });

        // Add a marker
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map
        });
    }
</script>

<!-- map -->
<script  async defer></script>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
        <form action="Student_request_process.php" method="post">
        <h4> The location of the advertisement can be taken by this map. When choosing accommodation, be sure to choose close to the university.</h4>
        <p style="font-size: 1.2rem; text-decoration: black;">
         
        </p>
          </form>
        </div>
      </div>
    </div>
  </section>


  <?php
        }
    } catch (PDOException $e) {
        // errors
        echo "Database Error: " . $e->getMessage();
    }
}
?>
  <!-- end request section -->

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
