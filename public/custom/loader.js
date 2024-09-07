$(document).ready(function() {
    setTimeout(function() {
        $('.loader-container').fadeOut('slow', function() {
            $('.content').fadeIn('slow');
        });
    }, 2000); // Duration for the loader to show
});
