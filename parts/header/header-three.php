       <?php
        require_once('parts/app/app.php');
        require_once('parts/preloader.php');
        require_once('parts/scroll-top-scroll.php');
        ?>
       <div class="page-wrapper">

        <div class="header-four">
            <div class="topbar-one">
                <div class="container-fluid">
                    <div class="topbar-one__inner">
                        <ul class="list-unstyled topbar-one__info">
                            <li>
                                <span class="topbar-one__info__icon">
                                    <i class="icon-location"></i>
                                </span>
                                <a class="top_address">BN Reddy Rd, Balaji Colony Phase 2, Hastinapuram, Hyderabad, Telangana 500035</a>
                            </li>
                            <li>
                                <span class="topbar-one__info__icon topbar-one__info__icon--email">
                                    <i class="icon-email"></i>
                                </span>
                                <a href="mailto:info@srisainethralaya.com">info@srisainethralaya.com</a>
                            </li>
                            <li>
                                <span class="topbar-one__info__icon">
                                    <i class="icon-telephone"></i>
                                </span>
                                <a href="tel:+918008060217">+91 80080 60217</a>
                            </li>
                        </ul>
                        <div class="topbar-one__right">
                            <div class="social-links">
                                <a href="https://www.facebook.com/srisainethralayaofficial">
                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                    <span class="sr-only">Facebook</span>
                                </a>
                                <a href="https://x.com/ssnethralaya">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                    <span class="sr-only">Twitter</span>
                                </a>
                                <a href="https://www.instagram.com/srisainethralayaofficial">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                    <span class="sr-only">Instagram</span>
                                </a>
                                <a href="https://www.youtube.com/@SriSaiNethralaya">
                                    <i class="fab fa-youtube" aria-hidden="true"></i>
                                    <span class="sr-only">Youtube</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <header class="main-header main-header--four sticky-header sticky-header--normal">
                <div class="container-fluid">
                    <div class="main-header__inner">
                        <div class="main-header__logo logo-retina">
                            <a href="index.php">
                                <img src="assets/images/main/Netralaya_Logo.png" alt="Sri Sai Nethralaya" width="124">
                            </a>
                        </div><!-- /.main-header__logo -->
                        <div class="main-header__right">
                            <!-- <div class="main-header__sidebar-btn sidebar-btn__toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>/.sidebar-btn__toggler -->
                            <nav class="main-header__nav main-menu">
                                <?php require_once('parts/header/menu.php'); ?>
                            </nav>
                            <div class="mobile-nav__btn mobile-nav__toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            
                            <!-- <a href="appointment.php" class="mediox-btn main-header__btn"> -->
                            <a href="" class="mediox-btn main-header__btn" data-bs-toggle="modal" data-bs-target="#formModal"> <!-- video-popup --> 
                                <span>Book Appointment</span>
                                <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </header>
        </div>




    <script>
          if ($(".video-popup").length) {
                $(".video-popup").magnificPopup({
                type: "iframe",
                mainClass: "mfp-fade",
                removalDelay: 160,
                preloader: true,

                fixedContentPos: false
                });
            }
    </script>




<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Book an Appointment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <!-- Modal Body with Form -->
      <div class="modal-body">
       

        <div class="appointment-one__content">
            <form action="assets/inc/sendemail.php" class="appointment-one__form contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms">
                <div class="form-one__group">
                    <div class="form-one__control">
                        <input type="text" name="name" placeholder="Full Name*">
                    </div><!-- /.form-one__control -->
                    <div class="form-one__control">
                        <input type="email" name="email" placeholder="Email Address*">
                    </div><!-- /.form-one__control -->
                    <div class="form-one__control">
                        <input type="tel" name="number" placeholder="Phone Number">
                    </div><!-- /.form-one__control -->
                    <div class="form-one__control appointment-one__form__date">
                        <input type="text" name="date" placeholder="Select Date*" id="datepicker" class="mediox-datepicker">
                        <span class="appointment-one__form__date__arrow">
                            <i class="icon-caret-down"></i>
                        </span><!-- /.appointment-one__form__date__arrow -->
                    </div><!-- /.form-one__control -->
                    <div class="form-one__control">
                        <select class="selectpicker" aria-label="Type of Service">
                            <option selected>Type of Service</option>
                            <option value="1">immediate care</option>
                            <option value="2">dental care</option>
                            <option value="3">neurology care</option>
                            <option value="4">gynaecologists</option>
                            <option value="5">orthopaedics</option>
                            <option value="6">cardiology</option>
                        </select>
                    </div><!-- /.form-one__control -->
                    <div class="form-one__control form-one__control--full">
                        <textarea name="message" placeholder="Type Here..."></textarea>
                    </div><!-- /.form-one__control -->
                    <div class="form-one__control form-one__control--full">
                        <button type="submit" class="mediox-btn">
                            <span>book appointment</span>
                            <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                        </button>
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    </div>
                </div>
            </form>
            <div class="result"></div>
        </div>


      </div>
      
    </div>
  </div>
</div>


      