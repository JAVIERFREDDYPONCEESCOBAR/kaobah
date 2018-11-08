<?php include 'header.php'; ?>

			<section class="top_section">

				<div class="container">

					<div class="row">
						<div class="col-md-12">

							<h1>CONTACTO<span class="hidden">Kaobah | Es motivada con el deseo de apoyar a las personas necesitadas del estado de Tabasco.</span></h1>

							<div class="col-md-8 col-md-offset-2">
								<form class="contact" method="post" action="contacto.php">
									<fieldset>
										<div class="form-group">
											<label for="nombre">Nombre</label>
											<input class="form-control" type="text" name="nombre" required/>
										</div>
									</fieldset>
									<fieldset>
										<div class="form-group">
											<label for="correo">Correo</label>
											<input class="form-control" type="email" name="correo" required/>
										</div>
									</fieldset>
									<fieldset>
										<div class="form-group">
											<label for="mensaje">Comentario(s)</label>
											<textarea name="mensaje" class="form-control" col="10" row="20" required></textarea>
										</div>
									</fieldset>
									<p class="lblError"></p>
									<input class="btn" type="submit" value="Enviar"/>
									<div class="clearfix"></div>
								</form>
							</div>

							<div class="clearfix"></div>

							<h1>¡Ayúdanos a crecer!</h1>
							<p class="text-center">Comparte nuestra historia</p>

							<ul class="share">
								<li>
									<a><span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
									</span></a>
								</li>
								<li>
									<a><span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
									</span></a>
								</li>
								<li>
									<a><span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
									</span></a>
								</li>
								<li>
									<a><span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
									</span></a>
								</li>
							</ul>

							<p class="text-center"><small><a href="#" target="_blank">Aviso de privacidad</a></small></p>

						</div>

					</div>

				</div>

			</section>

		
<?php include 'footer.php'; ?>