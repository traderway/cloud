<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">

	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
				
		<?php
			global $cat;
			$cats = get_categories(array(
				'child_of' => $cat,
				'parent' => $cat,
				'hide_empty' => 0
			));
			$c = get_category($cat);
			if(empty($cats)){
		?>
				<div class="item">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<?php 
					echo '
						<div class="item cat_item">
							<div class="item_title"><h2><a title="'.$the_cat->name.'" href="'.get_category_link($the_cat).'">'.$the_cat->name.'</a></h2></div>  
							<ul class="box_list">';								
							echo '<li><span class="alignright">'.mysql2date('Y-m-d', $post->post_date).'</span>
							<a title="'.$post->post_title.'" href="'.get_permalink($post->ID).'">'.$post->post_title.'</a></li>';
							echo '</ul>
						</div>';
					
					 ?>
					
					<?php endwhile; ?>
					<?php else: ?>
						<div class="post"><p>Updating</p></div>
					<?php endif; ?>
				</div>

		<?php
				the_posts_pagination( array(
					'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
				) );
		
		
			}else{
				foreach($cats as $the_cat){
					$posts = get_posts(array(
						'category' => $the_cat->cat_ID,
						'numberposts' => 10,
					));
					if(!empty($posts)){
						echo '
						<div class="item cat_item">
							<div class="item_title"><h2><a title="'.$the_cat->name.'" href="'.get_category_link($the_cat).'">'.$the_cat->name.'</a></h2></div>  
							<ul class="box_list">';
								foreach($posts as $post){
									echo '<li><span class="alignright">'.mysql2date('Y-m-d', $post->post_date).'</span>
									<a title="'.$post->post_title.'" href="'.get_permalink($post->ID).'">'.$post->post_title.'</a></li>';
								}
							echo '</ul>
						</div>';
					}
				}
			}
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->
<?php get_footer();
