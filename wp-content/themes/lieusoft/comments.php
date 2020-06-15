<?php

_deprecated_file( sprintf( __( 'Theme without %1$s' ), basename(__FILE__) ), '3.0', null, sprintf( __('Please include a %1$s template in your theme.'), basename(__FILE__) ) );

// Do not delete these lines
    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');

    if ( post_password_required() ) { ?>
        <p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.'); ?></p>
    <?php
        return;
    }
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>   
     
    <h2 class="widget_title" id="comments">
       <?php printf( _n( '1 Comment', '%1$s Comments', get_comments_number()),
    number_format_i18n( get_comments_number() ), '&#8220;'.get_the_title().'&#8221;'); ?>
    </h2>
    <?php if (!comments_open() ) : ?>
           <h2><?php _e('Comments are off'); ?></h2>
    <?php endif; ?>

    <ol class="commentlist">
        <?php wp_list_comments();?>
    </ol>

    <div class="row">
        <div class="alignleft"><?php previous_comments_link() ?></div>
        <div class="alignright"><?php next_comments_link() ?></div>
    </div>
<?php else : // this is displayed if there are no comments so far ?>
    <?php if ( comments_open() ) : ?>
        <!-- If comments are open, but there are no comments. -->
        <h2 class="page-header">
           No Comments
        </h2>
    <?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

    <div id="respond">
        <h3><?php comment_form_title( __('Leave a Reply '), __('Leave a Reply to %s' ) ); ?></h3>
        <div id="cancel-comment-reply">
            <small><?php cancel_comment_reply_link() ?></small>
        </div>

        <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
        <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url( get_permalink() )); ?></p>
        <?php else : ?>

        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

        <?php if ( is_user_logged_in() ) : ?>

        <p><?php printf(__('Logged in as <a href="%1$s">%2$s</a>.'), get_option('siteurl').'/wp-admin/profile.php', $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php esc_attr_e('Log out of this account'); ?>"><?php _e('Log out &raquo;'); ?></a></p>

        <?php else : ?>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="author">
                            <small>
                                <?php _e('Name'); ?> <?php if ($req) _e('<span class="text-danger">*</span>'); ?>
                            </small>
                        </label>
                        <input class="form-control" type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="email">
                            <small><?php _e('Email'); ?> <?php if ($req) _e('<span class="text-danger">*</span>'); ?></small>
                        </label>
                        <input class="form-control" type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                	<label for="email">
                    	<small><?php _e('Comment'); ?> <?php if ($req) _e('<span class="text-danger">*</span>'); ?></small>
                        </label>
                    <textarea class="form-control" name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea>
                </div>
            </div>
        </div>

        <p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php esc_attr_e('Post Comment'); ?>" class="btn btn-default" />
        <?php comment_id_fields(); ?>
        </p>
        <?php do_action('comment_form', $post->ID); ?>

        </form>

        <?php endif; // If registration required and not logged in ?>
    </div>
<?php endif; // if you delete this the sky will fall on your head ?>
