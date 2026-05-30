/**
 * Digisähkö - Yhteystiedot Form AJAX
 */

jQuery(document).ready(function($) {
    $('#yhteystiedot-form').on('submit', function(e) {
        e.preventDefault();
        
        var nimi = $('#nimi').val();
        var email = $('#email').val();
        var viesti = $('#viesti').val();
        var nonce = ajax_obj.nonce;
        
        $.ajax({
            type: 'POST',
            url: ajax_obj.ajaxurl,
            data: {
                action: 'contact_form_submit',
                nimi: nimi,
                email: email,
                viesti: viesti,
                nonce: nonce
            },
            success: function(response) {
                if (response.success) {
                    $('#form-result').html('<div class="alert alert-success alert-dismissible fade show" role="alert">' + response.data + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    $('#yhteystiedot-form')[0].reset();
                    // Tyhjennä viesti 5 sekunnin jälkeen
                    setTimeout(function() {
                        $('#form-result').html('');
                    }, 5000);
                } else {
                    $('#form-result').html('<div class="alert alert-danger alert-dismissible fade show" role="alert">' + response.data + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                }
            },
            error: function() {
                $('#form-result').html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Verkkovirhe. Yritä uudelleen.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            }
        });
    });
});
