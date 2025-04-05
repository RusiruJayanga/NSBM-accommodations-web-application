<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Location</title>
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
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap&key=AIzaSyBOmft78W-0rx-pTxxnvNEmcrmC8WQsIzA" defer></script>
    <style>
        #map {
            height: 505px;
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
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
      <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0" style="background: #0c4f69; height: 110px; position:relative;">
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
            <a href="Student_locationmap.php" class="nav-item nav-link active">Location Map</a>
            <a href="Student_announcement.php" class="nav-item nav-link">Announcements</a>
            <a href="Student_contact.php" class="nav-item nav-link">Contact</a>
          </div>
        </div>
      </nav>

      <h3 class="mb-0" style="text-align: center; margin-top:40px">Find the accommodation location in this map</h3>
<!-- map -->

<div id="map" style="margin-top: 40px;">

<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: {lat: 6.82090558,lng: 80.03979921} // Default center (New York City)
        });

        // Fetch locations from MySQL database using PHP
        <?php
        // Your PHP code to fetch data from the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "accommodations";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch data from the table
        $sql = "SELECT * FROM advertisement_table2";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                // Create a marker for each location
                echo "var marker = new google.maps.Marker({
                    position: { lat: " . $row["latitude"] . ", lng: " . $row["longitude"] . " },
                    map: map,
                    title: 'Advertisement'
                });\n";
               
                // Create an infowindow for each marker
                echo "var infowindow = new google.maps.InfoWindow({
                    
                    content: '<div><h3>Advertisement</h3><p>" . $row["header"] . "</p><p>" . $row["price"] . "</p><p>" . $row["distance"] . "</p><p>" . $row["phonenumber"] . "</p></div>'
                });\n";

                // Add click event listener to the marker to open the infowindow
                echo "marker.addListener('click', function(event) {
                    var latLng = event.latLng; // Get the clicked location
                    infowindow.setContent('<div><h6>Advertisement</h6><h4>" . $row["header"] . "</h4><p>Price :Rs." . $row["price"] . ".00</p><p>Distance :" . $row["distance"] . "Km</p><p>Phone Number :" . $row["phonenumber"] . "</p></div>');
                    infowindow.setPosition(latLng); // Set the infowindow position to the clicked location
                    infowindow.open(map);
                });\n";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    }
</script>
</div>
<!-- Load the Google Maps JavaScript API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOmft78W-0rx-pTxxnvNEmcrmC8WQsIzA&callback=initMap"  async defer></script>


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