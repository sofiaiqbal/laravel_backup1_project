<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Howard Insurance TV Give Away</title>
  <!-- site favicon -->
  <link rel="icon" type="image/png" href="assets/images/favicon.png" sizes="16x16">
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="assets/css/line-awesome.min.css">
  <!-- custom select css -->
  <link rel="stylesheet" href="assets/css/vendor/nice-select.css">
  <!-- animate css  -->
  <link rel="stylesheet" href="assets/css/vendor/animate.min.css">
  <!-- lightcase css -->
  <link rel="stylesheet" href="assets/css/vendor/lightcase.css">
  <!-- slick slider css -->
  <link rel="stylesheet" href="assets/css/vendor/slick.css">
  <!-- jquery ui css -->
  <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">
  <!-- datepicker css -->
  <link rel="stylesheet" href="assets/css/vendor/datepicker.min.css">
  <!-- style main css -->
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
  integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
  <body>

  <div class="preloader">
    <svg class="mainSVG" viewBox="0 0 800 600" xmlns="http://www.w3.org/2000/svg">
      <defs>   
        <path id="puff" d="M4.5,8.3C6,8.4,6.5,7,6.5,7s2,0.7,2.9-0.1C10,6.4,10.3,4.1,9.1,4c2-0.5,1.5-2.4-0.1-2.9c-1.1-0.3-1.8,0-1.8,0
        s-1.5-1.6-3.4-1C2.5,0.5,2.1,2.3,2.1,2.3S0,2.3,0,4.4c0,1.1,1,2.1,2.2,2.1C2.2,7.9,3.5,8.2,4.5,8.3z" fill="#fff"/>
        <circle id="dot"  cx="0" cy="0" r="5" fill="#fff"/>   
      </defs>
      
        <circle id="mainCircle" fill="none" stroke="none" stroke-width="2" stroke-miterlimit="10" cx="400" cy="300" r="130"/>
        <circle id="circlePath" fill="none" stroke="none" stroke-width="2" stroke-miterlimit="10" cx="400" cy="300" r="80"/>
      
      <g id="mainContainer" >
        <g id="car">
    <path id="carRot" fill="#FFF"  d="M45.6,16.9l0-11.4c0-3-1.5-5.5-4.5-5.5L3.5,0C0.5,0,0,1.5,0,4.5l0,13.4c0,3,0.5,4.5,3.5,4.5l37.6,0
      C44.1,22.4,45.6,19.9,45.6,16.9z M31.9,21.4l-23.3,0l2.2-2.6l14.1,0L31.9,21.4z M34.2,21c-3.8-1-7.3-3.1-7.3-3.1l0-13.4l7.3-3.1
      C34.2,1.4,37.1,11.9,34.2,21z M6.9,1.5c0-0.9,2.3,3.1,2.3,3.1l0,13.4c0,0-0.7,1.5-2.3,3.1C5.8,19.3,5.1,5.8,6.9,1.5z M24.9,3.9
      l-14.1,0L8.6,1.3l23.3,0L24.9,3.9z"/>      
        </g>
      </g>
    </svg>
  </div>

  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="las la-arrow-up"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->


  <!-- page-wrapper start -->
  <div class="page-wrapper" >
      <!-- login modal -->
  <div class="modal fade" id="formModal" tabindex="1" role="dialog" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-body" id ="formBtn">
          <div class="account-form-area" id = "butn">
            <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close" ><i class="las la-times"></i></button>
            <h3 class="title">Hi, Please fill the below details to Enter the giveaway</h3>
            <div class="account-form-wrapper">
              <form id = "frm">
                    @csrf
                <div class="form-group">
                  <label>First Name <sup>*</sup></label>
                  <input type="text" name="firstname" id="login_name" placeholder="Enter your First Name">
                </div>
                <div class="form-group">
                  <label>Last Name <sup>*</sup></label>
                  <input type="text" name="lastname" id="login_name" placeholder="Enter your Last Name">
                </div>
                <div class="form-group">
                  <label>Email <sup>*</sup></label>
                  <input type="email" name="email" id="login_name" placeholder="Enter your Email">
                </div>
                <div class="form-group">
                  <label>Phone <sup>*</sup></label>
                  <input type="text" name="phonenumber" id="login_pass" placeholder="Enter your phone number">
                </div>
                <div class="form-group">
                  <label>Zip Code <sup>*</sup></label>
                  <input type="text" name="zipcode" id="login_pass" placeholder="Enter your zipcode">
                </div>
                <div class="form-group text-center mt-5" id = "btn">
                  <button class="cmn-btn" >Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id = "message"></div>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script>
    $(document).ready(function() {
    // Hide the form initially
    $('#formBtn').show();
    jQuery('#frm').submit(function(e){
      e.preventDefault();
     // jQuery("#butn").attr('disabled',true);
      jQuery("#btn").attr('disabled',true);
      jQuery("#btn").attr('value',"Please wait....");
      //$('#butn').show();
      jQuery.ajax({
        url:"{{url('form-submit')}}",
        data:jQuery('#frm').serialize(),
        type:'post',
        success:function(result){
          //$('#frm').hide();
         // jQuery("#butn").attr('disabled',true);
          toastr.success(result.message, 'Success');
          $('#frm').show();
          $('#frm')[0].reset();
         // jQuery('#frm')['0'].reset();
          $('#butn').hide();
          //jQuery("#btn").attr('disabled',false);
          //jQuery("#btn").attr('value',"Submit");
        },
        //$('#butn').show();
        error: function (xhr, status, error) {
        // Show an error Toastr notification
        toastr.error('Error saving data', 'Error');
    } 
      });
        //$('#butn').show();
          //$('#formModal').show();
    });
  });
  </script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <!-- Sign Up modal -->
  <div class="modal fade" id="signupModal" tabindex="1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-body">
          <div class="account-form-area">
            <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
            <h3 class="title">Open Free Account</h3>
            <div class="account-form-wrapper">
              <form>
                <div class="form-group">
                  <label>Email <sup>*</sup></label>
                  <input type="email" name="signup_name" id="signup_name" placeholder="Enter your Email">
                </div>
                <div class="form-group">
                  <label>password <sup>*</sup></label>
                  <input type="password" name="signup_pass" id="signup_pass" placeholder="password">
                </div>
                <div class="form-group">
                  <label>confirm password <sup>*</sup></label>
                  <input type="password" name="signup_re-pass" id="signup_re-pass" placeholder="Confirm Password">
                </div>
                <div class="d-flex flex-wrap mt-2">
                  <div class="custom-checkbox">
                    <input type="checkbox" name="id-2" id="id-2" checked>
                    <label for="id-2">I agree to the</label>
                    <span class="checkbox"></span>
                  </div>
                  <a href="#0" class="link ml-1">Terms, Privacy Policy and Fees</a>
                </div>
                <div class="form-group text-center mt-5">
                  <button class="cmn-btn">log in</button>
                </div>
              </form>
              <p class="text-center mt-4"> Already have an account? <a href="#0" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></p>
              <div class="divider">
                <span>or</span>
              </div>
              <ul class="social-link-list">
                <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- header-section start  -->
  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <div class="left d-flex align-items-center">
              <a href="tel:65655655"><i class="las la-phone-volume"></i> Customer Support</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- header__top end -->
    <div class="header__bottom">
      <div class="container">
        <nav class="navbar navbar-expand-xl p-0 align-items-center">
          <a class="site-logo site-title" href="index.html"><img src="assets/images/logo.png" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu ms-auto">
              <li><a href="index.html">Home</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div><!-- header__bottom end -->
  </header>
  <!-- header-section end  -->

    <!-- hero start -->
    <section class="hero style--three">
      <div class="hero__circle"><img src="assets/images/elements/hero-4-circle.png" alt="image"></div>
      <div class="hero__obj"><img src="assets/images/elements/hero-4-obj.png" alt="image"></div>

      <div class="hero__car-left wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.9s"><img src="assets/images/elements/hero-4-car-left.png" alt="image"></div>
      <div class="hero__bike wow bounceIn" data-wow-duration="0.5s" data-wow-delay="1.3s"><img src="assets/images/elements/hero-4-bike.png" alt="image"></div>
      <div class="hero__car-right wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.9s"><img src="assets/images/elements/hero-4-car-right.png" alt="image"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="hero__content text-center">
              <div class="hero__subtitle wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.9s">Howard Insurance is excited to present the chance to</div>
              <h2 class="hero__title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">Win a 55" TV</h2>
              <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Don't miss your chance. Will you be our next lucky winner?</p>
              <div class="hero__btn wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <a href="#" data-bs-target="#formModal" data-bs-toggle="modal" class="cmn-btn">Enter Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- hero start -->

    <!-- next-draw-section start -->
    <div class="pt-120 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="next-draw-area">
              <div class="left">
                <h3 class="title">Win a TV</h3>
                <p>Apply fast, you are running out of time</p>
              </div>
              <div class="middle">
                <p>Last Date to Apply:</p>
                <div class="clock2" data-clock="2023/08/30"></div>
              </div>
              <div class="right">
                <a href="#" data-bs-target="#formModal" data-bs-toggle="modal" class="cmn-btn style--three btn--sm d-flex align-items-center justify-content-center"><img src="assets/images/icon/btn/tag.png" alt="icon" class="mr-2">Enter Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- next-draw-section end -->

    <!-- how to play section start -->
    <section class="position-relative pt-120 pb-120 overflow-hidden">
      <div class="play-elements wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.7s">
        <img src="assets/images/elements/play-el.png" alt="image">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-sm-start text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
            <div class="section-header">
              <h2 class="section-title">How To Enter</h2>
              <p>Follow these 3 easy steps! </p>
            </div>
          </div>
        </div>
        <div class="row mb-none-30 justify-content-xl-start justify-content-center">
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="play-card bg_img" data-background="assets/images/elements/card-bg-1.jpg">
              <div class="play-card__icon">
                <img src="assets/images/icon/play/1.png" alt="image-icon">
                <span class="play-card__number">01</span>
              </div>
              <div class="play-card__content">
                <h3 class="play-card__title">Step 1</h3>
                <p>Click on Participate Buttom</p>
              </div>
            </div><!-- play-card end -->
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="play-card bg_img" data-background="assets/images/elements/card-bg-2.jpg">
              <div class="play-card__icon">
                <img src="assets/images/icon/play/2.png" alt="image-icon">
                <span class="play-card__number">02</span>
              </div>
              <div class="play-card__content">
                <h3 class="play-card__title">Step 2</h3>
                <p>Fill the details in form</p>
              </div>
            </div><!-- play-card end -->
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="play-card bg_img" data-background="assets/images/elements/card-bg-3.jpg">
              <div class="play-card__icon">
                <img src="assets/images/icon/play/3.png" alt="image-icon">
                <span class="play-card__number">03</span>
              </div>
              <div class="play-card__content">
                <h3 class="play-card__title">Step 3</h3>
                <p>Submit</p>
              </div>
            </div><!-- play-card end -->
          </div>
        </div>
      </div>
    </section>
    <!-- how to play section end -->

    <!-- testimonial section start -->
    <!-- section class="has-bg--shape pt-120 pb-120">
      <div class="bg-shape">
        <div class="round-shape d-sm-block d-none"><img src="assets/images/elements/round-shape.png" alt="image"></div>
        <div class="shape-1"></div>
        <div class="shape-2"></div>
        <div class="shape-3"></div>
        <div class="shape-4"></div>
        <div class="shape-5"></div>
        <div class="shape-6"></div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-9 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
            <div class="section-header text-center">
              <span class="section-sub-title">Testimonial</span>
              <h2 class="section-title">our Happy Customers All Around the World</h2>
              <p>With over 12 years of experience as the world’s leading online insurance service provider. Find out what our members have to say about us!</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="testimonial-area bg_img" data-background="assets/images/elements/testimonial-single.jpg">
              <div class="testimonial-slider">
                <div class="testimonial-single">
                  <div class="testimonial-single__thumb">
                    <img src="assets/images/winner/2.png" alt="image">
                  </div>
                  <div class="testimonial-single__content">
                    <h4 class="client-name">Dave Ford</h4>
                    <p>“Unbelievable this is a dream come true,no way would I ever think I would own a TV like this” </p>
                    <div class="ratings">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                  </div>
                </div><!-- testimonial-single end 
                <div class="testimonial-single">
                  <div class="testimonial-single__thumb">
                    <img src="assets/images/winner/1.png" alt="image">
                  </div>
                  <div class="testimonial-single__content">
                    <h4 class="client-name">Dave Ford</h4>
                    <p>“Unbelievable this is a dream come true,no way would I ever think I would own a TV like this” </p>
                    <div class="ratings">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                  </div>
                </div><!-- testimonial-single end 
              </div><!-- testimonial-slider end 
            </div><!-- testimonial-area end 
          </div>
        </div>
      </div>
    </section -->
    <!-- testimonial section end -->

    <!-- support section start  -->
    <section class="pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <span class="section-sub-title">Get in touch with our friendly support</span>
              <h2 class="section-title">Customer Support</h2>
              <p>Have a question or need help? Contact our friendly support team.</p>
            </div>
          </div>
        </div>
        <div class="row mb-none-30">
          <div class="col-lg-6 mb-30 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
            <div class="support-card">
              <div class="support-card__thumb">
                <img src="assets/images/icon/support/1.png" alt="image">
              </div>
              <div class="support-card__content">
                <h3 class="support-card__title">Talk to our support team</h3>
                <p>Got a question about Lotteries? Get in touch with our friendly staff.</p>
                <div class="btn-grp justify-content-xl-start mt-3">
                  <a href="tel:6564545" class="btn-border btn-sm text-capitalize">Call us <i class="fas fa-phone-alt"></i></a>
                  <a href="/cdn-cgi/l/email-protection#c0a4a8a4aa80a7ada1a9aceea3afad" class="cmn-btn btn-sm text-capitalize">Email us <i class="far fa-envelope"></i></a>
                </div>
              </div>
            </div><!-- support-card end -->
          </div>
          <div class="col-lg-6 mb-30 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <div class="support-card">
              <div class="support-card__thumb">
                <img src="assets/images/icon/support/2.png" alt="image">
              </div>
              <div class="support-card__content">
                <h3 class="support-card__title">Official Giveaway Rules</h3>
                <div class="btn-grp justify-content-xl-start mt-3">
                  <a href="faq.html" class="btn-border btn-sm text-capitalize">Official Rules</a>
                </div>
              </div>
            </div><!-- support-card end -->
          </div>
        </div>
      </div>
    </section>
    <!-- support section end  -->

      <!-- footer section start  -->
  <footer class="footer-section">
    <div class="bg-shape--top"><img src="assets/images/elements/round-shape-2.png" alt="image"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
          <div class="subscribe-area">
            <div class="left">
              <span class="subtitle">Subscribe Now</span>
              <h3 class="title">To Get Exclusive Benefits</h3>
            </div>
            <div class="right">
              <form class="subscribe-form">
                <input type="email" name="subscribe_email" id="subscribe_email" placeholder="Enter Your Email">
                <button type="submit">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container pt-120">
      <div class="row pb-5 align-items-center">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-8">
          <ul class="short-links justify-content-lg-end justify-content-center">
            <li><a href="#0">Abount</a></li>
            <li><a href="#0">FAQs</a></li>
            <li><a href="#0">Contact</a></li>
            <li><a href="#0">Terms of Services</a></li>
            <li><a href="#0">Privacy</a></li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="row py-5 align-items-center">
        <div class="col-lg-6">
          <p class="copy-right-text text-lg-start text-center mb-lg-0 mb-3">Copyright © 2023.All Rights Reserved By <a href="/">Howard Insurance</a></p>
        </div>
        <div class="col-lg-6">
          <ul class="social-links justify-content-lg-end justify-content-center">
            <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section end -->
  </div>
  <!-- page-wrapper end -->
  <!-- jQuery library -->
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
  <!-- custom select js -->
  <script src="assets/js/vendor/jquery.nice-select.min.js"></script> 
  <!-- lightcase js -->
  <script src="assets/js/vendor/lightcase.js"></script>
  <!-- wow js -->
  <script src="assets/js/vendor/wow.min.js"></script>
  <!-- slick slider js -->
  <script src="assets/js/vendor/slick.min.js"></script>
  <!-- countdown js -->
  <script src="assets/js/vendor/jquery.countdown.js"></script>
  <!-- jquery ui js -->
  <script src="assets/js/vendor/jquery-ui.min.js"></script>
  <!-- datepicker js -->
  <script src="assets/js/vendor/datepicker.min.js"></script>
  <script src="assets/js/vendor/datepicker.en.js"></script>
  <!-- preloader -->
  <script src='assets/js/vendor/TweenMax.min.js'></script>
  <script src='assets/js/vendor/MorphSVGPlugin.min.js'></script>
  <script src="assets/js/preloader.js"></script>
  <!-- contact js -->
  <script src="assets/js/contact.js"></script>
  <!-- custom js -->
  <script src="assets/js/app.js"></script>
  </body>
</html>