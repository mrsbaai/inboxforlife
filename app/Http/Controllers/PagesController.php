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
            'sanae@hotmail.com',
            'm4jqwo6akxjnsvkjsebi@hotmail.com',
            '1ta0tw2n97s4p3lvbns6@hotmail.com',
            'ugezih03csie8iq08xt0@hotmail.com',
            'n17jebuh7dyyoz72nwnc@hotmail.com',
            'ngiyq6o6vnxkfu7vbsoj@hotmail.com',
            '81k0923i9dqhcr4fcabz@hotmail.com',
            'krq391ifr2qsofn8u0sd@hotmail.com',
            'ben01xip8eixb3kbmgaa@hotmail.com',
            'm25fg4gral34kbn0txa5@hotmail.com',
            'aal9l81k7wlhxel93u7i@hotmail.com',
            'blooddity@hotmail.com',

        );

        $validator = new SmtpEmailValidator($emails, $sender);
        $results   = $validator->validate();
        return Response::json($results);



    }
}
