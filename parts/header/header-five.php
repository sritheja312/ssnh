       <?php
        require_once('parts/app/app.php');
        require_once('parts/preloader.php');
        require_once('parts/scroll-top-scroll.php');
        ?>
       <div class="page-wrapper">
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
                    </div><!-- /.topbar-one__inner -->
                </div><!-- /.container-fluid -->
            </div><!-- /.topbar-one -->

            <header class="main-header sticky-header sticky-header--normal">
                <div class="container-fluid">
                    <div class="main-header__inner">
                        <div class="main-header__logo logo-retina">
                            <a href="index.php">
                                <img src="assets/images/logo/logo.png" alt="Mediox PHP" width="164">
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
                    </div><!-- /.main-header__inner -->
                </div><!-- /.container-fluid -->
            </header><!-- /.main-header --> 