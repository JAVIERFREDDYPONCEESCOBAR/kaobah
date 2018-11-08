<?php  include 'header.php'; ?>

<section class="top_section">

	<div class="container">
		<div class="title">
			<h1><?php echo get_queried_object()->name; ?></h1>
			<p>"Gracias fundación Kaobah por la donación de las sillas, nos ayudarán mucho"</p>
		</div>
		<div class="filter-list row clearfix" id="MixItUpE54014">
          
<?php
$primer_arreglo= array(
    'post_type' => 'product',
    'posts_per_page'=>-1,
    'orderby'=>'post_date',
    'order'=> 'DESC',
    'tax_query' => array(
    array(
      'taxonomy' => 'product_cat',
      'field' => 'slug',
      'terms' => get_queried_object()->name
    )
  )
);
 
foreach (get_posts($primer_arreglo) as $value) {
	$imagen_destacada = wp_get_attachment_image_src(get_post_thumbnail_id($value->ID ) ,'thumb')[0];
	$precio_rebajado = get_post_meta($value->ID,'_sale_price'); 
    $precio_normal = get_post_meta($value->ID,'_regular_price');

	if (empty($imagen_destacada )) {
		$mimg=''.get_template_directory_uri().'/development/recursos/images/imgen_no_disponible.png';
	}else{
		$mimg=$imagen_destacada ;
	}

 ?>
<div class="shop-item col-md-3 col-sm-6 col-xs-12 mix mix_all all" style="display: inline-block;">
    <div class="inner-box">
         <div class="image-box">
              <img src="<?php echo $mimg ;?>" alt="<?php echo $value->post_title ;?>">
                   <div class="option-box"></div>
       </div>
       <div class="overlay-box">
         <div class="lower-box">
            <h4><a href="<?php echo get_permalink($value->ID); ?>"><?php echo $value->post_title ;?></a></h4>

<?php  if ( (!empty($precio_normal[0])) && (empty($precio_rebajado[0]) ) ){ ?>
   
   <span class="price"><?php echo get_woocommerce_currency_symbol().''.number_format(get_post_meta($value->ID,'_regular_price')[0],2); ?></span>

<?php }elseif ( (!empty($precio_normal[0])) && (!empty($precio_rebajado[0]) ) ){ ?>
   
   <span class="price"><?php echo get_woocommerce_currency_symbol().''.number_format(get_post_meta($value->ID,'_regular_price')[0],2); ?></span>

<?php }elseif ( (empty($precio_normal[0]))&& (empty($precio_rebajado[0]) ) ){
                	echo'<span class="price">SIN DISPONIBILIDAD</span>';
                } elseif ( (empty($precio_normal[0]))&& (!empty($precio_rebajado[0]) ) ){ ?>

<span class="price"><?php echo get_woocommerce_currency_symbol().''.number_format(get_post_meta($value->ID,'_sale_price')[0],2); ?></span>
                <?php } ?>
         </div>
       </div>
    </div>
</div>

<?php } ?>
 
 </div>
	</div>

</section>



<?php include 'footer.php'; ?>