<?php
/**
 * Template for querying child pages based on set parent id
 *
 * Used on the front page
 */
$rootpage = get_post(get_theme_mod( 'root_page' )); //Looks for the data in the setting "root_page", this should be an ID and changed depending on what page you want to be the main page. This is done in the controller under costumization.
$args = array( 
    'post_parent' => $rootpage->ID, //Specifies the parent of a given post.
    'post_type' => 'page', //Determines whether it is a "post" or a "page" (or other).
    'orderby' => 'menu_order', //Sort is by either the order in the menu of the specified location. - Order number
    'order' => 'ASC' //Pretty obvious what this does really
);

$child_query = new WP_Query( $args ); // This is a new variable that runs WP_Query with the data of the array $args
?>
<div class="child-pages-wrapper <?php if ( wp_is_mobile() ) { echo 'is-mobile'; } //Checks for mobile use and adds the class "is-mobile" if so. ?>">
    <?php while ( $child_query->have_posts() ) : $child_query->the_post(); //A loop that checks if there are any child posts - Gets the child posts if there are any. ?>  
        <section id="<?php echo $post->post_name; //makes an ID for each section with the post name ?>" class="child-page">
        	<?php the_content(); ?>
        </section>
    <?php endwhile; ?>
</div>