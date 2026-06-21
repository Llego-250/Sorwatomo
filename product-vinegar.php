<?php
$page_title = 'Sorwatom - Vinegar';
include '_head.php';
?>

<body>

<!-- Header -->
<?php include 'nav_bar.html'; ?>

<!--Page header & Title-->
<section id="page_header" class="products"></section>

<!--Page Content-->
<section id="blog" class="padding-bottom bg-wrap common-bg positive-re">

    <div class="default-breadcrumb">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="products.php">Our Products</a></li>
              <li class="breadcrumb-item active">Ketchup</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="row">
        <!--Sidebar-->
        <div class="col-md-3 col-sm-4">
          <aside class="sidebar">
            <div class="widget">

              <div class="text-center side-heading-content">
                <span class="line-border-left"></span>
                <h4 class="center-content">Products</h4>
                <span class="line-border-right"></span>
              </div>

                <!-- List of links to types of products -->
                <?php include 'products_sidebar.html'; ?>

            </div><!--/.widget-->
          </aside><!--/.sidebar-->
        </div>

        <div class="col-md-9 col-sm-7">
          <!-- Title -->
          <div class="text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
            <div class="border-wrap">
              <span class="line-border-left"></span>
              <h3 class="center-content">Vinegar</h3>
              <span class="line-border-right"></span>
              <p></p>
            </div>
          </div>

          <!-- Vinegar -->
          <div class="products-details half_space wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
            <h3 class="product-header"><span>Vinegar</span></h3>
            <div class="row">

              <!-- Image -->
              <div class="col-md-4">
                <div class="product-img">
                  <ul id="product-gal" class="gallery prod-gal-wrap list-unstyled cS-hidden">
                    <li data-thumb="img/product/vinegar.png">
                      <img src="img/product/vinegar.png" class="img-responsive" loading="lazy" />
                      <h5 class="prod-gal-title"></h5>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Description -->
              <div class="col-md-8">
                <div class="acc-container">
                  <div class="acc-wrap">
                    <div class="acc-content open">
                      <div class="acc-content-inner">
                        <p>Made with the highest quality products,
                          our white vinegar can be used directly on your
                          salads or applied to any dressing of your choice.
                        </p>
                      </div>
                    </div>
                  </div>

                </div><!--/.accordial panel exit-->
              </div><!--/.col-md-8 -->

            </div><!--/.row -->
          </div><!--/.product Details -->

        </div><!--/.col-md-9 -->
      </div><!--/.row -->
    </div><!--/.container -->
</section>

<?php include 'footer.html'; ?>

<a href="javascript:void(0)" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

<?php include '_scripts.php'; ?>
</body>
</html>
