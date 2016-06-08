<section id="posts" class="section-posts">
        <!-- Post Content-->
        <div id="main" class="container-fluid">
                <div class="row">
                	<div class="col-xs-10 col-xs-offset-1">
				<?php while (have_posts()) : the_post(); ?>
				  <article <?php post_class(); ?>>
				    <div class="entry-content">
				      <?php the_content(); ?>
				    </div>
				    <footer>
				      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
				    </footer>
				    <?php comments_template('/templates/comments.php'); ?>
				  </article>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>
