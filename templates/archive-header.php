<section id="header" class="header">
        <!-- slider animation -->
        <ul class="header-keyframe-slider">
                <li></li>
                <li></li>
                <li></li>
        </ul>
        <div class="v-center">
                <a onmousedown="tick()" onmouseover="pop()" href="#introduction">
                        <img class="scroll-down" src="https://s3.ap-northeast-2.amazonaws.com/www-handshake302-com/handshake302-zumba-icon-600x600px.png" />
                </a>
                <h1><?php bloginfo('name'); ?></h1>
	    	<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<nav class="nav-primary">
			<?php
				if (has_nav_menu('primary_navigation')) :
				wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
				endif;
			?>
		</nav>
        </div>
</section>

<header class="header">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
  </div>
</header>
