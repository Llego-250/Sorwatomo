<?php
$page_title = 'Sorwatom - Contact Us';
include '_head.php';
?>

<body>

<!-- Header -->
<?php include 'nav_bar.html'; ?>

<!--Page header & Title-->
<section id="page_header" class="products"></section>

<!-- from orginal one -->
<section class="padding-bottom common-bg bg-wrap positive-re">

    <div class="default-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container order-page">
        <div class="row">

            <!-- Contact Form -->
            <div class="col-lg-7 col-md-6 col-sm-6">

                <div class="text-center">
                    <div class="border-wrap wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInDown;">
                      <span class="line-border-left"></span>
                      <h3 class="center-content">Get in <span>Touch</span></h3>
                      <span class="line-border-right"></span>
                    </div>
                </div>

                <!-- Form -->
                <form id="contact-form" class="form-request callus" method="post" action="mailer_contact/send.php" novalidate="true">
                    <fieldset>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-response"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name is required" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Mobile*" class="form-control" name="phone" id="form-phone" data-error="Mobile Number is required" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email id is required" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea placeholder="Message*" class="textarea form-control" name="message" id="form-message" rows="7" cols="20" data-error="Message is required" required=""></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                <div class="form-group margin-bottom-none">
                                    <input type="submit" class="btn-submit button3 disabled" value="Send Message">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>

                <br>
            </div><!-- Contact Form End -->

            <!-- Contact Addresses -->
            <div class="col-lg-5 col-md-6 col-sm-6 bistro contact-add">
                <div class="border-wrap  text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInDown;">
                    <span class="line-border-left"></span>
                    <h3 class="center-content">Address</h3>
                </div>
                <!-- Rwanda Details -->
                <div class="con-add con-add-fa wow fadeInRight" data-wow-duration="500ms" data-wow-delay="1200ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 1200ms; animation-name: fadeInRight;">
                    <h5>RWANDA</h5>
                    <div class="row">
                        <div class="col-md-5 col-lg-5">
                            <p><i class="fa fa-phone fa-lg"></i>  (+250) 787160000</p>
                        </div>
                        <div class="col-md-7 col-lg-7">
                           <p><i class="icon-dollar"></i><a href="mailto:info@sorwatom.com">info@sorwatom.com</a></p>
                        </div>
                    </div>
                </div>
                <!-- Burundi Details -->
                <div class="con-add con-add-fa wow fadeInRight" data-wow-duration="500ms" data-wow-delay="1200ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 1200ms; animation-name: fadeInRight;">
                        <h5>BURUNDI</h5>
                        <div class="row">
                            <div class="col-md-5 col-lg-5">
                                <p><i class="fa fa-phone fa-lg"></i>  (+257) 76779999</p>
                            </div>
                            <div class="col-md-7 col-lg-7">
                                <p><i class="icon-dollar"></i><a href="mailto:info@sorwatom.com">info@sorwatom.com</a></p>
                            </div>
                        </div>
                </div>
                <!-- DRC Details -->
                <div class="con-add con-add-fa wow fadeInRight" data-wow-duration="500ms" data-wow-delay="1200ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 1200ms; animation-name: fadeInRight;">
                        <h5>DRC</h5>
                        <div class="row">
                            <div class="col-md-5 col-lg-5">
                                <p><i class="fa fa-phone fa-lg"></i> (+257) 79990650</p>
                            </div>
                            <div class="col-md-5 col-lg-5">
                                <p><i class="icon-dollar"></i><a href="mailto:info@sorwatom.com">info@sorwatom.com</a></p>
                            </div>
                        </div>
                </div>

                <div class="con-add wow fadeInRight" data-wow-duration="500ms" data-wow-delay="1200ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 1200ms; animation-name: fadeInRight;">
                    <ul class="social_icon">
                        <li>
                            <a href="https://www.facebook.com/SORWATOM/" target="_blank" class="facebook">     <i class="icon-facebook5"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/sorwatom" target="_blank" class="twitter">
                                <i class="icon-twitter4"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/sorwatom-ltd-6b2a48177/" target="_blank" class="linkedin">
                                <i class="icon-linkedin2"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/sorwatom/" target="_blank" class="instagram">
                                <i class="icon-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.html'; ?>

<a href="javascript:void(0)" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

<?php include '_scripts.php'; ?>
</body>
</html>
