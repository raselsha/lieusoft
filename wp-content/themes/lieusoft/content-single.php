
<div class="row">
	<div class="col-md-12">
		<div class="post">
			<h2 class="post_title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h2>
			<div class="meta">
				<p>Posted in: <a href="<?php get_category_link( $category_id ); ?>"><?php the_category( ', ' ); ?></a> | by: <?php the_author_posts_link(); ?> | at: <a href="<?php the_permalink() ?>"><?php the_time('d-M-Y'); ?></a> | comments: <?php comments_popup_link('No comments','1 Comment','% Comments','','Comments off'); ?></p>
			</div>
			<div class="text-center">
				<?php the_post_thumbnail(); ?>
			</div>
			<?php the_content(); ?>

		</div>
		<div class="pull-left">
                <?php previous_post_link('<span class="btn btn-default">%link</span>', '<i class="fa fa-angle-double-left"></i> Previous'); ?>
             </div>
             <div class="pull-right">
             <?php next_post_link( '<span class="btn btn-default">%link</span>', 'Next <i class="fa fa-angle-double-right"></i>'); ?>
             </div>
	</div>
</div>