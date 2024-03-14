<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Add Advertisement</title>
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

     <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOmft78W-0rx-pTxxnvNEmcrmC8WQsIzA&callback=initMap"  async defer></script>
    <style>
        #map {
            height: 100%;
            width: 100%;
        }
    </style>

  </head>

  <body>

  <a href = "Land_index.php">
              <button class="butt"><i class="fa-sharp fa-solid fa-circle-left"></i> HOME </button>
        </a>


    <!-- request section -->

<section class="contact_section layout_padding" style=" margin-top: 70px;">
    <div class="container px-0" >
        
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
           
 <!-- map Save_location -->
 <div id="map"></div>
 <script>
        var map;
        var marker;
        
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 6.82090558,lng: 80.03979921},
                zoom: 14
            });

            marker = new google.maps.Marker({
                position: {lat: 6.82090558,lng: 80.03979921},
                map: map,
                draggable: true
            });

            google.maps.event.addListener(marker, 'dragend', function(event) {
                marker.setPosition(event.latLng);
            });
        }

    </script>   
    <!--function saveLocation() {
            var latitude = marker.getPosition().lat();
            var longitude = marker.getPosition().lng();

            window.location.href = "?lat=" + latitude + "&lng=" + longitude;
        } -->

  <!-- form  trigger -->

    <script>
    function saveLocation() {
        var latitude = marker.getPosition().lat();
        var longitude = marker.getPosition().lng();

        // Update form action from location data
        document.getElementById("advertisementForm").action = "Land_add_advertisement_process1.php?lat=" + latitude + "&lng=" + longitude;

        // Submit the form
        document.getElementById("advertisementForm").submit();
    }
    </script>

<!-- end map  Land_add_advertisement_process1-->

            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
        <form method="post" action="Land_add_advertisement_process1.php" enctype="multipart/form-data" id="advertisementForm">
            <h1 class="mb-0" style="text-align: center;">Add Advertisement </h1>
            <h5>Select Your Location On This map</h5>
            <div>
              <input type="text" placeholder="Seller Id" name="sid" />
            </div>
            <div>
              <input type="text" placeholder="Header" name="header" />
            </div>
            <div>
              <input type="text" placeholder="Price (Rs)" name="price"/>
            </div>
            <div>
              <input type="text" placeholder="Distance (Km)" name="distance"/>
            </div>
            <div>
              <input type="text" placeholder="Room Mates" name="mates"/>
            </div>
            <div>
              <input type="text" placeholder="Key Money (Rs)" name="keym"/>
            </div>
            <div>
              <input type="text" placeholder="Phone Number" name="pnum"/>
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Description" name="description"/>
            </div>
            <input type="file" name="image" />
            
            

            <div class="d-flex ">
            <button onclick="saveLocation()">UPLOAD</button>
            
            
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- end request section -->
  </body></html>