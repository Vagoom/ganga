//Set background image to body
function indexBackground() {
    if (location.pathname === '/' || location.pathname === '/ganga/') {
        $('body').attr('id', 'body_with_background');
    }
}

$(document).ready(function() {
    //Change background on index page
    indexBackground();
    
    //Some action...
    $('#search_button, #mobile_search_button').click(function(){
        alert('searchAction');
    });

    //Nav toggler actions
    $('#nav_toggler').click(function() {
        var body = $('body');
        var bodyImg = $('#center_logo');
        var mobileNavContainer = $('#mobile_navbar_container');

        if ($(this).hasClass('on')) {
            $(this).removeClass('on');
            body.attr('id', 'body_with_background');
            bodyImg.css('display', 'block');
            mobileNavContainer.css('display', 'none');
        } else {
            $(this).addClass('on');
            body.removeAttr('id');
            bodyImg.css('display', 'none');
            mobileNavContainer.css('display', 'block');
        }
    });
});
