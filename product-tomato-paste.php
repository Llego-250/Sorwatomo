<?php
$page_title = 'Sorwatom - Tomato Paste';
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
              <li class="breadcrumb-item active">Tomato Paste</li>
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
              <h3 class="center-content">Tomato Paste</h3>

            </div>
          </div>

          <!-- Tomato Paste 70 gm-->
          <div class="products-details half_space wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
              <h3 class="product-header"><span>Tomato Paste 70 gm</span></h3>

              <div class="row">
                <!-- Image -->
                <div class="col-md-4">
                  <div class="product-img">
                    <ul id="product-gal" class="gallery prod-gal-wrap list-unstyled cS-hidden">
                      <li data-thumb="img/product/tomatoes_paste_70g.png">
                        <img src="img/product/tomatoes_paste_70g.png" class="img-responsive" loading="lazy" />
                        <h5 class="prod-gal-title">70 gm</h5>
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
                          <p>SORWATOM Double- concentrated tomato paste is made with natural
                             ripened tomatoes for a wholesome classic taste. Bold color
                             and a vibrant taste, our 70g is a must have in your kitchen.
                          </p>
                        </div>
                      </div>
                    </div>

                  </div><!--/.accordial panel exit-->
                </div><!--/.col-md-8 -->

              </div><!--/.row -->
          </div><!--/.product Details -->

          <!-- Tomato Paste 50 gm-->
          <div class="products-details half_space wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s">
              <h3 class="product-header"><span>Tomato Paste 50gm</span></h3>

              <div class="row">
                <!-- Image -->
                <div class="col-md-4">
                  <div class="product-img">
                    <ul id="product-gal" class="gallery prod-gal-wrap list-unstyled cS-hidden">
                      <li data-thumb="img/product/tomatoes_paste_50g.png">
                        <img src="img/product/tomatoes_paste_50g.png" class="img-responsive" loading="lazy" />
                        <h5 class="prod-gal-title">50 gm</h5>
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
                          <p>
                            Designed and developed to the same high specification and standard
                            as our flagship 70g pack to serve smaller households, and provide
                            a more affordable pack for price sensitive markets.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div><!--/.accordial panel exit-->
                </div><!--/.col-md-8 -->

              </div><!--/.row -->
          </div><!--/.product Details -->

          <!-- Tomato Paste 800 gm-->
          <div class="products-details products-list-details half_space wow fadeInRight" data-wow-duration="1s" data-wow-delay=".7s">
              <h3 class="product-header"><span>Tomato paste 800gm</span></h3>

              <div class="row">
                <!-- Image -->
                <div class="col-md-4">
                  <div class="product-img">
                    <ul id="product-gal" class="gallery prod-gal-wrap list-unstyled cS-hidden">
                      <li data-thumb="img/product/tomatoes_paste_800g.png">
                        <img src="img/product/tomatoes_paste_800g.png" class="img-responsive" loading="lazy" />
                        <h5 class="prod-gal-title">800 gm</h5>
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
                          <p> Developed for the hospitality industry in mind, our 800g
                            retains the same natural taste and color as all our other
                            products. Packed in easy open and reusable tins, it's a
                            perfect fit for the  HORECA market.
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
