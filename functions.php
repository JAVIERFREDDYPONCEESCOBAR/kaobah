<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');

function eliminar_menus_admin_bar() {
 
    global $wp_admin_bar;

    $wp_admin_bar->remove_menu('wp-logo');          // Elimina el logo de WordPress
    $wp_admin_bar->remove_menu('about');            // Elimina el enlace 'Acerca de WordPress'
    $wp_admin_bar->remove_menu('wporg');            // Elimina el enlace WordPress.org
    //$wp_admin_bar->remove_menu('documentation');    // Elimina el enlace 'Documentación'
    $wp_admin_bar->remove_menu('support-forums');   // Elimina el enlace 'Foros de soporte'
    //$wp_admin_bar->remove_menu('feedback');         // Elimina el enlace 'Sugerencias'
    //$wp_admin_bar->remove_menu('site-name');        // Elimina el menú con el nombre del sitio
    //$wp_admin_bar->remove_menu('view-site');        // Elimina el enlace 'Visitar sitio'
    $wp_admin_bar->remove_menu('view-store');        // Elimina el enlace 'Visitar tienda'
    //$wp_admin_bar->remove_menu('updates');          // Elimina el enlace a Actualizaciones
    $wp_admin_bar->remove_menu('comments');         // Elimina el enlace a Comentarios
    //$wp_admin_bar->remove_menu('new-content');      // Elimina el enlace Nuevo contenido
 
}
add_action( 'wp_before_admin_bar_render', 'eliminar_menus_admin_bar' );

function style_administrador() { ?>
<link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/development/recursos/css/font-awesome.css"/>
<?php 
}
add_action( 'admin_head', 'style_administrador' );
function mostrar(){ ?>
<div class="wrap">


 <form class="" method="POST" action="options.php">

  <?php settings_fields('conasa-max-length-content-settings-group');
        do_settings_sections( 'conasa-max-length-content-settings-group' ); 
  ?>



<div id="red-social">
  <div class="con-div">
    <ul class="fa-ul">

<li>
 <span class="fa-stack fa-1x">
 <i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
</span>
<input type="url" name="Facebook" id="Facebook" value="<?php echo get_option('Facebook'); ?>" placeholder=" Coloca Url Facebook " />
</li>


<li>
<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
</span>
<input type="url" name="Instagram" id="Instagram" value="<?php echo get_option('Instagram'); ?>" placeholder=" Coloca Url Instagram " />
</li>

<li>
<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
</span>
<input  type="url" name="Twitter" id="Twitter" value="<?php echo get_option('Twitter'); ?>" placeholder=" Coloca Url Twitter " />
</li>





<li>
<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
</span>
<input  type="url" name="LinkedIn" id="LinkedIn" value="<?php echo get_option('LinkedIn'); ?>" placeholder=" Coloca Url LinkedIn " />
</li>


<li>
<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-vimeo-square fa-stack-1x fa-inverse"></i>
</span>
<input  type="url" name="Vimeo" id="Vimeo" value="<?php echo get_option('Vimeo'); ?>" placeholder=" Coloca Url Vimeo " />
</li>


<li>
<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
</span>
<input  type="url"  name="Youtube" id="Youtube" value="<?php echo get_option('Youtube'); ?>" placeholder="Coloca Url Youtube " />
</li>


<li>
<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-pinterest-p fa-stack-1x fa-inverse"></i>
</span>
 <input type="url" name="Pinterest" id="Pinterest" value="<?php echo get_option('Pinterest'); ?>" placeholder="Coloca Url Pinterest " />
 </li>




<li>
<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
</span>
                    <input  

                             type="url" 

                             name="googleplus" 

                             id="googleplus" 

                             value="<?php echo get_option('googleplus'); ?>" placeholder="Coloca url de Google Plus" />


</li>





<li>
<span class="fa-stack fa-1x">

<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-envelope-o  fa-stack-1x fa-inverse"></i>
</span>
                    <input  

                             type="email" 

                             name="correo1" 

                             id="correo1" 

                             value="<?php echo get_option('correo1'); ?>" placeholder="Coloca E-mail" />
                            
</li>



<li>
<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-phone  fa-stack-1x fa-inverse"></i>
</span>
                    <input  

                             type="tel" 

                             name="telefono" 

                             id="telefono" 

                             value="<?php echo get_option('telefono'); ?>" placeholder="Coloca Telefono" />
                           
</li>

<li>
<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-map-marker  fa-stack-1x fa-inverse"></i>
</span>
    <textarea name="ubicacion" id="ubicacion" 

     placeholder="Coloca la Ubicación" /><?php echo get_option('ubicacion'); ?></textarea>
                           
</li>

                             


<li>
<span class="fa-stack fa-1x">


<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-bar-chart fa-stack-1x fa-inverse"></i>
</span>
<input type="text" name="Analytics"  id="Analytics" value="<?php echo get_option('Analytics'); ?>" placeholder=" Coloca tus digitos de Analytics " />
</li>
  
<li>
 
<?php 
 
$fecha= date("d/m/Y"); 
 
$url_Newsletter=''.get_template_directory_uri().'/js/contacto.txt';
 
?>
 
<span class="fa-stack fa-1x">
 
<i class="  fa fa-circle fa-stack-2x"></i>
 
  <i class="fa fa-arrow-circle-down fa-stack-1x fa-inverse"></i>
 
</span>
 
<a class="btn button" href="<?php echo $url_Newsletter;?>" download="Contactos Newsletter <?php echo $fecha;?>" >Descargar newsletter</a>
 
</li>



</ul>

  <div style="clear:both"></div>
</div>
</div>
<?php submit_button(); ?>

</form>


</div>
<?php }


