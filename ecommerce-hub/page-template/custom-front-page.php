<?php
/**
 * Template Name: Custom home page
 */
get_header(); ?>

<main id="maincontent" role="main">  
  <?php do_action('ecommerce_hub_above_slider_section'); ?>

  <?php if( get_theme_mod('ecommerce_hub_slider_hide') != '' || get_theme_mod('ecommerce_hub_slider_responsive') != ''){ ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod('ecommerce_hub_slider_speed',3000)); ?>"> 
        <?php $ecommerce_hub_content_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'ecommerce_hub_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $ecommerce_hub_content_pages[] = $mod;
            }
          }
          if( !empty($ecommerce_hub_content_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $ecommerce_hub_content_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php if(has_post_thumbnail()){
                  the_post_thumbnail();
              } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/block-patterns/images/banner.png" alt="" />
              <?php } ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <?php if( get_theme_mod('ecommerce_hub_slider_small_title') != '' ){ ?>
                    <div class="mb-1 wow bounceInUp" data-wow-duration="2s">
                      <span class="slider-badge mb-1"><?php echo esc_html(get_theme_mod('ecommerce_hub_slider_small_title',''));?></span>
                    </div>
                  <?php }?>
                  <?php if ( get_theme_mod('ecommerce_hub_slider_title',true) != '' ) {?>
                    <h1 class="animated fadeInDown"><?php the_title(); ?></h1>
                  <?php }?>
                  <?php if(get_theme_mod('ecommerce_hub_slider_button',true) != '' || get_theme_mod('ecommerce_hub_slider_button_responsive',true) != ''|| get_theme_mod('ecommerce_hub_slider_button_link') != '') {?>
                    <?php if ( get_theme_mod('ecommerce_hub_slider_button_label','BOOK LESSON') != '' ) {?>
                      <div class="more-btn my-3">              
                        <a href="<?php echo esc_url(get_theme_mod('ecommerce_hub_slider_button_link')!= '') ? esc_url(get_theme_mod('ecommerce_hub_slider_button_link')) : esc_url(get_permalink()); ?>"><?php echo esc_html( get_theme_mod('ecommerce_hub_slider_button_label',__('SHOP NOW','ecommerce-hub')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('ecommerce_hub_slider_button_label',__('SHOP NOW','ecommerce-hub')) ); ?></span></a>
                      </div>
                    <?php }?>
                  <?php }?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <?php if(get_theme_mod('ecommerce_hub_slider_arrow_hide_show', true)){?>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('ecommerce_hub_slider_prev_icon','fas fa-chevron-left')); ?>"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Previous', 'ecommerce-hub' ); ?></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('ecommerce_hub_slider_next_icon','fas fa-chevron-right')); ?>"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Next', 'ecommerce-hub' ); ?></span>
          </a>
        <?php } ?>  
      </div>  
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php do_action('ecommerce_hub_below_slider_section'); ?>

  <section id="feature-products">
    <div class="container">
      <?php if( get_theme_mod('ecommerce_hub_page_title') != ''){ ?>
        <strong><?php echo esc_html(get_theme_mod('ecommerce_hub_page_title','')); ?></strong>
      <?php }?>
      <?php $ecommerce_hub_content_pages = array();    
      $mod = absint( get_theme_mod( 'ecommerce_hub_feature_page' ));
      if ( 'page-none-selected' != $mod ) {
        $ecommerce_hub_content_pages[] = $mod;
      }
      if( !empty($ecommerce_hub_content_pages) ) :
        $args = array(
          'post_type' => 'page',
          'post__in' => $ecommerce_hub_content_pages,
          'orderby' => 'post__in'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          $count = 0;
          while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="row box-image text-center">
              <?php the_content(); ?>
              <div class="clearfix"></div>
            </div>
          <?php $count++; endwhile; 
          wp_reset_postdata(); ?>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
      endif;?>
      <div class="clearfix"></div> 
    </div>
  </section>

  <?php do_action('ecommerce_hub_after_featured_products_section'); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="entry-content"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>