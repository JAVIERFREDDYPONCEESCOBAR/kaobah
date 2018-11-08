<!DOCTYPE html>
<html lang="es"><!-- Language se to Spanish -->
	<head>

		<!-- Metadata -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- Title -->
		<title></title>
		<meta name="robots" content="index, follow">
		<meta content="" name="description">
  	<meta content="" name="keywords">

		<link rel="canonical" href="">
		<link rel="amphtml" href="">
		<link type="application/atom+xml" rel="alternate" href="">

		<!-- Generate Icons in http://realfavicongenerator.net/ -->
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/development/recursos/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/development/recursos/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/development/recursos/favicons/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/development/recursos/favicons/manifest.json">
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/development/recursos/favicons/safari-pinned-tab.svg" color="#ffffff">
		<meta name="theme-color" content="#ffffff">

		<!-- Generate Site Map in https://www.xml-sitemaps.com/ -->

		<!-- Social Meta Cards -->
		<meta property="og:title" content="" />
		<meta property="og:image" content="" />
		<meta property="og:site_name" content="" />
		<meta property="og:description" content="" />

		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:site" content="@" />
		<meta name="twitter:title" content="" />
		<meta name="twitter:description" content="" />
		<meta name="twitter:image" content="" />

		<!-- Stylesheet -->
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

		

<link rel="stylesheet" type="text/css" href="/wp/wp-content/themes/kaobah/development/recursos/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="/wp/wp-content/themes/kaobah/development/recursos/css/animate.css"/>
<link rel="stylesheet" type="text/css" href="/wp/wp-content/themes/kaobah/development/recursos/css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="/wp/wp-content/themes/kaobah/development/recursos/css/main.css"/>

		<!-- Stylesheets for older browsers -->
		<!-- IE6/7 micro clearfix -->
		<!--[if lte IE 7]>
			<style>
				.grouping {
					*zoom: 1;
				}
			</style>
		<![endif]-->
		<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!-- Javascript -->

		<script type="application/ld+json">
			{
				"@context":"http://schema.org",
				"@type":"Organization",
				"name":"",
				"logo":"",
				"url":"",
				"sameAs":[""]
			}
		</script>

	</head>
	<body>

		<a class="hidden" href="#main">skip to content</a><!-- Skip to content -->
		<header>

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="nav_menu">
							<ul>
								<li class="logo">
									<figure>
										<a href="<?php echo home_url(); ?>" target="_self">
											<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/development/recursos/images/kaobah-logo.png" alt="Kaobah Logo" title="Kaobah Logo"/>
										</a>
										<figcaption class="hidden">Kaobah Asociación sin fines de lucro | Ayudamos a las personas que más necesitan apoyo</figcaption>
									</figure>
								</li>
								<li class="logo_responsi">
									<figure>
										<a href="<?php echo home_url(); ?>" target="_self">
											<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/development/recursos/images/logo_mini.png" alt="Kaobah Logo" title="Kaobah Logo"/>
										</a>
										
									</figure>
									
								</li>

				
<?php 				

$menu1 = wp_get_nav_menu_items('Menu principal');
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


       $i = 0;
       $level = 0;

     foreach ($menu1 as $menu) {
	 $id = $menu->object_id;
	 $i++;

	PHP_EOL;

	$post_slug = get_post($menu->object_id);

	$url = $menu->url;

	$active = ($url == $actual_link) ? 'act' : '';
if($menu->menu_item_parent == 51){
	$mi_sub='<li>
<a class="" href="'.$url.'" target="_self">
<span>'.$menu->title.'</span>
</a>
</li>';

	$mi_id= $menu->menu_item_parent;
	

}else{
	$mi_sub =' ';
	$mi_id  =' ';
	$si_sub =' ';

} 
	  if ($menu->menu_item_parent == 0) {  ?>  


<li class="menu <?php if ($menu->ID==51) {echo' submenu';}else{}?>">
	<a href="<?php echo $url; ?>" target="_self">
	<span><?php echo $menu->title; ?></span></a>
	<?php if ($menu->ID==51) {echo '<ul>

<li>
<a class="" href="'.get_permalink(63).'" target="_self">
<span>Decoración</span>
</a>
</li>
<li>
<a class="" href="'.get_permalink(57).'" target="_self">
<span>Productos</span>
</a>
</li>
<li>
<a class="" href="'.get_permalink(59).'" target="_self">
<span>Donación</span>
</a>
</li>
</ul>'; }else{ } ?>
</li>
<?php 		
}
}
?>
<!-- 	<li class="menu">
									<a class="" href="?p=kaobah-quienes-somos" >
										<span>¿QUIÉNES SOMOS?</span>
									</a>
								</li>





								<li class="menu submenu">
									<a class="" href="#" target="_self">
										<span>ME INTERESA</span>
									</a>
									<ul>
										<li>
											<a class="" href="?p=kaobah-productos-decoracion" target="_self">
												<span>Decoración</span>
											</a>
										</li>
									
										<li>
											<a class="" href="?p=productos" target="_self">
												<span>Productos</span>
											</a>
										</li>
										<li>
											<a class="" href="?p=apoyando-kaobah-donacion" target="_self">
												<span>Donación</span>
											</a>
										</li>
									</ul>
								</li>



								<li class="menu">
									<a class="" href="?p=logros-kaobah" target="_self">
										<span>LOGROS</span>
									</a>
								</li>
								<li class="menu">
									<a class="" href="?p=contacto-kaobah" target="_self">
										<span>CONTACTO</span>
									</a>
								</li>

 -->
							
								<li>
									<button class="btn">Donación</button>
								</li>
								<li>
									<i class="fa fa-facebook" aria-hidden="true"></i>

								</li>
								<li>
									<i class="fa fa-pinterest-p" aria-hidden="true"></i>

								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>

		</header><!-- Header -->