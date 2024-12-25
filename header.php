<header class="header navbar-area">
      <div class="topbar">
        <div class="container"></div>
      </div>

      <!-- start of search, hotline, cart option -->
      <div class="header-middle">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-3 col-md-3 col-7">
              <a class="navbar-brand" href="index.php">
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
                        <a href="cart.php">View Cart</a>
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
                            <a class="cart-img" href="product-details.php"
                              ><img
                                src="images/header/cart-items/item1.jpg"
                                alt="#"
                            /></a>
                          </div>
                          <div class="content">
                            <h4>
                              <a href="product-details.php">
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
                          <a href="checkout.php" class="btn animate"
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
                  <li><a href="product-list.php">Food</a></li>
                  <li><a href="product-list.php">Cloth</a></li>
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
                        href="index.php"
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
                          <a href="about-us.php">About Us</a>
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

                        <li class="nav-item"><a href="cart.php">Cart</a></li>
                        <li class="nav-item">
                          <a href="checkout.php">Checkout</a>
                        </li>
                      </ul>
                    </li>

                    <li class="nav-item">
                      <a href="contact.php" aria-label="Toggle navigation"
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