<?php
// if($_POST) {
//     $name = $_POST['name'];
//     $lastName = $_POST['last-name'];
//     $number = $_POST['number'];
//     $email = $_POST['email'];
//     $message = $_POST['message'];
    
//     $to = 'bhagatservices1@gmail.com';
//     $subject = 'Contact Form Submission';
//     $body = "Name: $name\nLast Name: $lastName\nPhone Number: $number\nEmail: $email\nMessage: $message";
    
//     if(mail($to, $subject, $body)) {
//         echo 'Message sent successfully!';
//     } else {
//         echo 'Sorry, an error occurred. Please try again later.';
//     }
// }
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Contact  </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="16x16"  href="assets/images/resources/logo.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Assimox HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/assimox-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="assets/vendors/free-hand-font/stylesheet.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/assimox.css" />
    <link rel="stylesheet" href="assets/css/assimox-responsive.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>




    <?php include ('header.php')?>


        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg"
                style="background-image: url(assets/images/backgrounds/page-header-bg-img.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-header__inner">
                            <h2 class="page-header__title">Contact Us</h2>
                            <ul class="thm-breadcrumb list-unstyled">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section  class="process">
            <div class="container">
               
                <div class="row">
               
            <div class="container">
                <div class="section-title text-left">
                    <h2 class="section-title__title">Contact Us</h2>
                </div>
                <div class="row">
                    <!--Process Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="process__single">
                           
                            <div class="process__icon">
                                <!-- <span class="icon-contact"></span> -->
                                <img src="assets/images/backgrounds/pin.png" alt="">
                            </div>
                            <div class="process__title-box">
                                <h4 class="process__title">Address</h4>
                                <p class="process__sub-title">754 1st b cross muthyalamma temple road behind muthyalamma temple muthyal nagar gokula extension nagar Bengaluru Karnataka 560054</p>
                            </div>
                            
                        </div>
                    </div>
                    <!--Process Single End-->
                    <!--Process Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="process__single">
                         
                            <div class="process__icon">
                            <img src="assets/images/backgrounds/telephone.png" alt="">
                            </div>
                            <div class="process__title-box">
                                <h4 class="process__title">Phone</h4>
                                <a href="tel:8867412047">8867412047</a>
                            </div>
                            
                        </div>
                    </div>
                    <!--Process Single End-->
                    <!--Process Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="process__single">
                           
                            <div class="process__icon">
                            <img src="assets/images/backgrounds/mail.png" alt="">
                            </div>
                            <div class="process__title-box">
                                <h4 class="process__title">Email</h4>
                                <a href="mailto:bhagatservices1@gmail.com">bhagatservices1@gmail.com</a>
                            
                            </div>
                          
                        </div>
                    </div>
                    <!--Process Single End-->
                </div>
            </div>
      
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Google Map Start-->
      <!--  <section class="contact-page-google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="google-map__two" allowfullscreen></iframe>

        </section>-->
        <!--Google Map End-->

        <?php include ('footer.php')?>
    

    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="assets/vendors/sidebar-content/jquery-sidebar-content.js"></script>
    <script src="assets/vendors/tweenmax/TweenMax.min.js"></script>




    <!-- template js -->
    <script src="assets/js/assimox.js"></script>
</body>

</html>
<style>
    .process__single {
        height: 270px;
        text-align: center;
    }
</style>