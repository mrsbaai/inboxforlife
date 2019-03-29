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
            'cj6ycio15gms6kw94yfi@hotmail.com',
            'sanae@hotmail.com',
            'm4jqwo6akxjnsvkjsebi@hotmail.com',
            '1ta0tw2n97s4p3lvbns6@hotmail.com',
            'ugezih03csie8iq08xt0@hotmail.com',
            'm25fg4gral34kbn0txa5@hotmail.com',
            'aal9l81k7wlhxel93u7i@hotmail.com',
            'blooddity@hotmail.com',
            'gv8roar3ei810nitn4ls@hotmail.com',
        );


        $validator = new SmtpEmailValidator();
        $results = array();
        foreach($emails as $email){
            array_push($results, $validator->validate($email, $sender));
        }

        $log = $validator->getLog();
        return Response::json(array($results, $log));



    }
}
