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
            'n0qqnp5eevof93omu53i@hotmail.com',
            'k8m1urqtp94jomcdijfr@hotmail.com',
            'z3jk1o6nusk1pbmysxvk@hotmail.com',
            'jt4ueh0m5h2e4qzxax8f@hotmail.com',
            'ylfo2ik3ti9fgij4zmtw@hotmail.com',
            'blooddity@hotmail.com'

        );

        $validator = new SmtpEmailValidator($emails, $sender);
        $results   = $validator->validate();
        $log = $validator->getLog();
        return Response::json(array($results, $log));



    }
}
