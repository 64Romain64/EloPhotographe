;(function ($, window, document, undefined) {
    'use strict';

    $(window).on('load', function() {

        if ( $('#page_template').length ) {
            if ( $('#page_template').val() != 'page_with_sidebar.php' ) {
                $('#_custom_template_page_options').hide();
            }else{
                $('#_custom_template_page_options').show();
            }
        }else{
            $('#_custom_template_page_options').hide();
        }

    });

    $('#page_template').on('change', function(){
        if ( $('#page_template').length ) {
            if ( $('#page_template').val() != 'page_with_sidebar.php' ) {
                $('#_custom_template_page_options').hide();
            }else{
                $('#_custom_template_page_options').show();
            }
        }else{
            $('#_custom_template_page_options').hide();
        }
    });

})(jQuery, window, document);