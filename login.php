<?php $head_title = "Log In || Mediox || Medical & Healthcare PHP Template" ?>
<?php $body_class="custom-cursor"?>
<?php
  $home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header-four.php'); ?>

        <section class="page-header">
            <div class="container-fluid">
                <div class="page-header__inner">
                    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);"></div><!-- /.page-header__bg -->
                    <div class="container">
                        <div class="page-header__content">
                            <h2 class="page-header__title">Log in</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><span>Log in</span></li>
                            </ul><!-- /.mediox-breadcrumb list-unstyled -->
                        </div><!-- /.page-header__content -->
                    </div><!-- /.container -->
                </div><!-- /.page-header__inner -->
            </div><!-- /.container-fluid -->
        </section><!-- /.page-header -->

        <section class="login-page section-space">
            <div class="container">
                <div class="row gutter-y-60 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="login-page__image">
                            <div class="login-page__image__inner">
                                <img src="assets/images/resources/login-1-1.jpg" alt="login">
                            </div><!-- /.login-page__image__inner -->
                        </div><!-- /.login-page__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <form class="login-page__form">
                            <div class="login-page__form__inner">
                                <div class="login-page__form__top">
                                    <img src="assets/images/logo-dark.png" alt="logo" width="164" class="login-page__form__logo">
                                    <h3 class="login-page__form__title">Nice to see you again</h3>
                                </div><!-- /.login-page__form__top -->
                                <div class="login-page__form__wrapp">
                                    <div class="login-page__form__input-box">
                                        <label for="login_email_or_phone" class="login-page__form__label">Login</label>
                                        <input type="text" id="login_email_or_phone" placeholder="Email or phone number">
                                    </div>
                                    <div class="login-page__form__input-box">
                                        <label for="login_password" class="login-page__form__label">Password</label>
                                        <div class="login-page__form__input-box__inner">
                                            <input type="password" id="login_password" placeholder="Enter password" class="toggle-password-input">
                                            <i class="toggle-password-icon fa fa-fw fa-eye-slash"></i>
                                        </div>
                                    </div>
                                    <div class="login-page__form__input-box login-page__form__input-box--3">
                                        <label class="login-page__form__checked-box" for="remember-policy">
                                            <input type="checkbox" name="remember-policy" id="remember-policy">
                                            <span></span>
                                            Remember me
                                        </label>
                                        <a href="login.php" class="login-page__form__forgot">Forgot password?</a>
                                    </div>
                                    <div class="login-page__form__input-box login-page__form__input-box--4">
                                        <button type="submit" class="login-page__form__btn mediox-btn">Log In</button>
                                    </div>
                                </div><!-- /.login-page__form__wrapp -->
                                <div class="login-page__form__bottom">
                                    <p class="login-page__form__register-text">Don’t have an account? <a href="register.php">Sign up now</a></p>
                                </div><!-- /.login-page__form__bottom -->
                            </div><!-- /.login-page__form__inner -->
                        </form><!-- /.login-page__form -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row gutter-y-60 -->
            </div><!-- /.container -->
        </section><!-- /.login-page section-space -->

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>