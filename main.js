//Set background image to body
function indexBackground() {
    if (location.pathname === '/' || location.pathname === '/ganga/') {
        $('body').attr('id', 'body_with_background');
    }
}

$(document).ready(function() {
    //Change background on index page
    indexBackground();
    
    $('#search_button').click(function(){
        alert('searchAction');
    });

    $('#nav_toggler').click(function() {
        var body = $('body');
        if ($(this).hasClass('on')) {
            $(this).removeClass('on');
            body.attr('id', 'body_with_background');
        } else {
            $(this).addClass('on');
            body.removeAttr('id');
        }
    });
});
