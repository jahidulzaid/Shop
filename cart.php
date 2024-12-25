<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
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

    <div class="breadcrumbs">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="breadcrumbs-content">
              <h1 class="page-title">Cart</h1>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <ul class="breadcrumb-nav">
              <li>
                <a href="index.php"><i class="lni lni-home"></i> Home</a>
              </li>
              <li><a href="index.php">Shop</a></li>
              <li>Cart</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="shopping-cart section">
      <div class="container">
        <div class="cart-list-head">
          <div class="cart-list-title">
            <div class="row">
              <div class="col-lg-1 col-md-1 col-12"></div>
              <div class="col-lg-4 col-md-3 col-12">
                <p>Product Name</p>
              </div>
              <div class="col-lg-2 col-md-2 col-12">
                <p>Quantity</p>
              </div>
              <div class="col-lg-2 col-md-2 col-12">
                <p>Subtotal</p>
              </div>
              <div class="col-lg-2 col-md-2 col-12">
                <p>Discount</p>
              </div>
              <div class="col-lg-1 col-md-2 col-12">
                <p>Remove</p>
              </div>
            </div>
          </div>

          <div class="container mt-5">


            <?php if (!empty($_SESSION['cart']))

        


            ?>

<?php
if (isset($_GET['id'])) {
  $id = intval($_GET['id']);
  $sql = "SELECT * FROM products WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
}
?>


            
            <?php
            
            $total_price = 0;
            $total_shipping = 0;
            ?>

            <?php foreach ($_SESSION['cart'] as $id => $item): ?>

                <div class="cart-single-list">
                    <div class="row align-items-center">
                        <div class="col-lg-1 col-md-1 col-12">
                            <a href="product-details.php?id=<?= $id; ?>">
                                <img src="<?= htmlspecialchars($item['image_url']); ?>" alt="<?= htmlspecialchars($item['name']); ?>" />
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-12">
                            <h5 class="product-name">
                                <a href="product-details.php?id=<?= $id; ?>">
                                    <?= htmlspecialchars($item['name']); ?>
                                </a>
                            </h5>
                            <p class="product-des">
                                <span><em>Type:</em> <?= htmlspecialchars($item['type'] ?? 'N/A'); ?></span>
                                <span><em>Color:</em> <?= htmlspecialchars($item['color'] ?? 'N/A'); ?></span>
                            </p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="count-input">
                                <select class="form-control">
                                <?php for ($i = 1; $i <= 10; $i++): ?>
                                        <option <?= $item['quantity'] == $i ? 'selected' : ''; ?>><?= $i; ?></option>
                                <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>৳<?= number_format($item['price'], 2); ?></p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>৳<?= number_format($item['price'] * $item['quantity'], 2); ?></p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-12">
                            <a class="remove-item" href="remove_from_cart.php?id=<?= $id; ?>">
                                <i class="lni lni-close"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                $total_price += $item['price'] * $item['quantity'];
                $total_shipping += 29; // Example shipping cost per item
                ?>
            <?php endforeach; ?>
          </div>





        </div>
        <div class="row">
          <div class="col-12">
            <div class="total-amount">
              <div class="row">
                <div class="col-lg-8 col-md-6 col-12">
                  <div class="left">
                    <!-- <div class="coupon">
                      <form action="#" target="_blank">
                        <input name="Coupon" placeholder="Enter Your Coupon" />
                        <div class="button">
                          <button class="btn">Apply Coupon</button>
                        </div>
                      </form>
                    </div> -->
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="right">
                    <ul>
                    <div class="cart-totals">
                      <li>Total Price: <span>৳<?= number_format($total_price, 2); ?></span> </li>
                      <li>Total Shipping: <span>৳<?= number_format($total_shipping, 2); ?></span></li>
                      <li>Grand Total: <span>৳<?= number_format($total_price + $total_shipping, 2); ?></span></li>
                    </div>
                    </ul>
                    <div class="button">
                      <a href="checkout.php" class="btn">Checkout</a>
                      <a href="product-list.php" class="btn btn-alt"
                        >Continue shopping</a
                      >
                    </div>
                  </div>
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

    <a href="#" class="scroll-top">
      <i class="lni lni-chevron-up"></i>
    </a>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
