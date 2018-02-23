/** 
 * @returns {bool}
*/
var isIndexPage = (function() {
    if (location.pathname === '/' || location.pathname === '/gangasvara/') {
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
    
    //Toggle contact form
    $('.buy_button').click(function() {
        var closestConsultWrapper = $(this).closest('.consult-wrapper');
  
        if (!closestConsultWrapper.next().is('.form-container')) {
            $('.container > .form-container').remove();
            $('<div class="form-container"></div>').insertAfter(closestConsultWrapper);
            $('.form-container').load('contact-form.php', function() {
                $('.contact-heading').css('display', 'block');
            });
        } else {
            closestConsultWrapper.next().remove();
        }
    });

    //Some search action...
    $('#search_button, #mobile_search_button').click(function(){
        alert('searchAction');
    });

    //Nav toggler actions
    $('#nav_toggler').click(function() {
        var body = $('body');
        var bodyImg = $('#center-logo');
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


    $('#send-form-btn').click(function() {
        var form = $('#contact_form');
        //Validate jquery plugin
        var validator = form.validate({
            errorElement: 'p',
            errorClass: 'error-text',
            rules: {
                firstname : {
                    required: true,
                    rangelength: [1, 255]
                },
                lastname: {
                    required: true,
                    rangelength: [1, 255]
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    rangelength: [5, 255]
                }
            },
            messages: {
                firstname: {
                    required: 'Lūdzu ievadiet vārdu.',
                    rangelength: 'Vārdam ir jāsastāv no 1 līdz 255 simboliem'
                },
                lastname: {
                    required: 'Lūdzu ievadiet uzvārdu.',
                    rangelength: 'Uzvārdam ir jāsastāv no 1 līdz 255 simboliem'
                },
                email: {
                    required: 'Lūdzu ievadiet e-pastu.',
                    email: 'E-pasts ievadīts nepareizi. Lūdzu pārbaudiet un ievadiet vēlreiz.'
                },
                message: {
                    required: 'Lūdzu ievadiet ziņojumu.',
                    rangelength: 'Ziņojumam ir jāsastāv no 5 līdz 255 simboliem'
                }
            }
        });
        if (validator.form()) {
            alert('go query');

            //Disable submit button while processing
            $(this).attr('disabled', true).val('');

            $.post(form.attr('action'), form.serialize(), function(response) {
                //Refresh error html after submit
                form.find('p').remove();
                form.find('input:not(#send-form-btn)').css('border-color', '#808285');
                form.find('textarea').css('border-color', '#808285');

                response = JSON.parse(response);
                if (response.status === 2) {

                    form.find('input:not(#send-form-btn)').each(function(key, value) {
                        var currentInputName = value['name'];
                        var textArea = form.find('textarea');

                        $.each(response.fieldErrors, function(key) {
                            var fieldError = response.fieldErrors[key];

                            if (currentInputName === fieldError.field) {
                                form.find('input[name=\'' + currentInputName + '\']')
                                    .css('border-color', '#C11C03')
                                    .after('<p class="error-text">' + fieldError.errorMessage + '</p>');
                            }
                            else if (textArea.attr('name') === fieldError.field && !textArea.next().is('p')) {
                                textArea
                                    .css('border-color', '#C11C03')
                                    .after('<p class="error-text" style="margin-left: 4%">' + fieldError.errorMessage + '</p>');
                            }

                        });

                    });
                }
                //Enable submit button after get response
                $('#contact_form > #send-form-btn').removeAttr('disabled').val('SŪTĪT');
            });
        }
    });
});
