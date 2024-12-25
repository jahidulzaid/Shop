<?php

include 'db_connect.php';

        
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch product details
$sql = "SELECT * FROM products WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

if (!$product) {
    echo "<h3 class='text-center mt-5'>Product not found!</h3>";
    exit;
}
?>


<!DOCTYPE html>
<html class="no-js" lang="zxx">

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
      Product Details - Mini Shop
    </title>
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
              <h1 class="page-title">Single Product</h1>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <ul class="breadcrumb-nav">
              <li>
                <a href="index.php"><i class="lni lni-home"></i> Home</a>
              </li>
              <li><a href="index.php">Shop</a></li>
              <li>Single Product</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <section class="item-details section">
      <div class="container">
        <div class="top-area">






        <div class="row align-items-center">
            <!-- Product Image -->
            <div class="col-lg-6 col-md-12 col-12">
                <div class="product-images">
                    <main id="gallery">
                        <div class="main-img">
                            <img
                                src="<?= htmlspecialchars($product['image_url']) ?>"
                                id="current"
                                alt="<?= htmlspecialchars($product['NAME']) ?>"
                            />
                        </div>
                    </main>
                </div>
            </div>
            <!-- Product Info -->
            <div class="col-lg-6 col-md-12 col-12">
                <div class="product-info">
                    <h2 class="title"><?= htmlspecialchars($product['NAME']) ?></h2>
                    <p class="category">
                        <i class="lni lni-tag"></i> <?= htmlspecialchars($product['category']) ?>:
                        <a href="javascript:void(0)"><?= htmlspecialchars($product['category']) ?></a>
                    </p>
                    <h3 class="price">
                        ৳<?= number_format($product['price'], 2) ?>
                        <span>৳<?= number_format($product['price'] * 1.1, 2) ?></span>
                    </h3>
                    <p class="info-text"><?= nl2br(htmlspecialchars($product['description'])) ?></p>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group quantity">
                                <label for="quantity">Quantity</label>
                                <select class="form-control" id="quantity">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-content">
                        <div class="row align-items-end">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="button cart-button">
                                    <button class="btn btn-primary">
                                    <a href="add_to_cart.php?id=<?= $row['id']; ?>" class="btn">
    <i class="lni lni-cart"></i> Add to Cart
</a>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="wish-button">
                                    <button class="btn btn-secondary">
                                        <i class="lni lni-reload"></i> Compare
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="wish-button">
                                    <button class="btn btn-secondary">
                                        <i class="lni lni-heart"></i> To Wishlist
                                    </button>
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

    <div
      class="modal fade review-modal"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Leave a Review</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="review-name">Your Name</label>
                  <input
                    class="form-control"
                    type="text"
                    id="review-name"
                    required
                  />
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="review-email">Your Email</label>
                  <input
                    class="form-control"
                    type="email"
                    id="review-email"
                    required
                  />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="review-subject">Subject</label>
                  <input
                    class="form-control"
                    type="text"
                    id="review-subject"
                    required
                  />
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="review-rating">Rating</label>
                  <select class="form-control" id="review-rating">
                    <option>5 Stars</option>
                    <option>4 Stars</option>
                    <option>3 Stars</option>
                    <option>2 Stars</option>
                    <option>1 Star</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="review-message">Review</label>
              <textarea
                class="form-control"
                id="review-message"
                rows="8"
                required
              ></textarea>
            </div>
          </div>
          <div class="modal-footer button">
            <button type="button" class="btn">Submit Review</button>
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

    <a href="#" class="scroll-top">
      <i class="lni lni-chevron-up"></i>
    </a>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
      const current = document.getElementById("current");
      const opacity = 0.6;
      const imgs = document.querySelectorAll(".img");
      imgs.forEach((img) => {
        img.addEventListener("click", (e) => {
          //reset opacity
          imgs.forEach((img) => {
            img.style.opacity = 1;
          });
          current.src = e.target.src;
          //adding class
          //current.classList.add("fade-in");
          //opacity
          e.target.style.opacity = opacity;
        });
      });
    </script>
  </body>
</html>
