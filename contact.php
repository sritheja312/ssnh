<?php $head_title = "  Contact Us | Sri Sai Nethralaya Eye Hospital in Hyderabad" ?>
<?php $head_description = " Get in touch with Sri Sai Nethralaya eye hospital in hyderabad and wanaparthy. Call, email, or fill the form for appointments! " ?>

<?php
  $home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header-five.php'); ?>

        <section class="page-header">
            <div class="container-fluid">
                <div class="page-header__inner">
                    <div class="page-header__bg" style="background-image: url(assets/images/main/footer-bg.jpg);"></div>
                    <div class="container">
                        <div class="page-header__content">
                            <h2 class="page-header__title">Contact Us</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><span>Contact Us</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-page section-space-top">
            <div class="contact-page__inner section-space">
                <div class="container">
                    <div class="row gutter-y-40 align-items-center">
                        <div class="col-xl-7 col-lg-6 order-1 order-lg-0 wow fadeInUp" data-wow-duration="1500ms">
                            <div class="contact-page__form">
                                <form action="assets/inc/sendemail.php" class="contact-form-validated form-one">
                                    <div class="form-one__group">
                                        <div class="form-one__control form-one__control--full">
                                            <input type="text" name="name" placeholder="Full Name">
                                        </div>
                                        <div class="form-one__control form-one__control--full">
                                            <input type="email" name="email" placeholder="Email Address">
                                        </div>
                                        <div class="form-one__control form-one__control--full">
                                            <input type="tel" name="number" placeholder="Phone Number">
                                        </div>
                                        <div class="form-one__control form-one__control--full">
                                            <input type="text" name="date" placeholder="Select Date*" id="datepicker" class="mediox-datepicker">
                                            <span class="appointment-one__form__date__arrow">
                                                <i class="icon-caret-down"></i>
                                            </span>
                                        </div>
                                        <div class="form-one__control form-one__control--full">
                                            <textarea name="message" placeholder="Write Message . . ."></textarea>
                                        </div>
                                        <div class="form-one__control form-one__control--full">
                                            <button type="submit" class="mediox-btn">
                                                <span>send message</span>
                                                <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 order-0 order-lg-1">
                            <div class="contact-page__info">
                                <div class="sec-title @@extraClassName wow fadeInUp" data-wow-duration="1500ms">
                                    <h3 class="sec-title__title">We love to hear from our customers</h3>
                                </div>
                                <div class="contact-page__info__inner wow fadeInUp" data-wow-duration="1500ms">
                                    <div class="contact-page__info__item">
                                        <span class="contact-page__info__icon">
                                            <i class="icon-telephone-2"></i>
                                        </span>
                                        <div class="contact-page__info__content">
                                            <h4 class="contact-page__info__title">call now</h4>
                                            <a href="tel:+9156980036420" class="contact-page__info__link">+91 80080 60217</a>
                                        </div>
                                    </div>
                                    <div class="contact-page__info__item">
                                        <span class="contact-page__info__icon">
                                            <i class="icon-paper-plane"></i>
                                        </span>
                                        <div class="contact-page__info__content">
                                            <h4 class="contact-page__info__title">email</h4>
                                            <a href="mailto:info@srisainethralaya.com" class="contact-page__info__link">info@srisainethralaya.com</a>
                                        </div>
                                    </div>
                                    <div class="contact-page__info__item">
                                        <span class="contact-page__info__icon">
                                            <i class="icon-location"></i>
                                        </span>
                                        <div class="contact-page__info__content">
                                            <h4 class="contact-page__info__title">address</h4>
                                            <a href="https://www.google.com/maps" class="contact-page__info__link">BN Reddy Rd, Balaji Colony Phase 2, Hastinapuram, Hyderabad, Telangana 500035</a>
                                        </div>
                                    </div>
                                    <div class="contact-page__info__item">
                                        <span class="contact-page__info__icon">
                                            <i class="icon-location"></i>
                                        </span>
                                        <div class="contact-page__info__content">
                                            <h4 class="contact-page__info__title">address</h4>
                                            <a href="https://www.google.com/maps" class="contact-page__info__link">	Bus Depot Rd, Chandapur, Maremmakunta,Wanaparthy, Telangana 509103 </a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <img src="assets/images/shapes/contact-shape-1-1.png" alt="shape" class="contact-page__shape">
            </div>
        </section>

        <section class="contact-map">
            <div class="container-fluid">
                <div class="google-map google-map__contact">
                    <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4592.756655611695!2d78.55770996818549!3d17.322165954948417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcba35846a3c3b5%3A0x640cf655b445b722!2sSri%20Sai%20Nethralaya%20Eye%20Hospitals!5e0!3m2!1sen!2sin!4v1760961056349!5m2!1sen!2sin" class="map__contact" allowfullscreen></iframe>
                </div>
            </div>
            <!-- <div class="contact-map__inner">
                <div class="contact-map__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="contact-map__item__inner">
                        <button type="button" class="contact-map__btn mediox-btn"><span>Hastinapuram</span></button>
                        <div class="contact-map__office">
                            <img src="assets/images/resources/contact-map-1-2.jpg" alt="office" class="contact-map__office__image">
                            <address class="contact-map__office__address">BN Reddy Rd, Balaji Colony Phase 2, Hastinapuram, Hyderabad, Telangana 500035</address>
                            <ul class="contact-map__office__contact list-unstyled">
                                <li>
                                    <span class="contact-map__office__contact__icon">
                                        <i class="icon-paper-plane"></i>
                                    </span>
                                    <a href="mailto:iinfo.company@mail.com">info.company@mail.com</a>
                                </li>
                                <li>
                                    <span class="contact-map__office__contact__icon">
                                        <i class="icon-telephone-2"></i>
                                    </span>
                                    <a href="tel:+9156980036420">+91 5698 0036 420</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="contact-map__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="contact-map__item__inner">
                        <button type="button" class="contact-map__btn mediox-btn"><span>Wanaparthy</span></button>
                        <div class="contact-map__office">
                            <img src="assets/images/resources/contact-map-1-2.jpg" alt="office" class="contact-map__office__image">
                            <address class="contact-map__office__address">Bus Depot Rd, Chandapur, Maremmakunta,Wanaparthy, Telangana 509103</address>
                            <ul class="contact-map__office__contact list-unstyled">
                                <li>
                                    <span class="contact-map__office__contact__icon">
                                        <i class="icon-paper-plane"></i>
                                    </span>
                                    <a href="mailto:iinfo.company@mail.com">info.company@mail.com</a>
                                </li>
                                <li>
                                    <span class="contact-map__office__contact__icon">
                                        <i class="icon-telephone-2"></i>
                                    </span>
                                    <a href="tel:+9156980036420">+91 5698 0036 420</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div> -->
        </section>

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>
