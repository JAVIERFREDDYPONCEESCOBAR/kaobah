<?php include 'header.php'; ?>
<section class="top_section">

				<div class="container">

					<div class="row">
						<div class="col-md-9 col-center">

<?php  
$idpag_qs =get_page_by_path('quienes-somos')->ID; 
 ?>
							<h1><?php echo   apply_filters('the_content', get_post_meta($idpag_qs,'tituloq')[0]);  ?><span class="hidden">Kaobah | Es motivada con el deseo de apoyar a las personas necesitadas del estado de Tabasco.</span></h1>

							<div class="embed-responsive embed-responsive-16by9">
								<video width="100%" height="100%" poster="<?php echo get_template_directory_uri(); ?>/development/recursos/videos/kaobah-nosotros-quienes-somos.png" controls>
 									<source src="<?php echo get_template_directory_uri(); ?>/development/recursos/videos/kaobah-nosotros-quienes-somos.mp4" type="video/mp4">
 									<source src="<?php echo get_template_directory_uri(); ?>/development/recursos/videos/kaobah-nosotros-quienes-somos.ogg" type="video/ogg">
									<source src="<?php echo get_template_directory_uri(); ?>/development/recursos/videos/kaobah-nosotros-quienes-somos.webm" type="video/webm">
 									Your browser does not support the video tag.
								</video>
							</div>

							<h2>Dialogos del video</h2>
				<?php echo   apply_filters('the_content', get_post_meta($idpag_qs,'dialogo_video')[0]);  ?>
						</div>
						<div class="center">
						<div class="col-sm-6 col-md-4 metodo-bx">
							<figure class="metodo">
								<a href="?p=kaobah-productos-decoracion" target="_self">
									<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/development/recursos/images/kaobah-decoracion.png" alt="" title=""/>
								</a>
								<figcaption class="hidden">Apoya con decoraciones</figcaption>
							</figure>

							<h3>DECORACIÓN</h3>
							<span >Ayúdanos rentando nuestros productos de decoración.</span>
						</div>

						<div class="col-sm-6 col-md-4 metodo-bx">
							<figure class="metodo">
								<a href="?p=kaobah-productos" target="_self">
									<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/development/recursos/images/kaobah-productos.png" alt="" title=""/>
								</a>
								<figcaption class="hidden">Apoya con productos</figcaption>
							</figure>
							<h3>PRODUCTOS</h3>
							<span >Ayúdanos adquiriendo productos.</span>
						</div>

						

						<div class="col-sm-6 col-md-4 metodo-bx">
							<figure class="metodo">
								<a href="?p=apoyando-kaobah-donacion" target="_self">
									<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/development/recursos/images/kaobah-donacion.png" alt="" title=""/>
								</a>
								<figcaption class="hidden">Apoya con tu donación</figcaption>
							</figure>
							<h3>DONACIÓN</h3>
							<span >Ayúdanos brindando una pequeña o gran aportación a nuestra causa.</span>
						</div>
					</div>

						
					</div>

				</div>

			</section>
<?php include 'footer.php'; ?>