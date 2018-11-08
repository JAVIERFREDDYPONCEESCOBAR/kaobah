jQuery(document).ready(function($){
    var meta_audio_frame;
    $('#boton_img').click(function(e){
        e.preventDefault();
        if ( meta_audio_frame ) {
            meta_audio_frame.open();
            return;
        }
        meta_audio_frame = wp.media.frames.meta_audio_frame = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame.on('select', function(){
            var media_attachment = meta_audio_frame.state().get('selection').first().toJSON();
            $('#imagen_descarga').val(media_attachment.url);
        });
        meta_audio_frame.open();
    });
});

