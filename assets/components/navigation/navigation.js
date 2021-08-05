

jQuery('document').ready(function ($) {
    var dropdownToggle = $('[data-dropdown-toggle]');

    $('body').click(function (e) {

        //hide menu
        if ($(e.target).closest('.menu_list__child-menu').length === 0) {
            $('.menu_toggle').attr('aria-expanded', 'false');
            $('.menu_toggle').html('<i class="fas fa-angle-down"></i>');
            $('.menu_list__child-menu').attr('aria-hidden', 'true').hide();
            
        }

    
        //hide search
        if ($(e.target).closest('.search-toggle, #search-box').length == 0) {
             $('.search-toggle').attr('aria-expanded', 'false');
             $('#search-box').attr('aria-hidden', 'true')
        }

      
        
    })

    

    dropdownToggle.each(function () {
        var depth = $(this).data('depth');
        if (depth === 1) {
            $(this).remove();
        }

        $(this).on('click', function (e) {
            e.stopPropagation();
            const pageId = $(this).data('dropdown-toggle');
            var expanded = $(this).attr('aria-expanded');
            

            //hide open menu if another one is carrot is clicked
            if ($('.menu_list__child-menu').not($(this).siblings('.menu_list__child-menu'))) {
                $('.menu_list__child-menu').hide();
                 $('.menu_toggle').attr('aria-expanded', 'false');
                $('.menu_toggle').html('<i class="fas fa-angle-down"></i>');
                $('.menu_list__child-menu').attr('aria-hidden', 'true').hide();
            }   

            
            //changing aria tags and carot
            if (expanded === 'false') {
                $(this).attr('aria-expanded', 'true')
                $(this).html('<i class="fas fa-angle-up"></i>');
                 $('#' + pageId).attr('aria-hidden', 'false').show()
            } else {
                $(this).attr('aria-expanded', 'false')
                $(this).html('<i class="fas fa-angle-down"></i>');
                 $('#' + pageId).attr('aria-hidden', 'true').hide()
          
            }

        })
    })

    //search box toggle 
    $('.search-toggle').on('click', function () {
        $(this).attr('aria-expanded', function (i, val) {
            return val == "false" ? true : false;
        })

        $('#search-box').attr('aria-hidden', function (i, val) {
            return val == "true" ? false : true;
        })

  
    })

      
});

