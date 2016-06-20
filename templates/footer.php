<section id="footer" class="section-footer">
	<!-- slider animation -->
	<ul class="keyframe-slider">
		<li></li>
		<li></li>
		<li></li>
	</ul>
	<div class="v-center">
		<div class="row">
		        <div class="col-md-3">
		                <h2>搜索Search</h2>
		                <p><?php get_search_form(); ?></p>
		        </div>
		        <div class="col-md-3">
	                	<h2>分享Share</h2>
				<div onmousedown="sploob()" class="col-md-2">
					<a href="https://www.facebook.com/Handshake-302-198875220512689/">
						<i id="facebookIcon" class="fa fa-facebook animated" aria-hidden="true"></i>
					</a>
				</div>
				<div onmousedown="sploob()" class="col-md-2">
					<a href="http://mp.weixin.qq.com/s?__biz=MjM5MjY1OTQwNw==&mid=402769166&idx=1&sn=4f9d6c439c0ecb75c6ecf30ce902f5b1#rd">
						<i id="weixinIcon" class="fa fa-weixin animated" aria-hidden="true"></i>
					</a>
				</div>
		        </div>
		        <div class="col-md-3">
		                <h2>链接Links</h2>
		                <p><a href="#artists">朋友Friends</a></p>
		                <p><a href="#porfolios">邻居Neighbors</a></p>
		        </div>
		        <div class="col-md-3">
		                <h2>联络Contact</h2>
		                <p><a href="mailto:handshake302@126.com">电子邮件Email</a></p>
		                <p><a href="http://handshake302.com/index.php/address/">地址Address</a></p>
	        	</div>
		</div>
		<div class="row">
		        <div class="col-md-4 col-md-offset-4">
		                <p class="about-text">Developed by <a href="http://www.quilombolaengineering.com">Quilombola Engineering</a> </p>
	        	</div>
		</div>
	</div>
</section>

<script type="text/javascript">
        function pop(){ var audio = new Audio('https://s3.ap-northeast-2.amazonaws.com/handshaker-theme/pop.mp3'); audio.play(); }
        function tick(){ var audio = new Audio('https://s3.ap-northeast-2.amazonaws.com/handshaker-theme/tick.mp3'); audio.play(); }
        function sploob(){ var audio = new Audio('https://s3.ap-northeast-2.amazonaws.com/handshaker-theme/sploob.m4a'); audio.play(); }
</script>

<script>
	<!-- make reveal calls last -->
      	// use rotation in reveal configuration
	var logoReveal = { origin : 'left', distance : '25vw', duration : 2000, easing : 'ease-out' };
	var titleReveal = { origin : 'top', duration : 1000, easing : 'ease-out' };
	var aboutReveal = { origin : 'left', duration : 1500, easing : 'ease-out' };

      	sr.reveal('.logoReveal', logoReveal);
      	sr.reveal('.titleReveal', titleReveal);
      	sr.reveal('.aboutReveal', aboutReveal);
</script>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
// Sticky Header
$(window).scroll(function() {

    if ($(window).scrollTop() > 100) {
        $('.section-navigation').addClass('sticky');
    } else {
        $('.section-navigation').removeClass('sticky');
    }
});

// Mobile Navigation
$('.mobile-toggle').click(function() {
    if ($('.section-navigation').hasClass('open-nav')) {
        $('.section-navigation').removeClass('open-nav');
    } else {
        $('.section-navigation').addClass('open-nav');
    }
});

$('.section-navigation li a').click(function() {
    if ($('.section-navigation').hasClass('open-nav')) {
        $('.navigation').removeClass('open-nav');
        $('.section-navigation').removeClass('open-nav');
    }
});

// navigation scroll lijepo radi materem
$('nav a').click(function(event) {
    var id = $(this).attr("href");
    var offset = 70;
    var target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
});
</script>
