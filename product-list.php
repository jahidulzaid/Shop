<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>All Products - Mini Shop</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="images/favicon.svg"
    />

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
              <h1 class="page-title">Shop Grid</h1>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <ul class="breadcrumb-nav">
              <li>
                <a href="index.html"><i class="lni lni-home"></i> Home</a>
              </li>
              <li><a href="javascript:void(0)">Shop</a></li>
              <li>Shop Grid</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <section class="product-list section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-12">
            <div class="product-sidebar">
              <div class="single-widget search">
                <h3>Search Product</h3>
                <form method="GET" action="search_product.php" class="navbar-search search-style-5">
                <div class="search-input">
                    <input type="text" name="query" placeholder="Search" required />
                </div>
                <div class="search-btn">
                    <button type="submit">
                    <i class="lni lni-search-alt"></i>
                    </button>
                </div>
                </form>
              </div>


            </div>
          </div>
          <div class="col-lg-9 col-12">
            <div class="product-list-head">
              <div class="product-grid-topbar">
                <div class="row align-items-center">
                  <div class="col-lg-7 col-md-8 col-12">
                    <div class="product-sorting">
                      <label for="sorting">Sort by:</label>
                      <select class="form-control" id="sorting">
                        <option>Popularity</option>
                        <option>Low - High Price</option>
                        <option>High - Low Price</option>
                        <option>Average Rating</option>
                        <option>A - Z Order</option>
                        <option>Z - A Order</option>
                      </select>
                      <h3 class="total-show-product">
                        Showing: <span>1 - 12 items</span>
                      </h3>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-4 col-12">
                    <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button
                          class="nav-link active"
                          id="nav-grid-tab"
                          data-bs-toggle="tab"
                          data-bs-target="#nav-grid"
                          type="button"
                          role="tab"
                          aria-controls="nav-grid"
                          aria-selected="true"
                        >
                          <i class="lni lni-grid-alt"></i>
                        </button>
                        <button
                          class="nav-link"
                          id="nav-list-tab"
                          data-bs-toggle="tab"
                          data-bs-target="#nav-list"
                          type="button"
                          role="tab"
                          aria-controls="nav-list"
                          aria-selected="false"
                        >
                          <i class="lni lni-list"></i>
                        </button>
                      </div>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="tab-content" id="nav-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="nav-grid"
                  role="tabpanel"
                  aria-labelledby="nav-grid-tab">
                  <div class="row">


                    
                    <?php 
                    include 'db_connect.php';
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Fetch product details
                    $sql = "SELECT * FROM products";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-product">
                                    <div class="product-image">
                                        <img src="' . $row['image_url'] . '" alt="' . $row['NAME'] . '" />
                                        <div class="button">
                                            <a href="product-details.html" class="btn">
                                                <i class="lni lni-cart"></i> Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <span class="category">' . $row['category'] . '</span>
                                        <h4 class="title">
                                            <a href="product-list.php">' . $row['NAME'] . '</a>
                                        </h4>
                                        <ul class="review">';
                            for ($i = 0; $i < floor($row['rating']); $i++) {
                                echo '<li><i class="lni lni-star-filled"></i></li>';
                            }
                            if ($row['rating'] - floor($row['rating']) >= 0.5) {
                                echo '<li><i class="lni lni-star"></i></li>';
                            }
                            echo '<li><span>' . $row['rating'] . ' Review(s)</span></li>
                                        </ul>
                                        <div class="price">
                                            <span>৳' . number_format($row['price'], 2) . '</span>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }
                    } else {
                        echo "No products found.";
                    }

                    $conn->close();
                    ?>











                  
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="pagination left">
                        <ul class="pagination-list">
                          <li><a href="javascript:void(0)">1</a></li>
                          <li class="active">
                            <a href="javascript:void(0)">2</a>
                          </li>
                          <li><a href="javascript:void(0)">3</a></li>
                          <li><a href="javascript:void(0)">4</a></li>
                          <li>
                            <a href="javascript:void(0)"
                              ><i class="lni lni-chevron-right"></i
                            ></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>


                <!-- list view -->

                <div
                  class="tab-pane fade"
                  id="nav-list"
                  role="tabpanel"
                  aria-labelledby="nav-list-tab"                >
                  <div class="row">

                  <?php 
include 'db_connect.php';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch product details
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="col-lg-12 col-md-12 col-12">
          <div class="single-product">
            <div class="row align-items-center">
              <div class="col-lg-4 col-md-4 col-12">
                <div class="product-image">
                  <img src="' . htmlspecialchars($row['image_url']) . '" alt="' . htmlspecialchars($row['NAME']) . '" />
                  <div class="button">
                    <a href="product-details.html" class="btn">
                      <i class="lni lni-cart"></i> Add to Cart
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <div class="product-info">
                  <span class="category">' . htmlspecialchars($row['category']) . '</span>
                  <h4 class="title">
                    <a href="product-list.php">' . htmlspecialchars($row['NAME']) . '</a>
                  </h4>
                  <ul class="review">';
        
        // Add filled stars
        for ($i = 0; $i < floor($row['rating']); $i++) {
            echo '<li><i class="lni lni-star-filled"></i></li>';
        }

        // Add a half-star if applicable
        if ($row['rating'] - floor($row['rating']) >= 0.5) {
            echo '<li><i class="lni lni-star-half"></i></li>';
        }

        // Add rating count
        echo '<li><span>' . htmlspecialchars($row['rating']) . ' Review(s)</span></li>
                  </ul>
                  <div class="price">
                    <span>৳' . number_format($row['price'], 2) . '</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>';
    }
} else {
    echo "No products found.";
}

$conn->close();
?>





                    
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="pagination left">
                        <ul class="pagination-list">
                          <li><a href="javascript:void(0)">1</a></li>
                          <li class="active">
                            <a href="javascript:void(0)">2</a>
                          </li>
                          <li><a href="javascript:void(0)">3</a></li>
                          <li><a href="javascript:void(0)">4</a></li>
                          <li>
                            <a href="javascript:void(0)"
                              ><i class="lni lni-chevron-right"></i
                            ></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>




              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="inner-content">
            <div class="row">
              <div class="col-lg-3 col-md-4 col-12">
                <div class="footer-logo">
                  <a href="index.html">
                    <img src="images/logo/white-logo.svg" alt="#" />
                  </a>
                </div>
              </div>
              <div class="col-lg-9 col-md-8 col-12">
                <div class="footer-newsletter">
                  <h4 class="title">
                    Subscribe to our Newsletter
                    <span
                      >Get all the latest information, Sales and Offers.</span
                    >
                  </h4>
                  <div class="newsletter-form-head">
                    <form
                      action="#"
                      method="get"
                      target="_blank"
                      class="newsletter-form"
                    >
                      <input
                        name="EMAIL"
                        placeholder="Email address here..."
                        type="email"
                      />
                      <div class="button">
                        <button class="btn">
                          Subscribe<span class="dir-part"></span>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
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
                    <img
                      src="images/footer/credit-cards-footer.png"
                      alt="#"
                    />
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
