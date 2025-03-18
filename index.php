<?php
include 'db_connect.php';

$sql = "SELECT id, name, category, description, image_url, price, rating, reviews FROM products";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <title>Mini Shop</title>
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

    <section class="hero-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-12 custom-padding-right">
            <div class="slider-head">

              <div class="hero-slider">
                <div
                  class="single-slider"
                  style="
                    background-image: url(images/hero/slider-bg1.jpg);
                  "
                >
                  <div class="content">
                    <h2>
                      <span>৳35 savings</span>
                      M75 Sport Watch
                    </h2>
                    <p>

                    </p>
                    <h3><span>Now Only</span> ৳320.99</h3>
                    <div class="button">
                      <a href="product-list.php" class="btn">Shop Now</a>
                    </div>
                  </div>
                </div>

                <div
                  class="single-slider"
                  style="
                    background-image: url(images/hero/slider-bnr.jpg);
                  "
                >
                  <div class="content">
                    <h2>
                      <span>No Delivery fee (৳35 savings)</span>
                      Iphone 
                    </h2>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur elit, sed do
                      eiusmod tempor incididunt ut labore dolore magna aliqua.
                    </p>
                    <h3><span>Now Only</span> ৳320.99</h3>
                    <div class="button">
                      <a href="product-list.php" class="btn">Shop Now</a>
                    </div>
                  </div>
                </div>

                <div
                  class="single-slider"
                  style="
                    background-image: url(images/hero/slider-bg2.jpg);
                  "
                >
                  <div class="content">
                    <h2>
                      <span>Big Sale Offer</span>
                      Get the Best Deal on CCTV Camera
                    </h2>
                    <p>

                    </p>
                    <h3><span>Combo Only:</span> ৳590.00</h3>
                    <div class="button">
                      <a href="product-list.php" class="btn">Shop Now</a>
                    </div>
                  </div>
                </div>
                
              </div>
              
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="row">
              <div class="col-lg-12 col-md-6 col-12 md-custom-padding">
                <div
                  class="hero-small-banner"
                  style="
                    background-image: url('images/hero/slider-bnr.jpg');
                  "
                >
                  <div class="content">
                    <h2>
                      <span>New line required</span>
                      iPhone 12 Pro Max
                    </h2>
                    <h3>৳259.99</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-md-6 col-12">
                <div class="hero-small-banner style2">
                  <div class="content">
                    <h2>Weekly Sale!</h2>
                    <p>
                      Saving up to 50% off all online store items this week.
                    </p>
                    <div class="button">
                      <a class="btn" href="product-list.php">Shop Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="trending-product section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Trending Product</h2>
              <p>
                There are many variations of passages of Lorem Ipsum available
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          
    <?php if ($result->num_rows > 0): ?>
        <?php while ($product = $result->fetch_assoc()): ?>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-product">
                    <div class="product-image">
                        <img src="<?= htmlspecialchars($product['image_url']); ?>" alt="<?= htmlspecialchars($product['name']); ?>" />
                        <div class="button">
                            <a href="product-details.php?id=<?= $product['id']; ?>" class="btn">
                                <i class="lni lni-cart"></i> Add to Cart
                            </a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category"><?= htmlspecialchars($product['category']); ?></span>
                        <h4 class="title">
                            <a href="product-details.php?id=<?= $product['id']; ?>">
                                <?= htmlspecialchars($product['name']); ?>
                            </a>
                        </h4>
                        <ul class="review">
                            <?php
                            $fullStars = floor($product['rating']);
                            $emptyStars = 5 - $fullStars;
                            for ($i = 0; $i < $fullStars; $i++) echo '<li><i class="lni lni-star-filled"></i></li>';
                            for ($i = 0; $i < $emptyStars; $i++) echo '<li><i class="lni lni-star"></i></li>';
                            ?>
                            <li><span><?= htmlspecialchars(number_format($product['rating'], 1)); ?> Review(s)</span></li>
                        </ul>
                        <div class="price">
                            <span>৳<?= htmlspecialchars(number_format($product['price'], 2)); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <div class="col-12">
            <p class="text-center">No products available.</p>
        </div>
    <?php endif; ?>
