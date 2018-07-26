<?php
/**
* Template Name: Class Action
* Template Post Type: Class Action
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
		<h1><?php the_field( 'class_action_section_title','option'); ?></h1>

      <!-- main -->
      <div class="main">
	<?php the_field( 'class_action_section_text','option'); ?>

        <?php $ourCurrentPage = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

        <?php $loop = new WP_Query(array(
          'post_type' => 'cpt',
          /*'meta_key'      => 'class_period_start_date', */
          'orderby' => 'meta_value',
          'order' => 'ASC',
          'posts_per_page' => 6,
          'paged' => $ourCurrentPage
        ));

     
     
        if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <!-- content -->
            <section class="class-action">
                <div class="flex">
                  <div class="case">
                    <h3>Case</h3>
                    <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                  </div>
                  <div class="class">
                    <h3>Class Period</h3>
                    <p><?php the_field('class_period_start_date') ?> to <?php the_field('class_period_end_date') ?></p>
                  </div>
                  <div class="settlement">
                    <h3>Settlement</h3>
                    <p><?php the_field('settlement'); ?></p>
                  </div>
                  <div class="submit">
                    <h3>Submit By</h3>
                    <p><?php the_field('submit_by'); ?></p>
                  </div>
                  <div class="download">
                    <h3>Download Files</h3>


                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'download.svg'; ?>">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 185.343 185.343" style="enable-background:new 0 0 185.343 185.343;" xml:space="preserve">
                      <path style="fill:#cf622d;" d="M51.707,185.343c-2.741,0-5.493-1.044-7.593-3.149c-4.194-4.194-4.194-10.981,0-15.175
                        l74.352-74.347L44.114,18.32c-4.194-4.194-4.194-10.987,0-15.175c4.194-4.194,10.987-4.194,15.18,0l81.934,81.934
                        c4.194,4.194,4.194,10.987,0,15.175l-81.934,81.939C57.201,184.293,54.454,185.343,51.707,185.343z"/>
                    </svg>


                    <!-- documents -->
                    <div class="docs">
                      <!-- flex item -->
                      <div class="flex-item">
                         <a href="<?php the_field('notice'); ?>" target="_blank">Notice</a>
                      </div>
                      <!-- flex item -->
                      <div class="flex-item">
                        <a href="<?php the_field('proof_of_claim'); ?>" target="_blank">Proof of Claim</a>
                      </div>
                      <!-- flex item -->
                      <div class="flex-item">
                        <a class="toggle" href="#">Additional Files</a>
                        <div class="dropdown">
                        <?php if( have_rows('additional_files') ): ?>
                            <?php while( have_rows('additional_files') ): the_row(); ?>       
                                <!-- content here -->
                               <a href="<?php the_sub_field('file_path'); ?>" target="_blank"><?php the_sub_field('file_name'); ?></a>  
                            <?php endwhile; ?>
                        <?php endif;?>
                        </div>
                      </div>
                    </div><!-- /documents -->
                    
                    
                  </div>
                </div>
              </section> 
            <!-- /content -->


        <?php endwhile; 

       /* previous_posts_link();
        next_posts_link('Next Page', $loop->max_num_pages);*/

/*
        echo paginate_links(array(
          'total' =>  $loop->max_num_pages
          ));
*/

        echo '<div class="pagination">'; 
        previous_posts_link( '<img src="/wp-content/plugins/class-action-cpt/templates/previous.png" /> <br>Previous' );
        next_posts_link( '<img src="/wp-content/plugins/class-action-cpt/templates/next.png" /> <br>Next' );
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