function redes_sociales() {

    add_menu_page( 'Redes_sociales', 'Redes sociales', 'manage_options', '/Redes_sociales/', 'mostrar', 'dashicons-share', 19);

}
add_action( 'admin_menu', 'redes_sociales' );

function conasa_max_length_content_settings(){

      register_setting('conasa-max-length-content-settings-group',

                     'Facebook'

                     );


      register_setting('conasa-max-length-content-settings-group',

                     'Instagram'

                     );

      register_setting('conasa-max-length-content-settings-group',

                     'LinkedIn'

                     );

      register_setting('conasa-max-length-content-settings-group',

                     'Youtube'

                     );

      register_setting('conasa-max-length-content-settings-group',

                     'Vimeo'

                     );

      register_setting('conasa-max-length-content-settings-group',

                     'Twitter'

                     );

      register_setting('conasa-max-length-content-settings-group',

                     'Analytics'

                     );

      register_setting('conasa-max-length-content-settings-group',

                     'Pinterest'

                     );

      register_setting('conasa-max-length-content-settings-group',

                     'correo1'

                     );

      register_setting('conasa-max-length-content-settings-group',

                     'telefono'

                     );
      register_setting('conasa-max-length-content-settings-group',
                     
                    'ubicacion'
                     
                    );
      register_setting('conasa-max-length-content-settings-group',

                     'googleplus'

                     );
    
}

add_action('admin_init','conasa_max_length_content_settings');



function Editor_compania($post){ 

wp_nonce_field( basename( __FILE__ ), 'INFORMACION_EDITORES' ); 

     $value        = "";
     $valueVideo   = get_post_meta($post->ID, 'campovideo', true);
     $titulo_m     = get_post_meta($post->ID, 'titulo_m', true);
     $contenido_m  = get_post_meta($post->ID, 'contenido_m', true);

?>
<div class="wrap">
<fieldset class="form_fechas" >

<legend ><h2>Video</h2></legend ><br>


    <label class="caja1"  >Código video <i>(vimeo)</i></label>
    <input class="caja1" type="text" name="campovideo" id="campovideo" value="<?php echo htmlspecialchars($valueVideo)?>" /><br>

    <div class="video_01">
      <div class="video_01_int">
<?php if (empty($valueVideo)) { }else{ ?>
    <iframe src="https://player.vimeo.com/video/<?php echo htmlspecialchars($valueVideo)?>" ></iframe>
<?php } ?>
</div>
</div>

<textarea class="caja1" rows="8" cols="50" placeholder="Contenido"  name="contenido_m" id="contenido_m"><?php echo htmlspecialchars($contenido_m)?></textarea>

</fieldset>
</div>

<div class="wrap">
<fieldset class="form_fechas" >
<legend ><h2>NUESTRA MOTIVACIÓN</h2></legend ><br>
<label class="caja1"  >Titulo</label>
<input class="caja1" type="text" placeholder="Nombre" name="titulo_m" id="titulo_m" value="<?php echo htmlspecialchars($titulo_m)?>" /><br>
<div class="clean"></div>
<label class="caja1"  >Descripción</label>

</fieldset>
</div>
<?php 
}


