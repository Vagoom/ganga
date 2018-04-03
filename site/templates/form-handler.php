<?php

const STATUS_SUCCESS = 1;
const STATUS_ERROR = 2;

const FIRSTNAME_REQUIRED_ERROR_MSG = 'Пожалуйста введите имя';
const LASTNAME_REQUIRED_ERROR_MSG = 'Пожалуйста введите фамилию';
const NOT_VALID_EMAIL_MSG = 'Е-почта введена не правильно. Пожалуйста проверьте и введите заново';
const MESSAGE_REQUIRED = 'Пожалуйста введите сообщение';

if ($config->ajax) {

    $formFields = [];
    $response = [
        'status' => STATUS_SUCCESS,
        'fieldErrors' => []
    ];

    /** Form field key is input name attribute */
    $formFields['firstname'] = $sanitizer->text($input->post('firstname'));
    $formFields['lastname'] = $sanitizer->text($input->post('lastname'));
    $formFields['email'] = $sanitizer->email($input->post('email'));
    $formFields['message'] = $sanitizer->textarea($input->post('message'));
    $formFields['parentPageId'] = $sanitizer->text($input->post('parent-page'));


    foreach ($formFields as $fieldName => $fieldValue) {
        if (empty($fieldValue)) {
            $response['status'] = STATUS_ERROR;

            switch ($fieldName) {
                case 'firstname':
                    $response['fieldErrors'][] = [
                        'field' => $fieldName,
                        'errorMessage' => FIRSTNAME_REQUIRED_ERROR_MSG
                    ];
                    break;
                case 'lastname':
                    $response['fieldErrors'][] = [
                        'field' => $fieldName,
                        'errorMessage' => LASTNAME_REQUIRED_ERROR_MSG
                    ];
                    break;
                case 'email':
                    $response['fieldErrors'][] = [
                        'field' => $fieldName,
                        'errorMessage' => NOT_VALID_EMAIL_MSG
                    ];
                    break;
                case 'message':
                    $response['fieldErrors'][] = [
                        'field' => $fieldName,
                        'errorMessage' => MESSAGE_REQUIRED
                    ];
                    break;
            }
        }
    }

    if ($response['status'] === STATUS_SUCCESS) {

        /** Create database record as new Processwire page */
        $page = new Page();
        $page->template = 'form';
        $page->of(false);
        $page->request_type = $pages->get($formFields['parentPageId'])->title;
        $page->parent = $pages->get('/form/');
        $page->title  = date('d-m-Y G:i',time()) . ' from: ' . $formFields['email'];
        $page->firstname = $formFields['firstname'];
        $page->lastname = $formFields['lastname'];
        $page->senderemail =  $formFields['email'];
        $page->message = $formFields['message'];
        $page->save();

        /** Send mail to website owner */
//        $mail = $mail->new();
//        $mail
//            ->to('darkdsl@inbox.lv')
//            ->from($formFields['email'])
//            ->subject('Gangesvara')
//            ->body($formFields['message'])
//            ->send();

//        // other methods or properties you might set (or get)
//        $m->bodyHTML('<html><body><h1>Message Body</h1></body></html>');
//        $m->attachment('/path/to/file.ext');
//        $m->fromName('Mary Jane');
//        $m->toName('John Smith');
//        $m->header('X-Mailer', 'ProcessWire');
//        $m->param('-f you@company.com'); // PHP mail() param (envelope from example)

    }
    echo json_encode($response);




}