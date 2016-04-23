<section class="section-banner">
	<!-- slider animation -->
	<ul class="keyframe-slider">
		<li></li>
		<li></li>
		<li></li>
	</ul>
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
	<div class="v-center">
		<h1><?php bloginfo('name'); ?></h1> 
		<p><?php bloginfo('description'); ?></p>	
	</div>
</section>
