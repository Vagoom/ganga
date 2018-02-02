
var isIndexPage = (function() {
                    if (location.pathname === '/' || location.pathname === '/ganga/') {
                        return true;
                    } else {
                        return false;
                    };
                })();

//Set background image to body
function indexBackground() {

    if (isIndexPage) {
        $('body').attr('id', 'body_with_background');
    } 
    else {
        //Change color of nav toggler if not on index page
        $('#nav_toggler .line').removeClass('line').addClass('line_grey');
    }
}

$(document).ready(function() {
    //Change background depending on current page
    indexBackground();
    
    //Some search action...
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
            //Avoid to set background on non index pages
            if (isIndexPage) {
                body.attr('id', 'body_with_background');
            }
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
