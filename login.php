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
      $stmt = $conn->prepare($sql); $stmt->bind_param("s", $email);
    $stmt->execute(); $result = $stmt->get_result(); if ($result->num_rows ===
    1) { $admin = $result->fetch_assoc(); if (password_verify($password,
    $admin['password'])) { $_SESSION['admin_logged_in'] = true;
    $_SESSION['admin_email'] = $admin['email']; header("Location: admin.php");
    exit(); } else { $error = "Invalid email or password!"; } } else { $error =
    "Invalid email or password!"; } } ?>

    <header class="header navbar-area">
      <div class="topbar">
        <div class="container"></div>
      </div>

      <!-- start of search, hotline, cart option -->
      <div class="header-middle">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-3 col-md-3 col-7">
              <a class="navbar-brand" href="index.html">
                <img src="images/logo/logo.svg" alt="Logo" />
              </a>
            </div>
            <!-- search -->
            <div class="col-lg-5 col-md-7 d-xs-none">
              <div class="main-menu-search">
                <div class="navbar-search search-style-5">
                  <div class="search-input">
                    <input type="text" placeholder="Search" />
                  </div>
                  <div class="search-btn">
                    <button><i class="lni lni-search-alt"></i></button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-2 col-5">
              <div class="middle-right-area">
                <div class="nav-hotline">
                  <i class="lni lni-phone"></i>
                  <h3>
                    Hotline:
                    <span>(+880) 1886 433 466</span>
                  </h3>
                </div>

                <!-- cart -->

                <div class="navbar-cart">
                  <div class="wishlist">
                    <a href="javascript:void(0)">
                      <i class="lni lni-heart"></i>
                      <span class="total-items">0</span>
                    </a>
                  </div>
                  <div class="cart-items">
                    <a href="javascript:void(0)" class="main-btn">
                      <i class="lni lni-cart"></i>
                      <span class="total-items">0</span>
                    </a>

                    <div class="shopping-item">
                      <div class="dropdown-cart-header">
                        <span>1 Items</span>
                        <a href="cart.html">View Cart</a>
                      </div>

                      <ul class="shopping-list">
                        <!-- item as list -->
                        <li>
                          <a
                            href="javascript:void(0)"
                            class="remove"
                            title="Remove this item"
                            ><i class="lni lni-close"></i
                          ></a>
                          <div class="cart-img-head">
                            <a class="cart-img" href="product-details.html"
                              ><img
                                src="images/header/cart-items/item1.jpg"
                                alt="#"
                            /></a>
                          </div>
                          <div class="content">
                            <h4>
                              <a href="product-details.html">
                                Apple Watch Series 6</a
                              >
                            </h4>
                            <p class="quantity">
                              1x - <span class="amount">৳99.00</span>
                            </p>
                          </div>
                        </li>
                      </ul>

                      <div class="bottom">
                        <div class="total">
                          <span>Total</span>
                          <span class="total-amount">৳99.00</span>
                        </div>
                        <div class="button">
                          <a href="checkout.html" class="btn animate"
                            >Checkout</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- cart end -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of start of search, hotline, cart option -->

      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8 col-md-6 col-12">
            <div class="nav-inner">
              <div class="mega-category-menu">
                <span class="cat-button"
                  ><i class="lni lni-menu"></i>All Categories</span
                >
                <ul class="sub-category">
                  <li>
                    <a href="product-list.php"
                      >Electronics <i class="lni lni-chevron-right"></i
                    ></a>
                    <ul class="inner-sub-category">
                      <li><a href="product-list.php">Digital Cameras</a></li>

                      <li><a href="product-list.php">Camera Drones</a></li>
                      <li><a href="product-list.php">Smart Watches</a></li>
                      <li><a href="product-list.php">Headphones</a></li>

                      <li><a href="product-list.php">Microphones</a></li>
                    </ul>
                  </li>

                  <li><a href="product-list.php">Computers & Tablets </a></li>
                  <li><a href="product-list.php">Laptop </a></li>
                  <li><a href="product-list.php">Smart Phone </a></li>
                  <li><a href="product-list.php">Men’s Product</a></li>
                  <li><a href="product-list.php">Watch</a></li>
                </ul>
              </div>

              <nav class="navbar navbar-expand-lg">
                <button
                  class="navbar-toggler mobile-menu-btn"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>
                <div
                  class="collapse navbar-collapse sub-menu-bar"
                  id="navbarSupportedContent"
                >
                  <ul id="nav" class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a
                        href="index.html"
                        class="active"
                        aria-label="Toggle navigation"
                        >Home</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        class="dd-menu collapsed"
                        href="javascript:void(0)"
                        data-bs-toggle="collapse"
                        data-bs-target="#submenu-1-2"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        >Pages</a
                      >
                      <ul class="sub-menu collapse" id="submenu-1-2">
                        <li class="nav-item">
                          <a href="about-us.html">About Us</a>
                        </li>
                        <li class="nav-item"><a href="login.php">Login</a></li>
                        <li class="nav-item">
                          <a href="register.php">Register</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a
                        class="dd-menu collapsed"
                        href="javascript:void(0)"
                        data-bs-toggle="collapse"
                        data-bs-target="#submenu-1-3"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        >Shop</a
                      >
                      <ul class="sub-menu collapse" id="submenu-1-3">
                        <li class="nav-item">
                          <a href="product-list.php">All Products</a>
                        </li>

                        <li class="nav-item"><a href="cart.html">Cart</a></li>
                        <li class="nav-item">
                          <a href="checkout.html">Checkout</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a href="blog-sidebar.html">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a href="contact.html" aria-label="Toggle navigation"
                        >Contact Us</a
                      >
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="nav-social">
              <h5 class="title">Follow Us:</h5>
              <ul>
                <li>
                  <a href="https://github.com/jahidulzaid"
                    ><i class="lni lni-facebook-filled"></i
                  ></a>
                </li>
                <li>
                  <a href="https://github.com/jahidulzaid"
                    ><i class="lni lni-twitter-original"></i
                  ></a>
                </li>
                <li>
                  <a href="https://github.com/jahidulzaid"
                    ><i class="lni lni-instagram"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

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
                  <label for="reg-fn">Email</label>
                  <input
                    class="form-control"
                    type="email"
                    id="reg-email"
                    required
                  />
                </div>
                <div class="form-group input-group">
                  <label for="reg-fn">Password</label>
                  <input
                    class="form-control"
                    type="password"
                    id="reg-pass"
                    required
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