function Guardar_contenido_editor( $post_id ) {
if( isset( $_POST[ 'campovideo' ] ) ) {update_post_meta( $post_id, 'campovideo', $_POST[ 'campovideo' ] );}
if( isset( $_POST[ 'titulo_m' ] ) ) {update_post_meta( $post_id, 'titulo_m', $_POST[ 'titulo_m' ] );}
if( isset( $_POST[ 'contenido_m' ] ) ) {update_post_meta( $post_id, 'contenido_m', $_POST[ 'contenido_m' ] );}
if( isset( $_POST[ 'como_funciona' ] ) ) {update_post_meta( $post_id, 'como_funciona', $_POST[ 'como_funciona' ] );}
if( isset( $_POST[ 'preguntas_frecu' ] ) ) {update_post_meta( $post_id, 'preguntas_frecu', $_POST[ 'preguntas_frecu' ] );}

if( isset( $_POST[ 'n_organizacion' ] ) ) {update_post_meta( $post_id, 'n_organizacion', $_POST[ 'n_organizacion' ] );}
if( isset( $_POST[ 'n_sucursal' ] ) ) {update_post_meta( $post_id, 'n_sucursal', $_POST[ 'n_sucursal' ] );}
if( isset($_POST[ 'n_cuenta' ])) {update_post_meta( $post_id, 'n_cuenta', $_POST[ 'n_cuenta' ] );}

if( isset($_POST[ 'valuequiensomos' ])) {update_post_meta( $post_id, 'valuequiensomos', $_POST[ 'valuequiensomos' ] );}

if( isset($_POST[ 'tituloq' ])) {update_post_meta( $post_id, 'tituloq', $_POST[ 'tituloq' ] );}

if( isset($_POST[ 'agradecimiento' ])) {update_post_meta( $post_id, 'agradecimiento', $_POST[ 'agradecimiento' ] );}

if( isset($_POST[ 'fundacion' ])) {update_post_meta( $post_id, 'fundacion', $_POST[ 'fundacion' ] );}

if( isset($_POST[ 'tituloagra' ])) {update_post_meta( $post_id, 'tituloagra', $_POST[ 'tituloagra' ] );}
if( isset($_POST[ 'dialogo_video' ])) {update_post_meta( $post_id, 'dialogo_video', $_POST[ 'dialogo_video' ] );}

}
add_action( 'save_post', 'Guardar_contenido_editor' );



function formulario_decoracion($post){
	wp_nonce_field( basename( __FILE__ ), 'INFORMACION_DECORACION' );
//$Editor_1 = get_post_meta( $post->ID, '_wp_editor_test_1', false );
$como_funciona = get_post_meta($post->ID,'como_funciona',true);
$preguntas_frecu = get_post_meta($post->ID,'preguntas_frecu',true );
 ?>

<div class="wrap">
<fieldset class="form_fechas" >
<legend ><h2>INFORMACIÓN</h2></legend ><br>

    <label class="caja1"  >¿Cómo funciona?</label>
    <textarea name="como_funciona" id="como_funciona" class="caja1" rows="8" cols="50"  > 
    <?php echo htmlspecialchars($como_funciona)?></textarea> <br>

    <div class="clean"></div>
     <label class="caja1"  >Preguntas Frecuentes</label>
    <textarea name="preguntas_frecu" id="preguntas_frecu" class="caja1" rows="8" cols="50"  > 
    <?php echo htmlspecialchars($preguntas_frecu)?></textarea> <br>
    
<div class="clean"></div>
<!--<label class="caja1"  >Galeria</label>-->
<?php
//wp_editor( $Editor_1[0], '_wp_editor_test_1');
?>
   </fieldset>
</div>
   
<?php 
}

function formulario_donacion($post){ 
$n_organizacion = get_post_meta($post->ID,'n_organizacion',true);
$n_sucursal = get_post_meta($post->ID,'n_sucursal',true);
$n_cuenta = get_post_meta($post->ID,'n_cuenta',true);
	?>
<div class="wrap">
<fieldset class="form_fechas" >
<legend ><h2>INFORMACIÓN</h2></legend ><br>

<label class="caja1"  >Organización:</label>
<input class="caja1" type="text" placeholder="Organización" name="n_organizacion" id="n_organizacion" value="<?php echo htmlspecialchars($n_organizacion)?>" /><br>

<label class="caja1"  >Sucursal:</label>
<input class="caja1" type="text" placeholder="Sucursal" name="n_sucursal" id="n_sucursal" value="<?php echo htmlspecialchars($n_sucursal)?>" /><br>

<label class="caja1"  >Número de cuenta: </label>
<input class="caja1" type="text" placeholder="Número de cuenta: " name="n_cuenta" id="n_cuenta" value="<?php echo htmlspecialchars($n_cuenta)?>" /><br>
  </fieldset>
</div>
   
<?php 
}

