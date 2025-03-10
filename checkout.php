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
    include 'db_connect.php';
    include 'header.php';  
  ?>

    <div class="breadcrumbs">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="breadcrumbs-content">
              <h1 class="page-title">checkout</h1>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <ul class="breadcrumb-nav">
              <li>
                <a href="index.php"><i class="lni lni-home"></i> Home</a>
              </li>
              <li><a href="index.php">Shop</a></li>
              <li>checkout</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <section class="checkout-wrapper section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="checkout-steps-form-style-1">
              <ul id="accordionExample">
                <li>
                  <h6
                    class="title"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="true"
                    aria-controls="collapseThree"
                  >
                    Your Personal Details
                  </h6>
                  <section
                    class="checkout-steps-form-content collapse show"
                    id="collapseThree"
                    aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="row">
                      <div class="col-md-12">
                        <div class="single-form form-default">
                          <label>User Name</label>
                          <div class="row">
                            <div class="col-md-6 form-input form">
                              <input type="text" placeholder="First Name" />
                            </div>
                            <div class="col-md-6 form-input form">
                              <input type="text" placeholder="Last Name" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>Email Address</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Email Address" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>Phone Number</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Phone Number" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="single-form form-default">
                          <label>Mailing Address</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Mailing Address" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>City</label>
                          <div class="form-input form">
                            <input type="text" placeholder="City" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>Post Code</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Post Code" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>Country</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Country" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>Region/State</label>
                          <div class="select-items">
                            <select class="form-control">
                              <option value="0">select</option>
                              <option value="1">select option 01</option>
                              <option value="2">select option 02</option>
                              <option value="3">select option 03</option>
                              <option value="4">select option 04</option>
                              <option value="5">select option 05</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="single-checkbox checkbox-style-3">
                          <input type="checkbox" id="checkbox-3" />
                          <label for="checkbox-3"><span></span></label>
                          <p>My delivery and mailing addresses are the same.</p>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="single-form button">
                          <button
                            class="btn"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseFour"
                            aria-expanded="false"
                            aria-controls="collapseFour"
                          >
                            next step
                          </button>
                        </div>
                      </div>
                    </div>
                  </section>
                </li>
                <li>
                  <h6
                    class="title collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFour"
                    aria-expanded="false"
                    aria-controls="collapseFour"
                  >
                    Shipping Address
                  </h6>
                  <section
                    class="checkout-steps-form-content collapse"
                    id="collapseFour"
                    aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="row">
                      <div class="col-md-12">
                        <div class="single-form form-default">
                          <label>User Name</label>
                          <div class="row">
                            <div class="col-md-6 form-input form">
                              <input type="text" placeholder="First Name" />
                            </div>
                            <div class="col-md-6 form-input form">
                              <input type="text" placeholder="Last Name" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>Email Address</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Email Address" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>Phone Number</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Phone Number" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="single-form form-default">
                          <label>Mailing Address</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Mailing Address" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>City</label>
                          <div class="form-input form">
                            <input type="text" placeholder="City" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>Post Code</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Post Code" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>Country</label>
                          <div class="form-input form">
                            <input type="text" placeholder="Country" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form form-default">
                          <label>Region/State</label>
                          <div class="select-items">
                            <select class="form-control">
                              <option value="0">select</option>
                              <option value="1">select option 01</option>
                              <option value="2">select option 02</option>
                              <option value="3">select option 03</option>
                              <option value="4">select option 04</option>
                              <option value="5">select option 05</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="checkout-payment-option">
                          <h6 class="heading-6 font-weight-400 payment-title">
                            Select Delivery Option
                          </h6>
                          <div class="payment-option-wrapper">
                            <div class="single-payment-option">
                              <input
                                type="radio"
                                name="shipping"
                                checked
                                id="shipping-1"
                              />
                              <label for="shipping-1">
                                <img
                                  src="images/shipping/shipping-1.png"
                                  alt="Sipping"
                                />
                                <p>Standerd Shipping</p>
                                <span class="price">৳10.50</span>
                              </label>
                            </div>
                            <div class="single-payment-option">
                              <input
                                type="radio"
                                name="shipping"
                                id="shipping-2"
                              />
                              <label for="shipping-2">
                                <img
                                  src="images/shipping/shipping-2.png"
                                  alt="Sipping"
                                />
                                <p>Standerd Shipping</p>
                                <span class="price">৳10.50</span>
                              </label>
                            </div>
                            <div class="single-payment-option">
                              <input
                                type="radio"
                                name="shipping"
                                id="shipping-3"
                              />
                              <label for="shipping-3">
                                <img
                                  src="images/shipping/shipping-3.png"
                                  alt="Sipping"
                                />
                                <p>Standerd Shipping</p>
                                <span class="price">৳10.50</span>
                              </label>
                            </div>
                            <div class="single-payment-option">
                              <input
                                type="radio"
                                name="shipping"
                                id="shipping-4"
                              />
                              <label for="shipping-4">
                                <img
                                  src="images/shipping/shipping-4.png"
                                  alt="Sipping"
                                />
                                <p>Standerd Shipping</p>
                                <span class="price">৳10.50</span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="steps-form-btn button">
                          <button
                            class="btn"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseThree"
                            aria-expanded="false"
                            aria-controls="collapseThree"
                          >
                            previous
                          </button>
                          <a href="javascript:void(0)" class="btn btn-alt"
                            >Save & Continue</a
                          >
                        </div>
                      </div>
                    </div>
                  </section>
                </li>
                <li>
                  <h6
                    class="title collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsefive"
                    aria-expanded="false"
                    aria-controls="collapsefive"
                  >
                    Payment Info
                  </h6>
                  <section
                    class="checkout-steps-form-content collapse"
                    id="collapsefive"
                    aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="row">
                      <div class="col-12">
                        <div class="checkout-payment-form">
                          <div class="single-form form-default">
                            <label>Cardholder Name</label>
                            <div class="form-input form">
                              <input
                                type="text"
                                placeholder="Cardholder Name"
                              />
                            </div>
                          </div>
                          <div class="single-form form-default">
                            <label>Card Number</label>
                            <div class="form-input form">
                              <input
                                id="credit-input"
                                type="text"
                                placeholder="0000 0000 0000 0000"
                              />
                              <img
                                src="images/payment/card.png"
                                alt="card"
                              />
                            </div>
                          </div>
                          <div class="payment-card-info">
                            <div class="single-form form-default mm-yy">
                              <label>Expiration</label>
                              <div class="expiration d-flex">
                                <div class="form-input form">
                                  <input type="text" placeholder="MM" />
                                </div>
                                <div class="form-input form">
                                  <input type="text" placeholder="YYYY" />
                                </div>
                              </div>
                            </div>
                            <div class="single-form form-default">
                              <label
                                >CVC/CVV
                                <span><i class="mdi mdi-alert-circle"></i></span
                              ></label>
                              <div class="form-input form">
                                <input type="text" placeholder="***" />
                              </div>
                            </div>
                          </div>
                          <div class="single-form form-default button">
                            <button class="btn">pay now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="checkout-sidebar">
              <div class="checkout-sidebar-coupon">
                <p>Appy Coupon to get discount!</p>
                <form action="#">
                  <div class="single-form form-default">
                    <div class="form-input form">
                      <input type="text" placeholder="Coupon Code" />
                    </div>
                    <div class="button">
                      <button class="btn">apply</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="checkout-sidebar-price-table mt-30">
                <h5 class="title">Pricing Table</h5>
                <div class="sub-total-price">
                  <div class="total-price">
                    <p class="value">Subotal Price:</p>
                    <p class="price">৳144.00</p>
                  </div>
                  <div class="total-price shipping">
                    <p class="value">Subotal Price:</p>
                    <p class="price">৳10.50</p>
                  </div>
                  <div class="total-price discount">
                    <p class="value">Subotal Price:</p>
                    <p class="price">৳10.00</p>
                  </div>
                </div>
                <div class="total-payable">
                  <div class="payable-price">
                    <p class="value">Subotal Price:</p>
                    <p class="price">৳164.50</p>
                  </div>
                </div>
                <div class="price-table-btn button">
                  <a href="javascript:void(0)" class="btn btn-alt">Checkout</a>
                </div>
              </div>
              <div class="checkout-sidebar-banner mt-30">
                <a href="product-list.php">
                  <img src="images/banner/banner.jpg" alt="#" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
