
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Warden All Advertisement</title>
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

  <!-- Custom styles -->
  <link href="css2/style.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css1/style1.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css2/responsive.css" rel="stylesheet" />
  <!-- details style -->
  <link href="css3/style.css" rel="stylesheet" />
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
<a href = "Warden_index.php">
              <button class="butt"><i class="fa-sharp fa-solid fa-circle-left"></i> HOME </button>
        </a>

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
<script   async defer></script>
</table>
</body>
</html>

