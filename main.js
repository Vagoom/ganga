//Set background image to body
function indexBackground() {
    if (location.pathname === '/' || location.pathname === '/ganga/') {
        $('body').attr('id', 'body_with_background');
    }
}

//Change background on index page
$(document).ready(function() {
    indexBackground();
});