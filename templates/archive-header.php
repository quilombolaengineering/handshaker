<header class="header">
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
		<p><?php single_cat_title('Currently browsing the '); ?> category.</p>
		<p><?php echo "Current Category ID is: " . $cat ;?></p>

<?php

$current_category = single_cat_title("", false);
$args = array( 'posts_per_page' => 5, 'offset'=> 0, 'category' => $cat );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php endforeach; 
wp_reset_postdata();?>
		<nav class="nav-primary">
			<?php
				if (has_nav_menu('primary_navigation')) :
				wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
				endif;
			?>
		</nav>
        </div>
</header>
