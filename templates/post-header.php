               <header class="post-header">
                        <!-- slider animation -->
                        <ul class="post-header-keyframe-slider">
                                <li></li>
                                <li></li>
                                <li></li>
                        </ul>
                        <div class="v-center">
                                <a onmousedown="tick()" onmouseover="pop()" href="<?= esc_url(home_url('/')); ?>">
                                        <img class="header-icon" src="https://s3.ap-northeast-2.amazonaws.com/www-handshake302-com/handshake302-zumba-icon-600x600px.png" />
                                </a>
                                <h1><?php bloginfo('name'); ?></h1>
                                <h2 class="entry-title"><?php the_title(); ?></h2>
      				<h3 class="entry-date"><?php get_template_part('templates/entry-meta'); ?></h3>
                                <nav class="nav-primary">
                                        <?php
                                                if (has_nav_menu('primary_navigation')) :
                                                        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                                                endif;
                                        ?>
                                </nav>
                        </div>
                </header>
