<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use SMTPValidateEmail\Validator as SmtpEmailValidator;

class PagesController extends Controller
{

    public function home(){


        $sender = 'example@hotmail.com';
        $email = 'blooddity@hotmail.com';


        $validator = new SmtpEmailValidator($email, $sender);

// If debug mode is turned on, logged data is printed as it happens:
// $validator->debug = true;
        $results   = $validator->validate();
        print("<pre>".print_r($results,true)."</pre>");
        echo"<br/>-----------------------------------<br/>";


// Get log data (log data is always collected)
        $log = $validator->getLog();
        print("<pre>".print_r($results,true)."</pre>");

    }
}
