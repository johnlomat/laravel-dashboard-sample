jQuery(document).ready(function($) {
    $(document).keyup(function(e) {
        if (e.key === "Escape") { // escape key maps to keycode `27`
            $('#drop-down-menu').addClass('hidden')
       }
   });

    $(document).click(function() {
        $('#drop-down-menu').addClass('hidden')
    })   
    $('#user-menu, #mobile-menu-button').click(function(e) {
        e.stopPropagation()
        $('#drop-down-menu, #mobile-menu').toggleClass('hidden')
    })
    $('#drop-down-menu').click(function(e) {
        e.stopPropagation()
    })

    $('.edit-list-item').click(function() {
        $('.name--field').toggleClass('hidden')
        $('.name-item').toggleClass('hidden')
        $('.name-field--container').toggleClass('flex-col')
        $('.name-field--wrapper').toggleClass('mb-2')
        $('#submit-button').toggleClass('cursor-not-allowed')
        $('#submit-button').attr('disabled', false)
        $(this).toggleClass('text-red-500 text-indigo-600')

        switch($(this).text()) {
            case 'Edit':
                $(this).text('Cancel')

            break;
            case 'Cancel':
                $(this).text('Edit')

                $('.name--field').each(function() {
                    $(this).find('#first-name').val($('.first-name').text())
                    $(this).find('#last-name').val($('.last-name').text())
                    $('#submit-button').attr('disabled', true)
                })

            break;
        }
    })
})