function Editor_quienes_somos($post){ 
$valuequiensomos = get_post_meta($post->ID,'valuequiensomos',true);
$tituloq = get_post_meta($post->ID,'tituloq',true);
$dialogo_video =  get_post_meta($post->ID, 'dialogo_video', true); 
?>
<div class="wrap">
<fieldset class="form_fechas" >
<legend ><h2>Titulo</h2></legend ><br>
  <label class="caja1">Titulo </label>
  <input class="caja1" type="text" name="tituloq" id="tituloq" value="<?php echo htmlspecialchars($tituloq)?>" />
</fieldset>
<fieldset class="form_fechas" >
<legend ><h2>Video</h2></legend ><br>


    <label class="caja1"  >Código video <i>(vimeo)</i></label>
    <input class="caja1" type="text" name="valuequiensomos" id="valuequiensomos" value="<?php echo htmlspecialchars($valuequiensomos)?>" /><br>

    <div class="video_01">
      <div class="video_01_int">
<?php if (empty($valuequiensomos)) { }else{ ?>
    <iframe src="https://player.vimeo.com/video/<?php echo htmlspecialchars($valuequiensomos)?>" ></iframe>
<?php } ?>
</div>
</div>
 <br>
     <textarea class="caja1" rows="10" cols="50" placeholder="Dialogos del video"  name="dialogo_video" id="dialogo_video"><?php echo htmlspecialchars($dialogo_video)?></textarea>

</fieldset>
   </div>
<?php 

}

function formulario_curso($post){

$agradecimiento = get_post_meta($post->ID,'agradecimiento',true);
$fundacion = get_post_meta($post->ID,'fundacion',true);
$tituloagra = get_post_meta($post->ID,'tituloagra',true);


?>
<div class="wrap">
<fieldset class="form_fechas" >
<legend ><h2>Informacion importante</h2></legend ><br>
  <label class="caja1">Agradecimiento </label>
  <input class="caja1" type="text" name="agradecimiento" id="agradecimiento" value="<?php echo htmlspecialchars($agradecimiento)?>" />

    <label class="caja1">Fundación</label>
  <input class="caja1" type="text" name="fundacion" id="fundacion" value="<?php echo htmlspecialchars($fundacion)?>" />

      <label class="caja1">Titulo Agradecimiento</label>
  <input class="caja1" type="text" name="tituloagra" id="tituloagra" value="<?php echo htmlspecialchars($tituloagra)?>" />

</fieldset>
   </div>
<?php 

}

function Page_donacion() {

$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
 if ($post_id == '59'){add_meta_box( 'MI_META_BOX', __( 'INFORMACIÓN RELEVANTE', 'INFORMACION_DECORACION' ), 'formulario_donacion', 'page' );}
}
add_action( 'add_meta_boxes', 'Page_donacion' );



function Page_decoracion() {
$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
 if ($post_id == '63'){add_meta_box( 'MI_META_BOX', __( 'INFORMACIÓN RELEVANTE', 'INFORMACION_DECORACION' ), 'formulario_decoracion', 'page' );}
}
add_action( 'add_meta_boxes', 'Page_decoracion' );



function Page_Home() {
$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
 if ($post_id == '54'){add_meta_box( 'MI_META_BOX', __( 'VIDEO HOME', 'INFORMACION_EDITORES' ), 'Editor_compania', 'page' );}
}
add_action( 'add_meta_boxes', 'Page_Home' );



function Page_quienes_somos() {
$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
 if ($post_id == '2'){add_meta_box( 'MI_META_BOX', __( 'VIDEO', 'INFORMACION QUIENES SOMOS ' ), 'Editor_quienes_somos', 'page' );}
}
add_action( 'add_meta_boxes', 'Page_quienes_somos' );



function formulario_logros(){
     add_meta_box( 'meta-box-id', __( 'Formulario', 'cursos_post' ), 'formulario_curso', 'logross' );
}

