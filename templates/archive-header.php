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
<?php
$postlist = get_posts( 'orderby=menu_order&sort_order=asc' );
$posts = array();
foreach ( $postlist as $post ) {
   $posts[] += $post->ID;
}

$current = array_search( get_the_ID(), $posts );
$prevID = $posts[$current-1];
$nextID = $posts[$current+1];
?>

<div class="navigation">
<?php if ( !empty( $prevID ) ): ?>
<div class="alignleft">
<a href="<?php echo get_permalink( $prevID ); ?>"
  title="<?php echo get_the_title( $prevID ); ?>">Previous</a>
</div>
<?php endif;
if ( !empty( $nextID ) ): ?>
<div class="alignright">
<a href="<?php echo get_permalink( $nextID ); ?>" 
 title="<?php echo get_the_title( $nextID ); ?>">Next</a>
</div>
<?php endif; ?>
</div><!-- .navigation -->
        </div>
</header>
