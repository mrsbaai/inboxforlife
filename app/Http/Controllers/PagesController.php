<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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
            'gv8roar3ei810nitn4ls@hotmail.com',
            'awacqx96v3ee28j60akd@hotmail.com',
            '2t38w5uszj6qffoh1ll0@hotmail.com',
            'iwi5w9709j9msd3h7vz7@hotmail.com',
            '96vhj4dfjih6k9yoi70g@hotmail.com',
            'lgg2rmqjd4qraevem5e3@hotmail.com',
            '58npqzir7p881tylwr0h@hotmail.com',
            'bh00ot8marbl4thiq7jw@hotmail.com',
            'hv9yyz3vyqj7aqm61420@hotmail.com',
            'k9ak4cka2k0ksfq1rqs1@hotmail.com',
            'njbnbr9hqng5onskts2h@hotmail.com',
            'b8gxnnd9oxr3h5skpka4@hotmail.com',
            'ddfed6cnmmrdclivzvwe@hotmail.com',
            'rnpkic91xfentuo4jfux@hotmail.com',
            'gzx8vhol9orfrbcjj20f@hotmail.com'
        );

        $validator = new SmtpEmailValidator($emails, $sender);
        $results   = $validator->validate();

        print_r($results);



    }
}
