<?php

const STATUS_SUCCESS = 1;
const STATUS_ERROR = 2;

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


    foreach ($formFields as $fieldName => $fieldValue) {
        if (empty($fieldValue)) {
            $response['status'] = STATUS_ERROR;

            switch ($fieldName) {
                case 'firstname':
                    $response['fieldErrors'][] = [
                        'field' => $fieldName,
                        'errorMessage' => __('Lūdzu ievadiet vārdu.')
                    ];
                    break;
                case 'lastname':
                    $response['fieldErrors'][] = [
                        'field' => $fieldName,
                        'errorMessage' => __('Lūdzu ievadiet uzvārdu.')
                    ];
                    break;
                case 'email':
                    $response['fieldErrors'][] = [
                        'field' => $fieldName,
                        'errorMessage' => __('E-pasts ievadīts nepareizi. Lūdzu pārbaudiet un ievadiet vēlreiz.')
                    ];
                    break;
                case 'message':
                    $response['fieldErrors'][] = [
                        'field' => $fieldName,
                        'errorMessage' => __('Lūdzu ievadiet ziņojumu.')
                    ];
                    break;
            }
        }
    }

    if ($response['status'] === STATUS_SUCCESS) {

        /** Create database record as new Processwire page */
//        $page = new Page();
//        $page->template = 'form-handler';
//        $page->of(false);
//        $page->parent = $pages->get('/form/');
//        $page->title  = date('d-m-Y G:i',time()) . ' from: ' . $formFields['email'];
//        $page->firstname = $formFields['firstname'];
//        $page->lastname = $formFields['lastname'];
//        $page->senderemail =  $formFields['email'];
//        $page->message = $formFields['message'];
//        $page->save();

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