<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Mini Shop</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.svg" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="css/tiny-slider.css" />
    <link rel="stylesheet" href="css/glightbox.min.css" />
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>

<?php

session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM admins WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $admin = $result->fetch_assoc();

        if ($admin['password']) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_email'] = $admin['email'];
            header("Location: admin.php");
            exit();
        } else {
            $error = "Invalid email or password!";
        }
    } else {
        $error = "Invalid email or password!";
    }
}
?>

<?php
    include 'header.php';  
  ?>

    <div class="breadcrumbs">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="breadcrumbs-content">
              <h1 class="page-title">Login</h1>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <ul class="breadcrumb-nav">
              <li>
                <a href="index.html"><i class="lni lni-home"></i> Home</a>
              </li>
              <li>Login</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="account-login section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
            <form class="card login-form" method="POST" action="login.php">
              <div class="card-body">
                <div class="title">
                  <h3>Login Now</h3>
                  <p>
                    Login using your email
                    address & password
                  </p>
                </div>
              
                <div class="form-group input-group">
                  <label for="email">Email</label>
                  <input
                    class="form-control"
                    type="email" id="email" name="email" required
                    required
                  />
                </div>
                <div class="form-group input-group">
                  <label for="password">Password</label>
                  <input
                    class="form-control"
                    type="password" id="password" name="password" required
                  />
                </div>
                <div
                  class="d-flex flex-wrap justify-content-between bottom-content"
                >
                  <div class="form-check">
                    <input
                      type="checkbox"
                      class="form-check-input width-auto"
                      id="exampleCheck1"
                    />
                    <label class="form-check-label">Remember me</label>
                  </div>
                  <a class="lost-pass" href="account-password-recovery.html"
                    >Forgot password?</a
                  >
                </div>
                <div class="button">
                  <button class="btn" type="submit">Login</button>
                </div>
                <p class="outer-link">
                  Don't have an account?
                  <a href="register.php">Register here </a>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="footer-top">
        <div class="container"></div>
      </div>

      <div class="footer-bottom">
        <div class="container">
          <div class="inner-content">
            <div class="row align-items-center">
              <div class="col-lg-4 col-12">
                <div class="payment-gateway">
                  <span>We Accept:</span>
                  <img src="images/footer/credit-cards-footer.png" alt="#" />
                </div>
              </div>
              <div class="col-lg-4 col-12">
                <div class="copyright">
                  <p>
                    Designed and Developed by<a
                      href="https://github.com/jahidulzaid"
                      rel="nofollow"
                      target="_blank"
                      >Jahidul Islam</a
                    >
                  </p>
                  <p>
                    Designed and Developed by<a
                      href="https://github.com/jahidulzaid"
                      rel="nofollow"
                      target="_blank"
                      >Omor Faruk</a
                    >
                  </p>
                </div>
              </div>
              <div class="col-lg-4 col-12">
                <ul class="socila">
                  <li>
                    <span>Follow Us On:</span>
                  </li>
                  <li>
                    <a href="javascript:void(0)"
                      ><i class="lni lni-facebook-filled"></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"
                      ><i class="lni lni-twitter-original"></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"
                      ><i class="lni lni-instagram"></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"
                      ><i class="lni lni-google"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <a href="#" class="scroll-top">
      <i class="lni lni-chevron-up"></i>
    </a>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
