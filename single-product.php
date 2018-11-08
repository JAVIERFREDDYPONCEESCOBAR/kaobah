<?php include 'header.php'; ?>

<section class="top_section">
<?php
	$precio_rebajado = get_post_meta($post->ID,'_sale_price'); 
    $precio_normal   = get_post_meta($post->ID,'_regular_price');
   $imagen_destacada = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID ) ,'thumb')[0];

	if (empty($imagen_destacada )) {
		$mimg=''.get_template_directory_uri().'/development/recursos/images/imgen_no_disponible.png';
	}else{
		$mimg=$imagen_destacada ;
	}
 ?>
	<div class="container">
		<div class="title">
			<h1><?php echo $post->post_title;; ?></h1>
			<p>"Gracias fundación Kaobah por la donación de las sillas, nos ayudarán mucho"</p>
		</div>
		<div class="row clearfix center_shop">
            	<!--content column-->
            	<div class="content-column ">
        			<div class="product-details">
            	
                        <!--Basic Details-->
                        <div class="basic-details">
                            <div class="row clearfix">
                                <div class="image-column col-md-5 col-sm-12 col-xs-12">
    <figure class="image-box">
    <a href="development/recursos/images/galeria-kaobah-productos-ae.jpg" class="lightbox-image" title="Image Caption Here">
    <img src="<?php echo$mimg;?>" alt="<?php echo$post->post_title;;?>"></a>
</figure>
     </div>
                                <div class="info-column col-md-7 col-sm-12 col-xs-12">
   <div class="details-header">
      <h2><?php echo $post->post_title;; ?></h2>
         <?php  if ( (!empty($precio_normal[0])) && (empty($precio_rebajado[0]) ) ){ ?>
   <div class="item-price"><?php echo get_woocommerce_currency_symbol().''.number_format(get_post_meta($post->ID,'_regular_price')[0],2); ?></div>
   <button class="btn">Comprar</button>
<?php }elseif ( (!empty($precio_normal[0])) && (!empty($precio_rebajado[0]) ) ){ ?>
   <div class="item-price"><?php echo get_woocommerce_currency_symbol().''.number_format(get_post_meta($post->ID,'_regular_price')[0],2); ?></div>
   <button class="btn">Comprar</button>
<?php }elseif ( (empty($precio_normal[0]))&& (empty($precio_rebajado[0]) ) ){
                	echo'<div class="item-price">SIN DISPONIBILIDAD</div>';
                } elseif ( (empty($precio_normal[0]))&& (!empty($precio_rebajado[0]) ) ){ ?>
<div class="item-price"><?php echo get_woocommerce_currency_symbol().''.number_format(get_post_meta($post->ID,'_sale_price')[0],2); ?></div>
<button class="btn">Comprar</button>
 <?php } ?>
</div>
                                    <div class="text"><?php 

                                    echo   apply_filters('the_content',$post->post_content); 
                                     ?></div>
                                   
                                    <div class="details-header">
                                        <h4>Medidas</h4>
                                       <div class="text">Catahoula cher hot sauce make a roux Acadiana Mardi Gras fried chicken. </div>
                                         <h4>Disponibilidad</h4>
                                       <div class="text">Catahoula cher hot sauce make a roux Acadiana Mardi Gras fried chicken. </div>
                                       
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                      
                        <div class="related-posts">
                        	<h4 class="product-rela">Productos relacionados</h4>
                            <div class="row clearfix">
                            	
                     
   <?php 
$rt=get_terms('product_cat');
$p_relacionados= array(
    'post_type' => 'product',
    'posts_per_page'=>4,
    'orderby'   =>'post_date',
    'exclude'   => $post->ID,
    'order'     => 'DESC',
    'tax_query' => array(
    array(
      'taxonomy' => 'product_cat',
      'field'    => 'slug',
      'terms'    => $rt[0]->slug
    )
  )
);

 
foreach (get_posts($p_relacionados) as $n_relacionados) {
	$precio_rebajado_n = get_post_meta($n_relacionados->ID,'_sale_price'); 
    $precio_normal_n   = get_post_meta($n_relacionados->ID,'_regular_price');
   $imagen_destacada_n = wp_get_attachment_image_src(get_post_thumbnail_id($n_relacionados->ID ) ,'thumb')[0];

	if (empty($imagen_destacada_n )) {
		$mimg=''.get_template_directory_uri().'/development/recursos/images/imgen_no_disponible.png';
	}else{
		$mimg=$imagen_destacada_n ;
	}
   ?>

                     <div class="shop-item col-md-3 col-sm-6 col-xs-12 mix mix_all all" style="display: inline-block;">
                        <div class="inner-box">
                            <div class="image-box">
                         <img src="<?php echo$mimg;  ?>" alt="<?php echo$n_relacionados->post_title; ?>">
                            	<div class="option-box"></div>
                                
                            </div>
                            <div class="overlay-box">
									
                             <div class="lower-box">
                                  <h4><a href="<?php echo get_permalink($n_relacionados->ID); ?>"><?php echo$n_relacionados->post_title; ?></a></h4>

<?php  if ( (!empty($precio_normal_n[0])) && (empty($precio_rebajado_n[0]) ) ){ ?>
   
   <span class="price"><?php echo get_woocommerce_currency_symbol().''.number_format(get_post_meta($n_relacionados->ID,'_regular_price')[0],2); ?></span>

<?php }elseif ( (!empty($precio_normal_n[0])) && (!empty($precio_rebajado_n[0]) ) ){ ?>
   
   <span class="price"><?php echo get_woocommerce_currency_symbol().''.number_format(get_post_meta($n_relacionados->ID,'_regular_price')[0],2); ?></span>

<?php }elseif ( (empty($precio_normal_n[0]))&& (empty($precio_rebajado_n[0]) ) ){
                	echo'<span class="price">SIN DISPONIBILIDAD</span>';
                } elseif ( (empty($precio_normal_n[0]))&& (!empty($precio_rebajado_n[0]) ) ){ ?>

<span class="price"><?php echo get_woocommerce_currency_symbol().''.number_format(get_post_meta($n_relacionados->ID,'_sale_price')[0],2); ?></span>
                <?php } ?>

                                     
                                    </div>
                                </div>
                        </div>
                    </div>

   <?php } ?>
                                
                            </div>
                        </div>
                        <!--End Related Post-->
                        
                    </div>
            	</div>

                
            </div>
	</div>

</section>

<?php include 'footer.php'; ?>