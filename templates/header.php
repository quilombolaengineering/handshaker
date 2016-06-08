                <header class="header">
                        <!-- slider animation -->
                        <ul class="header-keyframe-fader">
                                <li></li>
                                <li></li>
                                <li></li>
                        </ul>
                        <div class="v-center">
                                <a onmousedown="tick()" onmouseover="pop()" href="<?= esc_url(home_url('/')); ?>">
                                        <img class="header-icon" src="https://s3.ap-northeast-2.amazonaws.com/www-handshake302-com/handshake302-zumba-icon-600x600px.png" />
                                </a>
                                <h1><?php bloginfo('name'); ?></h1>
                                <h4 class="entry-title"><?php the_title(); ?></h4>
                                <nav class="nav-primary">
                                        <?php
                                                if (has_nav_menu('primary_navigation')) :
                                                        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                                                endif;
                                        ?>
                                </nav>
                        </div>
                </header>