</div>




      </div>
    </section>

      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Special Offer</h2>
              <p>
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>
        <div class="row">



          <div class="col-lg-8 col-md-12 col-12">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <div class="single-product">
                  <div class="product-image">
                    <img src="images/products/product-3.jpg" alt="#" />
                    <div class="button">
                      <a href="product-details.php" class="btn"
                        ><i class="lni lni-cart"></i> Add to Cart</a
                      >
                    </div>
                  </div>
                  <div class="product-info">
                    <span class="category">Camera</span>
                    <h4 class="title">
                      <a href="product-list.php">WiFi Security Camera</a>
                    </h4>
                    <ul class="review">
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><span>5.0 Review(s)</span></li>
                    </ul>
                    <div class="price">
                      <span>৳399.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <div class="single-product">
                  <div class="product-image">
                    <img src="images/products/product-8.jpg" alt="#" />
                    <div class="button">
                      <a href="product-details.php" class="btn"
                        ><i class="lni lni-cart"></i> Add to Cart</a
                      >
                    </div>
                  </div>
                  <div class="product-info">
                    <span class="category">Laptop</span>
                    <h4 class="title">
                      <a href="product-list.php">Apple MacBook Air</a>
                    </h4>
                    <ul class="review">
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><span>5.0 Review(s)</span></li>
                    </ul>
                    <div class="price">
                      <span>৳899.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <div class="single-product">
                  <div class="product-image">
                    <img src="images/products/product-6.jpg" alt="#" />
                    <div class="button">
                      <a href="product-details.php" class="btn"
                        ><i class="lni lni-cart"></i> Add to Cart</a
                      >
                    </div>
                  </div>
                  <div class="product-info">
                    <span class="category">Speaker</span>
                    <h4 class="title">
                      <a href="product-list.php">Bluetooth Speaker</a>
                    </h4>
                    <ul class="review">
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star-filled"></i></li>
                      <li><i class="lni lni-star"></i></li>
                      <li><span>4.0 Review(s)</span></li>
                    </ul>
                    <div class="price">
                      <span>৳70.00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="single-banner right"
              style="
                background-image: url('images/banner/banner-3-bg.jpg');
                margin-top: 30px;
              "
            >
              <div class="content">
                <h2>Samsung Notebook 9</h2>
                <p>
                  Lorem ipsum dolor sit amet, <br />eiusmod tempor incididunt ut
                  labore.
                </p>
                <div class="price">
                  <span>৳590.00</span>
                </div>
                <div class="button">
                  <a href="product-list.php" class="btn">Shop Now</a>
                </div>
              </div>
            </div>
          </div>




          <div class="col-lg-4 col-md-12 col-12">
            <div class="offer-content">
              <div class="image">
                <img src="images/offer/offer-image.jpg" alt="#" />
                <span class="sale-tag">-50%</span>
              </div>
              <div class="text">
                <h2><a href="product-list.php">Bluetooth Headphone</a></h2>
                <ul class="review">
                  <li><i class="lni lni-star-filled"></i></li>
                  <li><i class="lni lni-star-filled"></i></li>
                  <li><i class="lni lni-star-filled"></i></li>
                  <li><i class="lni lni-star-filled"></i></li>
                  <li><i class="lni lni-star-filled"></i></li>
                  <li><span>5.0 Review(s)</span></li>
                </ul>
                <div class="price">
                  <span>৳200.00</span>
                  <span class="discount-price">৳400.00</span>
                </div>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry incididunt ut eiusmod tempor labores.
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="home-product-list section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
            <h4 class="list-title">Best Sellers</h4>

            <div class="single-list">
              <div class="list-image">
                <a href="product-list.php"
                  ><img src="images/home-product-list/01.jpg" alt="#"
                /></a>
              </div>
              <div class="list-info">
                <h3>
                  <a href="product-list.php">GoPro Hero4 Silver</a>
                </h3>
                <span>৳287.99</span>
              </div>
            </div>

            <div class="single-list">
              <div class="list-image">
                <a href="product-list.php"
                  ><img src="images/home-product-list/02.jpg" alt="#"
                /></a>
              </div>
              <div class="list-info">
                <h3>
                  <a href="product-list.php">Puro Sound Labs BT2200</a>
                </h3>
                <span>৳95.00</span>
              </div>
            </div>

            <div class="single-list">
              <div class="list-image">
                <a href="product-list.php"
                  ><img src="images/home-product-list/03.jpg" alt="#"
                /></a>
              </div>
              <div class="list-info">
                <h3>
                  <a href="product-list.php">HP OfficeJet Pro 8710</a>
                </h3>
                <span>৳120.00</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
            <h4 class="list-title">New Arrivals</h4>

            <div class="single-list">
              <div class="list-image">
                <a href="product-list.php"
                  ><img src="images/home-product-list/04.jpg" alt="#"
                /></a>
              </div>
              <div class="list-info">
                <h3>
                  <a href="product-list.php">iPhone X 256 GB Space Gray</a>
                </h3>
                <span>৳1150.00</span>
              </div>
            </div>

            <div class="single-list">
              <div class="list-image">
                <a href="product-list.php"
                  ><img src="images/home-product-list/05.jpg" alt="#"
                /></a>
              </div>
              <div class="list-info">
                <h3>
                  <a href="product-list.php"
                    >Canon EOS M50 Mirrorless Camera</a
                  >
                </h3>
                <span>৳950.00</span>
              </div>
            </div>

            <div class="single-list">
              <div class="list-image">
                <a href="product-list.php"
                  ><img src="images/home-product-list/06.jpg" alt="#"
                /></a>
              </div>
              <div class="list-info">
                <h3>
                  <a href="product-list.php">Microsoft Xbox One S</a>
                </h3>
                <span>৳298.00</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <h4 class="list-title">Top Rated</h4>

            <div class="single-list">
              <div class="list-image">
                <a href="product-list.php"
                  ><img src="images/home-product-list/07.jpg" alt="#"
                /></a>
              </div>
              <div class="list-info">
                <h3>
                  <a href="product-list.php">Samsung Gear 360 VR Camera</a>
                </h3>
                <span>৳68.00</span>
              </div>
            </div>

            <div class="single-list">
              <div class="list-image">
                <a href="product-list.php"
                  ><img src="images/home-product-list/08.jpg" alt="#"
                /></a>
              </div>
              <div class="list-info">
                <h3>
                  <a href="product-list.php">Samsung Galaxy S9+ 64 GB</a>
                </h3>
                <span>৳840.00</span>
              </div>
            </div>

            <div class="single-list">
              <div class="list-image">
                <a href="product-list.php"
                  ><img src="images/home-product-list/09.jpg" alt="#"
                /></a>
              </div>
              <div class="list-info">
                <h3>
                  <a href="product-list.php">Zeus Bluetooth Headphones</a>
                </h3>
                <span>৳28.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="blog-section section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Our Latest News</h2>
              <p>

              </p>
            </div>
          </div>
        </div>
        <div class="row">

          <?php
          
          include 'db_connect.php';
          $sql = "SELECT id, title, category, description, image_url, created_at FROM news ORDER BY created_at DESC";
          $result = $conn->query($sql);
          

          ?>

          <div class="container mt-4">
              <div class="row">
                  <?php if ($result->num_rows > 0): ?>
                      <?php while ($news = $result->fetch_assoc()): ?>
                          <div class="col-lg-4 col-md-6 col-12">
                              <div class="card mb-4">
                                  <img src="<?= htmlspecialchars($news['image_url']); ?>" class="card-img-top" alt="<?= htmlspecialchars($news['title']); ?>">
                                  <div class="card-body">
                                      <h5 class="card-title"><?= htmlspecialchars($news['title']); ?></h5>
                                      <p class="card-text">
                                          <small class="text-muted"><?= htmlspecialchars($news['category']); ?> - <?= date('d M Y', strtotime($news['created_at'])); ?></small>
                                      </p>
                                      <p class="card-text"><?= htmlspecialchars(substr($news['description'], 0, 100)); ?>...</p>
                                      <a href="news-details.php?id=<?= $news['id']; ?>" class="btn btn-primary btn-sm">Read More</a>
                                  </div>
                              </div>
                          </div>
                      <?php endwhile; ?>
                  <?php else: ?>
                      <div class="col-12">
                          <p class="text-center">No news available.</p>
                      </div>
                  <?php endif; ?>
              </div>
          </div>
        </div>
      </div>
    </section>


    <?php
      include 'footer.php';  
    ?>


    <a href="#" class="scroll-top">
      <i class="lni lni-chevron-up"></i>
    </a>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
      //Hero Slider
      tns({
        container: ".hero-slider",
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 0,
        items: 1,
        nav: false,
        controls: true,
        controlsText: [
          '<i class="lni lni-chevron-left"></i>',
          '<i class="lni lni-chevron-right"></i>',
        ],
      });

      //======== Brand Slider
      tns({
        container: ".brands-logo-carousel",
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 15,
        nav: false,
        controls: false,
        responsive: {
          0: {
            items: 1,
          },
          540: {
            items: 3,
          },
          768: {
            items: 5,
          },
          992: {
            items: 6,
          },
        },
      });
    </script>
    <script>
      const finaleDate = new Date("December 22, 2024 00:00:00").getTime();

      const timer = () => {
        const now = new Date().getTime();
        let diff = finaleDate - now;
        if (diff < 0) {
          document.querySelector(".alert").style.display = "block";
          document.querySelector(".container").style.display = "none";
        }

        let days = Math.floor(diff / (1000 * 60 * 60 * 24));
        let hours = Math.floor(
          (diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((diff % (1000 * 60)) / 1000);

        days <= 99 ? (days = `0৳{days}`) : days;
        days <= 9 ? (days = `00৳{days}`) : days;
        hours <= 9 ? (hours = `0৳{hours}`) : hours;
        minutes <= 9 ? (minutes = `0৳{minutes}`) : minutes;
        seconds <= 9 ? (seconds = `0৳{seconds}`) : seconds;

        document.querySelector("#days").textContent = days;
        document.querySelector("#hours").textContent = hours;
        document.querySelector("#minutes").textContent = minutes;
        document.querySelector("#seconds").textContent = seconds;
      };
      timer();
      setInterval(timer, 1000);
    </script>
  </body>
</html>
