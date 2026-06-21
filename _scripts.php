<?php $include_slider = $include_slider ?? false; ?>
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator.min.js"></script>
<script src="js/modernizr.js"></script>
<?php if ($include_slider): ?>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/slider.js"></script>
<?php endif; ?>
<script src="js/owl.carousel.min.js"></script>
<script src="js/owl.carousel2.thumbs.js"></script>
<script src="js/lightslider.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery-countTo.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery.timelineMe.js"></script>
<script src="js/jquery.bootstrap-responsive-tabs.min.js"></script>
<script src="js/jquery.gallery.js"></script>
<script src="js/functions.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/advanced-read-more.min.js"></script>
<script src="js/lity.js"></script>
<script src="js/jquery.jscroll.js"></script>
<script src="js/jquery.eeyellow.Timeline.js"></script>
<script src="js/isotope-docs.mineccb.js"></script>
<script>
$(document).ready(function () {
    $('.VivaTimeline').vivaTimeline({ carousel: true, carouselTime: 3000 });
});
$('body').readMore({
    showLines: 5,
    linkCaption: 'expand...',
    linkCloseCaption: 'reduce...',
    linkHint: 'Click for more information'
});
const wow = new WOW({ animateClass: 'animated', offset: -10000 });
wow.init();
</script>
