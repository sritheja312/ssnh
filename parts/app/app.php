<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $head_title; ?></title>
    <!-- favicons Icons -->
    <!-- Favicon -->
    <link rel="manifest" href="fav/site.webmanifest">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="<?php echo $head_description; ?> />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="assets/vendors/mediox-icons/style.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/slick/css/slick.css" />

    <!-- template styles -->
     <?php if(isset($home)&&!empty($home)) {?>
    <link rel="stylesheet" href="assets/css/mediox.css" />
    <?php }?>
    <?php if(isset($home_dark)&&!empty($home_dark)) {?>
    <link rel="stylesheet" href="assets/css/mediox-dark.css" />
    <?php }?>
    <?php if(isset($rtl)&&!empty($rtl)) {?>
    <link rel="stylesheet" href="assets/css/mediox-rtl.css" />
     <?php }?>
     <?php if(isset($rtl)&&!empty($rtl)) {?>
    <link rel="stylesheet" href="assets/css/mediox-custom-rtl.css" />
    <?php }?>
    <?php if(isset($rtl)&&!empty($rtl)) {?>
    <link rel="stylesheet" href="assets/vendors/mediox-toolbar/css/mediox-toolbar.css">
    <?php }?>
</head>

<body
    <?php if (isset($body_class) && !empty($body_class)) { ?>
    class="<?php echo $body_class; ?>"
    <?php } ?>
    <?php if (isset($body_bg_image) && !empty($body_bg_image)) { ?>
    data-tm-bg-img="<?php echo $body_bg_image; ?>"
    <?php } ?>>