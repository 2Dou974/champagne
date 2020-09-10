var upload_image_custom_uploaders = upload_image_custom_uploaders || {};

jQuery(function($) {
    $('.upload_image_button').unbind().click(function(e) {

        e.preventDefault();
        var field_id = $(this).data('field-id');

        //If the uploader object has already been created, reopen the dialog
        if (upload_image_custom_uploaders.hasOwnProperty(field_id)) {
            upload_image_custom_uploaders[field_id].open();
            return;
        }

        //Extend the wp.media object
        var upload_image_custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choisir une image',
            button: {
                text: 'Choisir cette image'
            },
            multiple: false
        });

        upload_image_custom_uploaders[field_id] = upload_image_custom_uploader;

        //When a file is selected, grab the URL and set it as the text field's value
        upload_image_custom_uploader.on('select', function() {
            attachment = upload_image_custom_uploader.state().get('selection').first().toJSON();
            $('#' + field_id).val(attachment.url);
            $('#' + field_id + '_img').html('<img src="' + attachment.url + '" />');
        });

        //Open the uploader dialog
        upload_image_custom_uploader.open();

    });

    $('.upload_image_delete').unbind().click(function(e) {
        e.preventDefault();
        var field_id = $(this).data('field-id');
        $('#' + field_id).val('');
        $('#' + field_id + '_img').html('');
    });

});