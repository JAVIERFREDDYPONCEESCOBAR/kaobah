
		<footer>
		<section id="contact">
				<div class="fondo" style="background-image: url(<?php echo get_template_directory_uri(); ?>/development/recursos/images/fondo2.jpg);"></div>
				<div class="container">
					<div class="row">
					<div class="col-sm-4">
						<h3>Contacto:</h3>
						<p>example@example.com</p>
					</div>
					<div class="col-sm-4">
						<h3>Dirección:</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
					</div>
					<div class="col-sm-4">
						<div class="footer-widget float-right">
                                <div class="footer-widget-box">
                                    <h3>Newsletter</h3>
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="E-mail" aria-label="Search for">
                                            <span class="input-group-btn">
									<button class="btn btn-secondary" type="submit">enviar</button>
								  </span>
                                        </div>
                                    </form>
                                    <p>Dolor eros cubilia velit fusce</p>
                                </div>
                            </div>
					</div>
				</div>
				</div>

			</section>



			<div class="container footer_int">

				<div class="row">
					<div class="col-md-6">
						<small>Kaobah. Todos los derechos reservados.</small>
					</div>
					<div class="col-md-6">

<?php if( get_option('Facebook')=='' ){ }else{ ?>
      <li class="red-f wow zoomIn">
       <a href="<?php echo get_option('Facebook'); ?>" target="_blank" >
        <i class="fa  fa-facebook " aria-hidden="true"></i>
      </a>
      </li>
<?php } ?>

<?php if( get_option('Instagram')=='' ){ }else{ ?>
      <li class="red-f wow zoomIn">
     <a href="<?php echo get_option('Instagram'); ?>" target="_blank" >
       <i class="fa fa-instagram" aria-hidden="true"></i>
     </a>
      </li>
<?php } ?>

<?php if( get_option('LinkedIn')=='' ){ }else{ ?>
      <li class="red-f wow zoomIn">
      <a href="<?php echo get_option('LinkedIn'); ?>" target="_blank" >
       <i class="fa fa-linkedin" aria-hidden="true"></i>
     </a>
      </li>
<?php } ?>

<?php if( get_option('Youtube')=='' ){ }else{ ?>
      <li class="red-f wow zoomIn">
      <a href="<?php echo get_option('Youtube'); ?>" target="_blank" >
       <i class="fa fa-youtube-play" aria-hidden="true"></i>
     </a>
      </li>
<?php } ?>

<?php if( get_option('Twitter')=='' ){ }else{ ?>
      <li class="red-f wow zoomIn">
     <a href="<?php echo get_option('Twitter'); ?>" target="_blank" >
       <i class="fa fa-twitter" aria-hidden="true"></i>
     </a>
      </li>
<?php } ?>

<?php if( get_option('Pinterest')=='' ){ }else{ ?>
      <li class="red-f wow zoomIn">
        <a href="<?php echo get_option('Pinterest'); ?>" target="_blank" >
       <i class="fa fa-pinterest-p" aria-hidden="true"></i>
        </a>
      </li>
<?php } ?>


<?php if( get_option('googleplus')=='' ){ }else{ ?>
      <li class="red-f wow zoomIn">
        <a href="<?php echo get_option('googleplus'); ?>" target="_blank" >
      <i class="fa fa-google-plus-official" aria-hidden="true"></i>
        </a>
      </li>
<?php } ?>

<?php if( get_option('Vimeo')=='' ){ }else{ ?>
      <li class="red-f wow zoomIn">
        <a href="<?php echo get_option('Vimeo'); ?>" target="_blank" >
      <i class="fa fa-vimeo" aria-hidden="true"></i>
        </a>
      </li>
<?php } ?>



      </ul>




					</div>
				</div>

			</div>

		</footer><!-- Footer -->
				<!-- TODO: Enhancement Javascript -->
<script type="text/javascript" src="/wp/wp-content/themes/kaobah/development/recursos/js/jquery-1.11.2.js" ></script>
<script type="text/javascript" src="/wp/wp-content/themes/kaobah/development/recursos/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/wp/wp-content/themes/kaobah/development/recursos/js/wow.js"></script>
<script type="text/javascript" src="/wp/wp-content/themes/kaobah/development/recursos/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="/wp/wp-content/themes/kaobah/development/recursos/js/main.js"></script>
	</body>
</html>