$(document).ready(function(){
    if($('#form-contact').length > 0) {
        $('#form-contact').submit(function(){
            var formData = new FormData();
            formData.append("fname", $('.input-name').val());
            formData.append("email", $('.input-email').val());
            formData.append("subject", $('.input-subject').val());
            formData.append("message", $('.input-message').val());
            
            LLC.callServer('web/enquiry', formData, function(resp) {
                LLC.processResp(resp, function() {
                    $('#form-contact').remove();
                    $('section.contact').append('<p class="text-center">' + resp.data + '</p>');
                });
            }, this);
            return false;
        });
    }
});