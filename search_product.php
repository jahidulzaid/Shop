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

              <div class="single-widget">
                <h3>All Categories</h3>
                <ul class="list">
                  <li>
                    <a href="product-list.php">Computers & Accessories </a
                    ><span>(1138)</span>
                  </li>
                  <li>
                    <a href="product-list.php">Smartphones & Tablets</a
                    ><span>(2356)</span>
                  </li>
                  <li>
                    <a href="product-list.php">TV, Video & Audio</a
                    ><span>(420)</span>
                  </li>
                  <li>
                    <a href="product-list.php">Cameras, Photo & Video</a
                    ><span>(874)</span>
                  </li>
                  <li>
                    <a href="product-list.php">Headphones</a
                    ><span>(1239)</span>
                  </li>
                  <li>
                    <a href="product-list.php">Wearable Electronics</a
                    ><span>(340)</span>
                  </li>
                  <li>
                    <a href="product-list.php">Printers & Ink</a
                    ><span>(512)</span>
                  </li>
                </ul>
              </div>

              <div class="single-widget range">
                <h3>Price Range</h3>
                <input
                  type="range"
                  class="form-range"
                  name="range"
                  step="1"
                  min="100"
                  max="10000"
                  value="10"
                  onchange="rangePrimary.value=value"
                />
                <div class="range-inner">
                  <label>৳</label>
                  <input type="text" id="rangePrimary" placeholder="100" />
                </div>
              </div>

              <div class="single-widget condition">
                <h3>Filter by Price</h3>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault1"
                  />
                  <label class="form-check-label" for="flexCheckDefault1">
                    ৳50 - ৳100L (208)
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault2"
                  />
                  <label class="form-check-label" for="flexCheckDefault2">
                    ৳100L - ৳500 (311)
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault3"
                  />
                  <label class="form-check-label" for="flexCheckDefault3">
                    ৳500 - ৳1,000 (485)
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault4"
                  />
                  <label class="form-check-label" for="flexCheckDefault4">
                    ৳1,000 - ৳5,000 (213)
                  </label>
                </div>
              </div>

              <div class="single-widget condition">
                <h3>Filter by Brand</h3>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault11"
                  />
                  <label class="form-check-label" for="flexCheckDefault11">
                    Apple (254)
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault22"
                  />
                  <label class="form-check-label" for="flexCheckDefault22">
                    Bosh (39)
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault33"
                  />
                  <label class="form-check-label" for="flexCheckDefault33">
                    Canon Inc. (128)
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault44"
                  />
                  <label class="form-check-label" for="flexCheckDefault44">
                    Dell (310)
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault55"
                  />
                  <label class="form-check-label" for="flexCheckDefault55">
                    Hewlett-Packard (42)
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault66"
                  />
                  <label class="form-check-label" for="flexCheckDefault66">
                    Hitachi (217)
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault77"
                  />
                  <label class="form-check-label" for="flexCheckDefault77">
                    LG Electronics (310)
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault88"
                  />
                  <label class="form-check-label" for="flexCheckDefault88">
                    Panasonic (74)
                  </label>
                </div>
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

                
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a search query is provided
if (isset($_GET['query']) && !empty($_GET['query'])) {
    $search_query = $conn->real_escape_string($_GET['query']);

    // Fetch products matching the search query
    $sql = "SELECT * FROM products 
            WHERE name LIKE '%$search_query%' 
               OR description LIKE '%$search_query%' 
               OR category LIKE '%$search_query%'
            ORDER BY created_at DESC";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display matching products
        while ($row = $result->fetch_assoc()) {
            echo '
            <div class="col-lg-12 col-md-12 col-12">
                <div class="single-product">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="product-image">
                                <img src="' . $row['image_url'] . '" alt="' . $row['NAME'] . '" />
                                <div class="button">
                                    <a href="product-details.php?id=' . $row['id'] . '" class="btn">
                                        <i class="lni lni-cart"></i> Add to Cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="product-info">
                                <span class="category">' . $row['category'] . '</span>
                                <h4 class="title">
                                    <a href="product-list.php?id=' . $row['id'] . '">' . $row['NAME'] . '</a>
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
                    </div>
                </div>
            </div>';
        }
    } else {
        echo "<p>No products found matching your query.</p>";
    }
} else {
    echo "<p>Please enter a search term.</p>";
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