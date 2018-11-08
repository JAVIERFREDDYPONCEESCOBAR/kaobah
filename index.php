<?php include 'header.php';?>
		<main id="main">
	
			<section id="portada">
			
			
				<div class="video">
				<div class="video_int">
					<iframe src="https://player.vimeo.com/video/261066223?autoplay=1&color=ffffff&title=0&byline=0&portrait=0" width="740" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 

			

				</div>
			</div>
			</section>
			<section id="productos">
			<div class="pleca" style="background-image: url(/wp/wp-content/themes/kaobah/development/recursos/images/pleca.png);"></div>
				<div class="container">
					<div class="title">
						<h1>¡AYÚDANOS!</h1>
						<p>Se voluntario o colabora adquiriendo algunos de nuestros productos</p>
					</div>
					<div class="center">
						<div class="col-sm-6 col-md-4 metodo-bx">
							<figure class="metodo">
								<a href="?p=kaobah-productos-decoracion" target="_self">
									<img class="img-responsive" src="/wp/wp-content/themes/kaobah/development/recursos/images/kaobah-decoracion.png" alt="" title=""/>
								</a>
								<figcaption class="hidden">Apoya con decoraciones</figcaption>
							</figure>

							<h3>DECORACIÓN</h3>
							<span >Ayúdanos rentando nuestros productos de decoración.</span>
						</div>

						<div class="col-sm-6 col-md-4 metodo-bx">
							<figure class="metodo">
								<a href="?p=kaobah-productos" target="_self">
									<img class="img-responsive" src="/wp/wp-content/themes/kaobah/development/recursos/images/kaobah-productos.png" alt="" title=""/>
								</a>
								<figcaption class="hidden">Apoya con productos</figcaption>
							</figure>
							<h3>PRODUCTOS</h3>
							<span >Ayúdanos adquiriendo productos.</span>
						</div>

						

						<div class="col-sm-6 col-md-4 metodo-bx">
							<figure class="metodo">
								<a href="?p=apoyando-kaobah-donacion" target="_self">
									<img class="img-responsive" src="/wp/wp-content/themes/kaobah/development/recursos/images/kaobah-donacion.png" alt="" title=""/>
								</a>
								<figcaption class="hidden">Apoya con tu donación</figcaption>
							</figure>
							<h3>DONACIÓN</h3>
							<span >Ayúdanos brindando una pequeña o gran aportación a nuestra causa.</span>
						</div>
					</div>

					
				</div>
			</section>

			<section class="top">



					<div class="row">
						<div class="col-md-6 text-md">
							<div class="margin">

							<div class="title">
								<h1>NUESTRA MOTIVACIÓN</h1>
								<!-- <p>Kaobah | Es motivada con el deseo de apoyar a las personas necesitadas del estado de Tabasco.</p> -->

								<?php //echo get_permalink(get_page_by_path('titulo_m')->ID); 
								$idpag =get_page_by_path('inicio')->ID; 
                                
                                //1print_r(get_post_meta($idpag,'titulo_m')[0]);

								echo   apply_filters('the_content', get_post_meta($idpag,'titulo_m')[0]); 
								?>
							</div>

							  <?php echo apply_filters('the_content', get_post_meta($idpag,'contenido_m')[0]); ?>
							<p class="text-center">
   
                            

								<!-- <b>KAOBAH</b> es una asociación sin fines de lucro, que ayuda a personas necesitadas que <b>carecen</b> de otras <i>fuentes de apoyo</i>.</p>

							<p class="text-center">La ayuda de <b>Kaobah</b> proviene de aportaciones voluntarias y de los recursos obtenidos de la prestación de servicios de decoración de productos, que son el movimiento principal de la asociación.</p>


							<p class="text-center">Tú puedes ayudarnos a hacer la diferencia, escoje <b><a href="#metodos-de-ayuda" target="_self">1 de los 4 métodos</a></b> o bien entérate de nuestros <b><a href="/logros-y-noticias-kaobah.html" target="_self">logros y/o noticias</a></b>.-->
								</p> 
							</div>

							
						</div>
						<div class="col-md-6 text-md ">
							<div class="mainPhoto" style="background-image: url(/wp/wp-content/themes/kaobah/development/recursos/images/manos.jpg);">
								
								
							</div>

						</div>

					</div>




			</section>		
</main>
<?php include 'footer.php';?>