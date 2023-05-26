$(function() {
    // Only change the element ID name in order to reuse
    // Edit a Room Type
    $('#create-business-entity').submit(function(event) {
        event.preventDefault(); // prevent the form from submitting normally
        // $('#create-room-type-form').modal('hide');
        // var formData = $(this).serialize(); // serialize the form data
        let formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                // handle the response from the server
                if(response.code === 'success'){
                    toastr.options.closeHtml = '<button class="closebtn"><i class="bi bi-x"></i></button>';
                    toastr.info(response.title, response.message);
                    location.reload();
                }

                if(response.code === 'warning'){
                    toastr.options.closeHtml = '<button class="closebtn"><i class="bi bi-x"></i></button>';
                    toastr.warning(response.title, response.message);
                    location.reload();
                }

                if(response.code === 'error'){
                    toastr.options.closeHtml = '<button class="closebtn"><i class="bi bi-x"></i></button>';
                    toastr.error(response.title, response.message);
                    location.reload();
                }
            },
            error: function(xhr, status, error) {
                // handle errors
                console.log(xhr.responseText);
            }
        });
    });

});