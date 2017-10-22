/**
 * Admin function for making form fields sortable and saving their order into the database
 * It triggers AJAX to send data to the server.
 */
jQuery(document).ready(function() {
    var result;
    /**
     * Make the elements sortable
     */
    jQuery("#kkwpcf-wrap .main-box .form-group").sortable({
        update: function(event, ui) {
            result = jQuery(this).sortable("toArray");
        }
    });
    jQuery("#kkwpcf-wrap .main-box .form-group").disableSelection();

    /**
     * When clicked on Save order button, it triggers this function
     */
    jQuery("span.save-order").on("click", function() {
        var orderData = {
            'action': 'kkwpcf_save_element_order',
            'data': result
        };

        jQuery.post(ajaxurl, orderData, function(response) {
            var element = jQuery("#kkcfSaveOrderNotice");
            element.fadeIn(200);

            setTimeout(function() {
                element.fadeOut(200);
            }, 5000);
        });
    });
});