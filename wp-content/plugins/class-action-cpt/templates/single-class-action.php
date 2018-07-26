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
    <h1>Class Actions</h1>
     <?php 
          if ( have_posts() ) {
              while ( have_posts() ) {
                the_post();
                //the_content();
           ?>


         

           <!-- content -->
            <section class="class-action">
              <h2><?php the_title(); ?></h2>
              <!-- date -->
              <div class="flex meta">
               <div class="class">
                  <p>Class Period <span><?php the_field('class_period_start_date') ?> to <?php the_field('class_period_end_date') ?></span></p>
                </div>
                <div class="settlement">
                  <p>Settlement <span><?php the_field('settlement'); ?></span></p>
                </div>
                <div class="submit">
                  <p>Submit By <span><?php the_field('submit_by'); ?></span></p>
                </div>
              </div>



                  <!-- content -->
                  <div class="case-content">
                    <?php the_field('case'); ?>
                  </div>


                  <p class="dl">Download Files <img src="<?php echo plugin_dir_url( __FILE__ ) . 'download.svg'; ?>"></p>

             
                  <!-- documents -->
                  <div class="docs flex">
                    <!-- flex item -->
                    <div class="flex-item">
                       <a href="<?php the_field('notice'); ?>" target="_blank">Notice File</a>
                    </div>
                    <!-- flex item -->
                    <div class="flex-item">
                      <a href="<?php the_field('proof_of_claim'); ?>" target="_blank">Proof of Claim File</a>
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
           


            </section>

           <!-- /content -->


           
              <? } // end while
          } //end if
        ?>    
  </div><!-- inner_page_content -->
</div><!-- inner_main_container -->





<?php get_footer(); ?>
<script>
  <?php include 'script.js'; ?>
</script>
