<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Register - Mini Shop</title>
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
    include 'header.php';
  ?>

    <div class="breadcrumbs">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="breadcrumbs-content">
              <h1 class="page-title">Registration</h1>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <ul class="breadcrumb-nav">
              <li>
                <a href="index.php"><i class="lni lni-home"></i> Home</a>
              </li>
              <li>Registration</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="account-login section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
            <div class="register-form">
              <div class="title">
                <h3>No Account? Register</h3>
                <p>
                  Registration takes less than a minute but gives you full
                  control over your orders.
                </p>
              </div>

              <?php 
              include 'db_connect.php';

              if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $first_name = $_POST['first_name'];
              $last_name = $_POST['last_name'];
              $email = $_POST['email'];
              $phone_number = $_POST['phone_number'];
              $password = $_POST['password'];

              $sql = "INSERT INTO users (first_name, last_name, email, phone_number, password) 
                      VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$password')";

              if ($conn->query($sql) === TRUE) {
                  echo "Registration successful!";
              } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
              }

              $conn->close();
          }
          ?>






              <form class="row" method="post" action="register.php">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="reg-fn">First Name</label>
                    <input
                      class="form-control"
                      type="text"
                      id="reg-fn"
                      name="first_name"
                      required
                    />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="reg-ln">Last Name</label>
                    <input
                      class="form-control"
                      type="text"
                      id="reg-ln"
                      name="last_name"
                      required
                    />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="reg-email">E-mail Address</label>
                    <input
                      class="form-control"
                      type="email"
                      id="reg-email"
                      name="email"
                      required
                    />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="reg-phone">Phone Number</label>
                    <input
                      class="form-control"
                      type="text"
                      id="reg-phone"
                      name="phone_number"
                      required
                    />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="reg-pass">Password</label>
                    <input
                      class="form-control"
                      type="password"
                      id="reg-pass"
                      name="password"
                      required
                    />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="reg-pass-confirm">Confirm Password</label>
                    <input
                      class="form-control"
                      type="password"
                      id="reg-pass-confirm"
                      name="confirm_password"
                      required
                    />
                  </div>
                </div>
                <div class="button">
                  <button class="btn" type="submit">Register</button>
                </div>
                <p class="outer-link">
                  Already have an account? <a href="login.php">Login Now</a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="footer-top">
        <div class="container"></div>
      </div>

      <div class="footer-middle">
        <div class="container">
          <div class="bottom-inner">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="single-footer f-contact">
                  <h3>Get In Touch With Us</h3>
                  <p class="phone">Phone: +(880) 1886 433 466</p>
                  <ul>
                    <li><span>Monday-Friday: </span> 9.00 am - 8.00 pm</li>
                    <li><span>Saturday: </span> 10.00 am - 6.00 pm</li>
                  </ul>
                  <p class="mail1">
                    <a href=""
                      ><span class="" data-cfemail=""
                        >Jahidulzaid@gmail.com</span
                      ></a
                    >
                  </p>
                  <p class="mail2">
                    <a href=""
                      ><span class="" data-cfemail=""
                        >OmorFaruk@gmail.com</span
                      ></a
                    >
                  </p>
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-12">
                <div class="single-footer f-link">
                  <h3>Information</h3>
                  <ul>
                    <li><a href="javascript:void(0)">About Us</a></li>
                    <li><a href="javascript:void(0)">Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
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
