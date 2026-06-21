<?php
$page_title = 'Sorwatom - Title Here';
include '_head.php';
?>
<body>

<!-- Header -->
<?php include 'nav_bar.html'; ?>

<!--Page header & Title-->
<section id="page_header" class="products"></section>

<!--Page Content-->
<section id="blog" class="padding-bottom common-bg bg-wrap positive-re">

    <div class="default-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active">About</li>
                        <li class="breadcrumb-item active">Title Here</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <?php include 'about_sidebar.html'; ?>

            <div class="col-md-9 col-sm-8">

                <!--Title-->
                <div class="text-center">
                    <div class="border-wrap wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                        <span class="line-border-left"></span>
                        <h3 class="center-content">Our Journey<span></span></h3>
                    </div>
                </div>

                <div class="half_space wow fadeInDown" data-wow-duration="1s" data-wow-delay=".6s">
                    <h3 class="heading-title">Section Title</h3>
                    <p class="text-justify half_space"></p>
                    <p class="text-justify">
                        Text here
                    </p>
                    <!-- additional paragraphs
                    <p class="text-justify">
                        Text here
                    </p>
                    -->
                </div><!-- /.half_space -->

            </div><!-- /.col-md-9 col-sm-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

</section>

<?php include 'footer.html'; ?>

<a href="javascript:void(0)" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

<?php include '_scripts.php'; ?>
</body>
</html>
