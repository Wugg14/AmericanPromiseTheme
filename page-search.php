<?php
/**
 * Traditional Search Page
 *
 * @package  	AmericanPromise\AmericanPromiseTheme
 * @since		1.0.0
 * @author		MarkSteininger
 * @link		marksteininger.com
 * @license		GNU General Public License 2.0+
 */
namespace AmericanPromise\AmericanPromiseTheme;

$args = array(
  'post_status'=>'publish',
  'post_type'=>'tribe_events',
  'posts_per_page'=>10,
  //order by startdate from newest to oldest
  'meta_key'=>'_EventStartDate',
  'orderby'=>'_EventStartDate',
  'order'=>'DESC',
  //required in 3.x
  'eventDisplay'=>'custom',
);
$get_posts = null;
$get_posts = new \WP_Query();
$get_posts->query($args);
if($get_posts->have_posts()) : while($get_posts->have_posts()) : $get_posts->the_post(); ?>

  <a href="<?php the_permalink(); ?>">
    <?php the_title(); ?>
  </a><br />
    <?php echo tribe_get_start_date(); ?>
  <?php the_content(); ?>

<?php
  endwhile;
  endif;
  wp_reset_query();
?>
