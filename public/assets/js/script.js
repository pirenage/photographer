$(document).ready(function(){
    // Upload image using AJAX
    $('#uploadForm').submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: '<?php echo base_url("upload/upload_image"); ?>',
            type: 'POST',
            data: formData,
            contentType: false,
            cache: false,
            processData:false,
            success: function(response){
                $('#gallery').html(response);
                $('#uploadForm')[0].reset();
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    });
    
    // Load gallery images on page load
    $.ajax({
        url: '<?php echo base_url("upload/load_gallery"); ?>',
        type: 'GET',
        success: function(response){
            $('#gallery').html(response);
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
        }
    });
});
