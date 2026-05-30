jQuery(document).ready(function($) {
    $('#yhteystiedot-form').on('submit', function(e) {
        e.preventDefault();
        
        let formData = {
            action: 'contact_form_submit',
            nimi: $('#nimi').val(),
            email: $('#email').val(),
            viesti: $('#viesti').val()
        };

        $.post(ajax_obj.ajaxurl, formData, function(response) {
            if(response.success) {
                $('#form-result').html('<div class="alert alert-success">' + response.data + '</div>');
                $('#yhteystiedot-form')[0].reset();
            } else {
                $('#form-result').html('<div class="alert alert-danger">' + response.data + '</div>');
            }
        });
    });
});