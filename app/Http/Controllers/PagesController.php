<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Response;
use SMTPValidateEmail\Validator as SmtpEmailValidator;

class PagesController extends Controller
{

    public function home(){


        $sender = 'example@hotmail.com';
        $emails = array(
            'ylfo2ik3ti9fgij4zmtw@hotmail.com',
            'blooddity@hotmail.com'

        );

        $validator = new SmtpEmailValidator($emails, $sender);
        $results   = $validator->validate();
        $log = $validator->getLog();
        return Response::json(array($results, $log));



    }
}
