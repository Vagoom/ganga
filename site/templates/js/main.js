
const CONTACT_PAGE_URL = '/gangesvara/contact/';
const HOME_PAGE_URL = '/gangesvara/';
const FORM_HEADING = 'ПОЖАЛУЙСТА ЗАПОЛНИТЕ';


//Set background image to body
function indexBackground() {
    if (location.pathname === HOME_PAGE_URL) {
        $('body').attr('id', 'body_with_background');
    }
    else {
        //Change color of nav toggler if not on home page
        $('#nav_toggler .line').removeClass('line').addClass('line_grey');
    }
}

$(document).ready(function() {
    //Change background depending on current page
    indexBackground();


    /**
     * Check if on contact page, show form
     * Default contact form property display:none
     */
    var form = $('#contact_form');
    if (form.attr('data-parent-page') === CONTACT_PAGE_URL) {
        form.css('display', 'block');
}

    /**
     * Toggle user form
     */
    $('.button:not(.publication_button)').click(function() {
        var closestDivWrapper = $(this).closest('.item-wrapper, .training-wrapper');

        if (!closestDivWrapper.next().is('.form-container')) {
            $('.container > .form-container').remove();
            $('<div class="form-container"></div>').insertAfter(closestDivWrapper);
            var formContainer = $('.form-container');
            formContainer.html(form.clone(true));
            $('.form-container form').css('display', 'block');
            $('.form-container form input').focus();
            formContainer.prepend('<h3 class="contact-heading">' + FORM_HEADING + '</h3>');
        } else {
            closestDivWrapper.next().remove();
        }
    });

    //Nav toggler actions
    $('#nav_toggler').click(function() {
        var body = $('body');
        var bodyImg = $('#center-logo');
        var mobileNavContainer = $('#mobile_navbar_container');

        if ($(this).hasClass('on')) {
            $(this).removeClass('on');
            //Avoid to set background on non index pages
            if (location.pathname === HOME_PAGE_URL) {
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
