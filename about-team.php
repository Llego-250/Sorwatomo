<?php
$page_title = 'Sorwatom - Team';
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
              <li class="breadcrumb-item"><a href="about-us.php">About</a></li>
              <li class="breadcrumb-item active">Our Team</li>
            </ol>
          </div>
        </div>
      </div>
  </div>

  <div class="container">
      <div class="row">
        <!-- Sidebar -->
        <?php include 'about_sidebar.html'; ?>

        <!-- Main Content -->
        <div class="col-md-9 col-sm-8">

          <!--Title-->
          <div class="text-center">
            <div class="border-wrap wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
              <span class="line-border-left"></span>
              <h3 class="center-content">Our Team <span></span></h3>
              <span class="line-border-right"></span>
            </div>
          </div>

          <!-- Shareholder - Dillux SA -->
          <div class="team-wrap">
            <div class="row">
              <!-- If there is image
              <div class="col-md-4 team-inner team-wrap-img wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                <img src="" alt="" class="img-responsive">
              </div>
              -->

              <!-- col-md-8 if image-->
              <div class="col-md-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                <div class="team-inner">
                  <div class="team-content">
                    <span>Shareholder</span>
                    <h4>Dillux SA</h4>
                    <span class="title-line">&nbsp;</span>

                    <div class="jrm-truncate" data-lines="3" data-link-caption="Read More ..." data-link-closecaption="Read Less ... ">
                      <p>A Mauritius based Private Equity Company that was started in May
                        2009 with a focus on the East and Central African region. Dillux approaches investments in high
                        growth industries within the region that either have a strong track record of profitability or with
                        good prospects of future profitability.
                      </p>
                      <p>The company takes a bottom up approach to investment
                        analyses focusing on; industry positioning, management capabilities, balance sheet structure
                        and return on investment. In addition to these metrics, Dillux is also keen on promoting
                        employment and wealth creation within the region. Our target company size is within $5.0 -
                        $15.0 million and we expect this to grow with time.
                      </p>
                    </div><!-- /.jrm-truncate -->

                  </div><!-- /.team-content -->
                </div><!-- /.team-inner -->
              </div><!-- /.col-md-8 -->

            </div><!-- /.row -->

          </div><!-- /.team-wrap -->

          <!-- Chairman - James KIBERA -->
          <div class="team-wrap">
            <div class="row">
              <!-- If there is image
              <div class="col-md-4 team-inner team-wrap-img wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                <img src="" alt="" class="img-responsive">
              </div>
              -->

              <!-- col-md-8 if image-->
              <div class="col-md-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                <div class="team-inner">
                  <div class="team-content">
                    <span>Chairman</span>
                    <h4>James KIBERA</h4>
                    <span class="title-line">&nbsp;</span>
                    <div class="jrm-truncate" data-lines="3" data-link-caption="Read More ..." data-link-closecaption="Read Less ... ">
                      <p>started his career with Citibank Kenya as a Trainee Manager in
                      1992 and became 2 years later a full manager of the bank. At Citibank, James was responsible
                      for various roles including; bank asset and liability strategy, structuring credits & foreign exchange
                      management. He interacted with various economic sectors such as freight, tourism,
                      manufacturing, airlines and NGO's thus developing a clear factual and working understanding of
                      the operation of most industries in the region and importantly, banking within the region.
                      James is now involved full time in DILLUX SA and is in charge of the overall running of the fund,
                      goal setting and high level company negotiations.
                      </p>
                    </div><!-- /.jrm-truncate -->
                  </div><!-- /.team-content -->
                </div><!-- /.team-inner -->
              </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
          </div><!-- /.team-wrap -->

          <!-- Managing Director - Vip Kumar -->
          <div class="team-wrap">
            <div class="row">
              <!-- If there is image
              <div class="col-md-4 team-inner team-wrap-img wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                <img src="" alt="" class="img-responsive">
              </div>
              -->

              <!-- col-md-8 if image -->
              <div class="col-md-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                <div class="team-inner">
                  <div class="team-content">
                    <span>Managing Director</span>
                    <h4>Vip Kumar</h4>
                    <span class="title-line">&nbsp;</span>
                    <div class="jrm-truncate" data-lines="3" data-link-caption="Read More ..." data-link-closecaption="Read Less ... ">
                      <p>Vip Kumar has over 25 years of professional leadership and
                        management expertise at multinational, corporate, SME and
                        developmental levels.
                      </p>
                    </div><!-- /.jrm-truncate -->
                  </div> <!-- /.team-content -->
                </div><!-- /.team-inner -->
              </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
          </div><!-- /.team-wrap -->


        </div><!-- /.col-md-9 col-sm-8 -->

      </div><!-- /.row -->
  </div>

</section>

<?php include 'footer.html'; ?>

<a href="javascript:void(0)" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

<?php include '_scripts.php'; ?>
</body>
</html>
