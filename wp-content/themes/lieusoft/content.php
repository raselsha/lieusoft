
<div class="row">
	<div class="col-md-12">
		<div class="post">
			<h2 class="post_title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h2>
			<div class="meta">
				<p>Posted in: <a href="<?php get_category_link( $category_id ); ?>"><?php the_category( ', ' ); ?></a> | by: <?php the_author_posts_link(); ?> | at: <a href="<?php the_permalink() ?>"><?php the_time('d-M-Y'); ?></a> | comments: <?php comments_popup_link('No comments','1 Comment','% Comments','','Comments off'); ?></p>
			</div>
			<div class="row">
				<?php if ( has_post_thumbnail() ) :?>
					<div class="col-md-2">
						<div class="thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
					</div>
					<div class="col-md-10">
						<?php the_content(); ?>
					</div>
				<?php else:?>
					<div class="col-md-12">
						<?php the_content(); ?>
					</div>
				<?php endif;?>

			</div>
		</div>
	</div>
</div>