<?php include 'header.php'; ?>

<section class="top_section">

	<div class="container">
		<div class="title">
			<h1><?php echo $post->post_title; ?></h1>
		</div>
        <div class="row">
<?php 

$estado = get_queried_object()->name; 
$estado_slug = get_queried_object()->slug; 
$IDs= get_queried_object()->term_id; 
$thumbnail_id = get_woocommerce_term_meta( $IDs, 'thumbnail_id', true );


  $menuss = array(
         'taxonomy'     => 'product_cat',
         'orderby'      => array(),
         'show_count'   => 0,
         'pad_counts'   => 0,
         'hierarchical' => 1,
         'title_li'     => '',
         'hide_empty'   => 0
  );
 $all_categories_m = get_categories( $menuss );
 foreach ($all_categories_m as $cat_menu) {
 	$thumbnail_id = get_woocommerce_term_meta( $cat_menu->term_id, 'thumbnail_id', true );
$imagen_estado = wp_get_attachment_url($thumbnail_id); 
 ?>


                        <div class="col-md-4">
                            <a href="<?php echo get_term_link($cat_menu->slug, 'product_cat'); ?>">
                            	<div class="Shop Shop2">
                                <div class="prodts-category" style="background-image : url(<?php echo $imagen_estado; ?>)"></div>
                                <div class="shop-text">
                                <div class="grid-color"></div>
                                    <div class="title_shop"><?php echo $cat_menu->name; ?></div>
                                </div>
                                
                            </div></a>
                        </div>
                        
<?php } ?>








                       
                        

                        

                        
                    </div>
	
		

		

	</div>

</section>



<?php include 'footer.php'; ?>