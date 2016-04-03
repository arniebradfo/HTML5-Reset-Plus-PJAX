<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-Plus-PJAX
 * @since HTML5 Reset + PJAX 0.1
 */
?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php posted_on(); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<footer class="postmetadata">
				<?php the_tags(__('Tags: ','html5reset'), ', ', '<br />'); ?>
				<?php _e('Posted in','html5reset'); ?> <?php the_category(', ') ?> | 
				<?php comments_popup_link(__('No Comments &#187;','html5reset'), __('1 Comment &#187;','html5reset'), __('% Comments &#187;','html5reset')); ?>
			</footer>

		</article>

<?php // end of postitem ?>