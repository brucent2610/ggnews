jQuery(document).ready(function($) {
    $('#upload_logo_button,#upload_favicon_button').click(function() {
        tb_show('Upload a logo', 'media-upload.php?referer=wptuts-settings&type=image&TB_iframe=true&post_id=0', false);
        return false;
    });
});

window.send_to_editor = function(html) {
    var image_url = $('img#logo',html).attr('src');
    var favicon_url = $('img#favicon',html).attr('src');
    $('#logo_url').val(image_url);
    $('#favicon_url').val(favicon_url);
    tb_remove();
    $('#upload_logo_preview img').attr('src',image_url);
    $('#upload_favicon_preview img').attr('src',favicon_url);

    $('#submit_options_form').trigger('click');
}