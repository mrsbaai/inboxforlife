<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use SMTPValidateEmail\SMTPValidateEmail;

class PagesController extends Controller
{

    public function home(){


        $from = 'sendingemail@test.test';
        $email = 'emailtoverify@test.test';

        $validator = new SMTPValidateEmail($email, $from);
        $smtp_results = $validator->validate();

        print_r($smtp_results);

    }
}
