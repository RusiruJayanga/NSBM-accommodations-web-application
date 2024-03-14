
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Admin</title>
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
  </head>
<body>
<a href = "Admin_index.php">
              <button class="butt"><i class="fa-sharp fa-solid fa-circle-left"></i> HOME </button>
        </a>

<!-- table -->
       <table class="table">
        <thead>
        <tr>
            <th scope="col">User Name</th>
                <th scope="col">Password</th>
                <th scope="col">Edit</th>
        </tr></thead>
    
<!-- repeat section -->
<?php 
try {
    $conn = new PDO("mysql:host=localhost;dbname=accommodations", "root", "");
    $stmt = $conn->query("SELECT * FROM wardenlogin");
    while ($row = $stmt->fetch()) {
?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $row['username']; ?></th>
                    <td><?php echo $row['password']; ?></td>
                    <td>
                        <form action="Admin_deletewa.php" method="post">
                            <input type="hidden" name="item_id" value="<?php echo $row['username']; ?>">
                            <button style="width: 100%; background-color:#f00c0c;" type="submit" class="btn btn-primary">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
<?php
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
<!-- end of repeat section -->
</table>
</body>
</html>

