<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use SMTPValidateEmail\SMTPValidateEmail;

class PagesController extends Controller
{

    public function home(){


        $from = 'example@hotmail.com';
        $email = 'blooddity@hotmail.com';

        $validator = new SMTPValidateEmail($email, $from);
        $smtp_results = $validator->validate();

        print_r($smtp_results);

    }
}
