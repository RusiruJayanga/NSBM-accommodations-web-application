

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Client sign Up</title>

    <!-- Font Icon -->
    <script
      src="https://kit.fontawesome.com/45a812b4f2.js"
      crossorigin="anonymous"
    ></script>

    <!-- Main css -->
    <link rel="stylesheet" href="css0/style.css" />
  </head>
  <body>
  
<!-- php -->

    <div class="main">
      <!-- Sign up form -->
      <section class="signup">
        <div class="container">
          <div class="signup-content">
            <div class="signup-form">
              <h2 class="form-title" style="text-align: center;">Client Register</h2>
              <form method="post" class="register-form" action="Student_signup_process.php" id="register-form">
                <div class="form-group">
                  <label for="name"
                    ><i class="fa-sharp fa-solid fa-signature fa-lg"></i></label>
                  <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="User Name"
                    style="font-family: poppins, sans-serif"
                  />
                </div>
                <div class="form-group">
                  <label for="email"><i class="fa-sharp fa-solid fa-envelope fa-lg"></i></label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Your Email"
                    style="font-family: poppins, sans-serif"
                  />
                </div>
                <div class="form-group">
                  <label for="pass"><i class="fa-sharp fa-solid fa-lock fa-lg"></i></label>
                  <input
                    type="password"
                    name="pass"
                    id="pass"
                    placeholder="Password"
                    style="font-family: poppins, sans-serif"
                  />
                </div>
                
                <div class="form-group">
                  <label for="pass"><i class="fa-sharp fa-solid fa-phone"></i></label>
                  <input
                    type="number"
                    name="phone"
                    id="pass"
                    placeholder="Phone Number"
                    style="font-family: poppins, sans-serif"
                  />
                </div>

                <div class="form-group">
                  <input
                    type="checkbox"
                    name="agree-term"
                    id="agree-term"
                    class="agree-term"
                  />
                  <label for="agree-term" class="label-agree-term"
                    ><span><span></span></span>I agree all statements in
                    <a href="#" class="term-service">Terms of service</a></label
                  >
                </div>

                <div class="form-group form-button">
                  <input
                    type="submit"
                    name="signin"
                    id="signin"
                    class="form-submit"
                    value="Submit"
                    style="font-family: poppins, sans-serif"
                  />
                  <a href="Admin_login.php">
                  <input
                    type="button"
                    name="signup"
                    id=""
                    class="admin"
                    value="Admin"
                    style="font-family: poppins, sans-serif"
                  /></a>
                  <a href="Warden_login.php">
                    <input
                      type="button"
                      name="Warden"
                      id=""
                      class="admin"
                      value="Warden"
                      style="font-family: poppins, sans-serif"
                  /></a>
                  <a href="Land_login.php">
                    <input
                      type="button"
                      name="Student"
                      id=""
                      class="admin"
                      value="Land"
                      style="font-family: poppins, sans-serif"
                  /></a>
                </div>
              </form>
            </div>
            <div class="signup-image">
              <figure>
                <img src="img/mainLS.png" alt="sing up image" />
              </figure>
              <a href="Student_login.php" class="signup-image-link">I am already member</a>
            </div>
          </div>
        </div>
      </section>
  </body>
</html>
