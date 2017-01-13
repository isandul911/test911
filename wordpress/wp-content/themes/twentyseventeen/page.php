<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="right_side_wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'page' );
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->


	<!--						<div class="item-meta"><span class="activity">--><?php //printf( __( 'active %s ago', 'buddypress' ), bp_get_group_last_active() ) ?><!--</span></div>-->
<?php //bp_group_creator_username( $group = false ); ?>   creator_username<br>

<?php
//						$this_id = bp_get_group_id();
//						echo "group id is: " . $this_id;  // make sure there is a value here.
//						$has_members_str = "group_id=" . $this_id;
//						 if ( bp_group_has_members($has_members_str) ) : ?>
	<!--							<ul id="member-list" class="item-list">-->
	<!--								--><?php //while ( bp_group_members() ) : bp_group_the_member(); ?>
	<!--									<li>-->
	<!--										--><?php //bp_group_member_avatar('type=tumb&width=50&height=50' ) ?>
	<!--										--><?php ////bp_group_member_link() ?>
	<!--										--><?php ////bp_group_member_joined_since() ?>
	<!--									</li>-->
	<!--								--><?php //endwhile; ?>
	<!--							</ul>-->
	<!--						--><?php //else: ?>
	<!--							<div id="message" class="info">-->
	<!--								<p>This group has no members.</p>-->
	<!--							</div>-->
	<!--						--><?php //endif;?>

<?php get_footer();