add_action( 'add_meta_boxes', 'formulario_logros' );



 function custom_admin() { ?>

<style type="text/css">
.wrap {
    margin: 0px 20px 50px 2px;
}
.clean {
    font-size:11px;
    font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
    margin-bottom: 25px;

}
fieldset.form_fechas {
    width: auto;
    padding: 0 5px;
    margin: 0 auto;
    border: 1px solid #b3b91c;
    padding-bottom: 23px;
    margin-bottom: 30px;
}
.video_01{
  width: 100%;
  position: relative;
}

.video_01_int{
  width: 100%;
  height: 0;
  padding-bottom: 30.6%;
  position: relative;
}
.caja1{
    display: block;
    width: 100%;
    height: auto;
  display: inline-block;
  vertical-align: middle;
}
.video_01_int iframe{
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;

}
#wpfooter {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 10px 20px;
    color: white;
    background: #b3b91c;
    min-width: 600px;
    z-index: 99999;
}
#footer_new {
    text-decoration: none;
    color: white;
}
#creador {
    color: white;
    text-transform: capitalize;
}
#wpfooter p {
    font-size: 10px;
    color: black;
    font-family: "RobotoLight";
    margin: 0px 0px 0px 0px;
    letter-spacing: 2px;
    text-align: center;
    text-transform: uppercase;
}

ul.list-group li.list-group-item img{
    width: 30%;
    height: 20%;
    padding: 0px;
    margin: 0px;
    display: initial;

}
ul.list-group{
  list-style: none;
}
ul.list-group li.list-group-item{
  border: 1px solid #dfdfdf;
    position: relative;
    padding: 10px;
    background: #fafafa;
    cursor: move;
}
.insine{
      margin: 6px 0 0;
}

.newcolor{
  
    border: 1px solid green;
    color: black;
    border-radius: 20px;
}
.newcolor:hover{
color: white;
background: green;
}

<?php 
}
add_action( 'admin_head', 'custom_admin' );

//--------------------------------------------------------------footer-----------------------------------------
function modify_footer_admin () {
  echo 'Creado por:  Ing.Javier Freddy Ponce Escobar
  </a>. ';
}
add_filter('admin_footer_text', 'modify_footer_admin');

//------LOgo adcom-----

function mi_logo_personalizado() { ?>
    <style type="text/css">
    
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/development/recursos/images/kaobah-logo.png);
               
                padding-bottom: 30%;
                width: auto;
                height: auto;
                top: auto;
            /*background-size: initial;*/
             BACKGROUND-SIZE: CONTAIN;
        }

 body.login {
  /*background:#26315E; */
  background: #b3b91c;
}
.login label {
    color: black;
    font-size: 14px;
}
.login form {
    margin-top: 20px;
    margin-left: 0;
    padding: 26px 24px 46px;
    background: #fff;
    box-shadow: 0 1px 3px rgba(0,0,0,.13);
    border-radius: 20px;
}
.login #nav a {
    text-decoration: none;
    color: white;
}
.login #backtoblog a, .login #nav a {
    text-decoration: none;
    color:white;
}
    </style>
<?php
 }
add_action( 'login_enqueue_scripts', 'mi_logo_personalizado' );

function mi_logo_personalizado_url() {
    return $fre='https://kleinundgross.net' ; echo ''.$fre.'';
}
add_filter( 'login_headerurl', 'mi_logo_personalizado_url' );

function mi_logo_personalizado_url_titulo() {
echo ''.$fre.'';
    return 'ING.Javier Freddy Ponce Escobar';
}
add_filter( 'login_headertitle', 'mi_logo_personalizado_url_titulo' );

function logros_ini() {

    $labels = array(
        'name'               => _x( 'Logros', 'post type general name',  'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Logros', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Logros', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Logros', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Añadir nuevo logro', 'logro', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Añadir nuevo logro', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Nuevo logro', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editar logro', 'your-plugin-textdomain' ),
        'view_item'          => __( 'Ver logro', 'your-plugin-textdomain' ),
        'all_items'          => __( 'Todos los logros', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search logro', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent logro:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No logro found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No logro found in Trash.', 'your-plugin-textdomain' )
    );



    $args = array(

        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'menu_icon'           => 'dashicons-welcome-learn-more',
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'logross',
                                       'with_front' => false, 
                                       'hierarchical' => true
                                       ),

        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )

    );



    register_post_type( 'logross', $args );

}

add_action( 'init', 'logros_ini' );

function get_custom_post_type_template($single_template) {
     global $post;
   if( $post == 'product' ) {
          $single_template = dirname( __FILE__ ) . '/single-product.php';
     }
         return $single_template;

}
add_filter( 'single_template', 'get_custom_post_type_template' );


?>