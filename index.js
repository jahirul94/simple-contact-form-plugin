jQuery(document).ready(function($) {
    $('#contactForm').submit(function() {
        var formData = $(this).serialize();
 
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: formData,
            success: function(response) {
                $('#response').html(response);
            }
        });

        return false;
    });
});
