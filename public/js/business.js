$(function() {
    // Only change the element ID name in order to reuse
    // Edit a Room Type
    $('#create-business-entity').submit(function(event) {
        event.preventDefault(); // prevent the form from submitting normally
        
        $('.form-state').hide();
        $('.isLoading').show();
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
                $('.isLoading').hide();
                // handle the response from the server
                if(response.code === 'success'){
                    toastr.options.closeHtml = '<button class="closebtn"><i class="bi bi-x"></i></button>';
                    toastr.info(response.title, response.message);
                    toastr.options.closeEasing = 'swing';
                    toastr.options.closeMethod = 'fadeOut';
                    toastr.options.closeDuration = 300;
                    toastr.options.progressBar = true;
                    // location.reload();
                }

                if(response.code === 'warning'){
                    toastr.options.closeHtml = '<button class="closebtn"><i class="bi bi-x"></i></button>';
                    toastr.warning(response.title, response.message);
                    toastr.options.closeEasing = 'swing';
                    toastr.options.closeMethod = 'fadeOut';
                    toastr.options.closeDuration = 300;
                    toastr.options.progressBar = true;
                    // location.reload();
                }

                if(response.code === 'error'){
                    toastr.options.closeHtml = '<button class="closebtn"><i class="bi bi-x"></i></button>';
                    toastr.error(response.title, response.message);
                    toastr.options.closeEasing = 'swing';
                    toastr.options.closeMethod = 'fadeOut';
                    toastr.options.closeDuration = 300;
                    toastr.options.progressBar = true;
                    // location.reload();
                }
            },
            error: function(xhr, status, error) {
                // handle errors
                console.log(xhr.responseText);
            }
        });
    });

});