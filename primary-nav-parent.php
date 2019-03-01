<?php

/**
* Template Name: Primary Nav Parent
* Description: Custom page template for parent links in the primary nav
*/
namespace AmericanPromise\AmericanPromiseTheme;

// Adds the child page flip cards after the content
add_action( 'genesis_after_entry' , __NAMESPACE__ . '\custom_child_page_flip_cards' );

// Adds a fliter to apply a new classname to entry content on this template only
add_filter( 'genesis_attr_entry', __NAMESPACE__ . '\themeprefix_add_css_attr' );


/**
 * Flip Cards for Parent Links
 *
 * @since 1.0.0
 *
 * @return void
 */

function custom_child_page_flip_cards() {

	$id = get_the_ID();

	$getPages = new \WP_Query(array(
		'post_type'      => 'page',
		'posts_per_page' => -1,
		'post_parent'    => $id,
		'order'          => 'ASC',
		'orderby'        => 'menu_order'
		));

	$pageCounter = 1;

	while ($getPages->have_posts()) {
		$count = $getPages->post_count;
		$getPages->the_post();

		if($pageCounter == 1 or $pageCounter == 4){
			if($count%3!=0 and $pageCounter == 4) {
				?>
				<div class="first one-third pushed-left">
				<?php
			} else{
				?>
				<div class="first one-third">
				<?php
			}

		} else{
			?>
			<div class="one-third">
			<?php
		}
		?>

			 <div class="flip-card">
				<?php
				if ($pageCounter%2==0) {
					?>
					<div class="flip-card__inner front--red">
					<?php
				} else{
					?>
					<div class="flip-card__inner front--blue">
					<?php
				}
				?>
					<div class="flip-card__front">
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="flip-card__back">
						<h1><a style="color:white;" href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
						<p> <?php if (has_excerpt()) {
							echo get_the_excerpt();
						} else {
							echo wp_trim_words(get_the_content(), 32);
						} ?> <a style="color:white;" href="<?php the_permalink(); ?>">Read more</a></p>

					</div>
				</div>
			</div>
		</div>
	<?php
	$pageCounter += 1;
	};
};

/**
 * Adds class to entry content to remove extra padding
 *
 * @since 1.0.0
 *
 * @return $attributes a class name to be applied to the entry content
 */
function themeprefix_add_css_attr( $attributes ) {

 // add original plus extra CSS classes
 $attributes['class'] .= ' nav-parent-styling';

 // return the attributes
 return $attributes;

};

genesis();
