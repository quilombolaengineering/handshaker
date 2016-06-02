<section id="footer" class="section-footer">
	<!-- slider animation -->
	<ul class="keyframe-slider">
		<li></li>
		<li></li>
		<li></li>
	</ul>
	<div class="v-center">
	        <div class="col-md-3">
	                <h2>What We Do</h2>
	                <p>Our Mission</p>
	                <p>Get Involved</p>
	        </div>
	        <div class="col-md-3">
	                <h2>Who We Are</h2>
	                <p>Our Team</p>
	                <p>Partners</p>
	        </div>
	        <div class="col-md-3">
	                <h2>About Us</h2>
	                <p class="about-text">握手302希望通过这个网站向大家简易，清晰地介绍握手302的情况，也能邀请感兴趣的朋友共同参与.</p>
	        </div>
	        <div class="col-md-3">
                	<h2>Links</h2>
	                <p class="about-text">Learn more about Handshake302:</p>
			<div onmousedown="sploob()" class="col-xs-2"><span class="glyphicon glyphicon-link"></span></div>
			<div onmousedown="sploob()" class="col-xs-2"><span class="glyphicon glyphicon-search"></span></div>
			<div onmousedown="sploob()" class="col-xs-2"><span class="glyphicon glyphicon-user"></span></div>
			<div onmousedown="sploob()" class="col-xs-2"><span class="glyphicon glyphicon-phone"></span></div>
			<div onmousedown="sploob()" class="col-xs-2"><span class="glyphicon glyphicon-fire"></span></div>
			<div onmousedown="sploob()" class="col-xs-2"><span class="glyphicon glyphicon-envelope"></span></div>
        	</div>
	        <div class="col-md-4 col-md-offset-4">
	                <p class="about-text">Maintained by <a href="http://www.quilombolaengineering.com">Quilombola Engineering</a>. </p>
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
