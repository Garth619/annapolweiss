<?php
/**
* Template Name: Langing Page
* Template Post Type: landingpage
 */

get_header(); ?>

<!-- embed css -->
<?php echo '<style>';
include 'main.css';
echo '</style>';?>



<!-- banner -->
<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/wp-content/themes/anapolweiss/banner.php";
include($path);
?>


<div class="inner_page_orangeline">
	<span class="line"></span>
</div><!-- inner_page_orangeline -->



<div class="inner_main_wrapper">
	<div class="inner_page_content">
		<h1>Archives</h1>

      <!-- main -->
      <div class="main">

        <?php $ourCurrentPage = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

        <?php $loop = new WP_Query(array(
          'post_type' => 'landing',
          /*'meta_key'      => 'class_period_start_date', */
          'orderby' => 'meta_value',
          'order' => 'ASC',
          'posts_per_page' => 6,
          'paged' => $ourCurrentPage
        ));

     
     
        if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <!-- content goes here-->
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <!-- /content -->


        <?php endwhile; 


        echo '<div class="pagination">'; 
        previous_posts_link( 'Previous' );
        next_posts_link( 'Next' );
        echo '</div>';  

        endif; //wp_reset_postdata(); ?>


        </div>
        <!-- /main -->





	</div><!-- inner_page_content -->
</div><!-- inner_main_container -->



<?php get_footer(); ?>
<script>
  <?php include 'script.js'; ?>
</script>
