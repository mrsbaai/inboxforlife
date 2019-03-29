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
            'zwow4lj4h8ly6o746dc7@hotmail.com',
            'ig1033lqwlk3jun22wka@hotmail.com',
            '97rkntidnt4doy6156hz@hotmail.com',
            'oidptduqpocf5gbpipls@hotmail.com',
            'ttd9di7oambyztoz5xd2@hotmail.com',
            'p2k4wyi9atbc71ahylc8@hotmail.com',
            'sjvs7fapsxzu9cilbnml@hotmail.com',
            'zn2djv9wy322nrng8tfj@hotmail.com',
            '4dy2u8ox6ap0h5d7xmqx@hotmail.com',
            '84hy7e3gs44whv8da6m3@hotmail.com',
            'vlmfffnay0etv7i9ioh7@hotmail.com',
            '65rvdx3vmy85hfifoaba@hotmail.com',
            'o9l9glaro9kgr96vjku3@hotmail.com',
            'wv792y0fsblgftlknops@hotmail.com',
            'n0qqnp5eevof93omu53i@hotmail.com',
            'k8m1urqtp94jomcdijfr@hotmail.com',
            'z3jk1o6nusk1pbmysxvk@hotmail.com',
            'jt4ueh0m5h2e4qzxax8f@hotmail.com',
            'ylfo2ik3ti9fgij4zmtw@hotmail.com',
            'blooddity@hotmail.com',
            'mrmshh3v94z9rwzd0a3e@hotmail.com',
            'quhtbsolrtes3e9a28qd@hotmail.com',
            'y2ym9orzp0v0gvtbze3j@hotmail.com',
            '3cuvkut3l82s1rn6seb8@hotmail.com',
            '26gw3zn87pejcn9jojc9@hotmail.com',
            'z63wz8gn8y6di4uzzvcx@hotmail.com',
            '75oy2qvmoo3uqin1cekz@hotmail.com',
            'u52yml5jill77775umeu@hotmail.com',
            'qzmyk38e0s10rdsrj3e5@hotmail.com',
            'qazodrvi8lgrh2cx2e8n@hotmail.com',
            'jp62wcfdo484e9ult8j0@hotmail.com',
            '3f7w3stmj6ucfhnugbyj@hotmail.com',
            'rcyva6svt7ltvwo8wtrr@hotmail.com',
            '2gt96f08i4guaz5368xf@hotmail.com',
            'oudejmf42s7fcaulsfkc@hotmail.com',
            '2joqxv4spp2imesvdln5@hotmail.com',
            'cb34sg4ag74lop8z25f9@hotmail.com',
            'ecdyfny6kp3gayu7wku8@hotmail.com',
            'pv5q3y14mbsj23ms2gqc@hotmail.com',
            'q9wrezsd7tyow35tucl4@hotmail.com',
            'bcqquiqreehzf5t56b8w@hotmail.com',
            'chj6npfgvq7wtvfr9rv1@hotmail.com',
            '170okza2ba7rdfrz48z5@hotmail.com',
            '84hcrnnxfidcaziltrw8@hotmail.com',
            'v3kdri1fbjefrqxe251m@hotmail.com',
            'lxc4uhwomeqjoac6j3q2@hotmail.com',
            'yv0qzaalkum8wo5y8l1m@hotmail.com',
            'xrty50a6u72detd9p4gv@hotmail.com',
            'pb0wmyu9a5eshwk3wk4l@hotmail.com',
            'unz3vxxy6rzhl4qzuzdb@hotmail.com',
            'ace6w2hzyomo3a4e2bxq@hotmail.com',
            'jnoq33rtkumceuvwma30@hotmail.com',
            'w4v8d64pqs7irwmkt5x7@hotmail.com',
            '5o6bg2ruu2yfx3hpj8pu@hotmail.com',
            'icf2w1cdmk4y7fwiumfv@hotmail.com',
            'ins7d6x1z5c7k7vleuij@hotmail.com',
            '0dca2ub054pmjw8jpd1y@hotmail.com',
            '1pgl5lsqseywiygc9a7p@hotmail.com',
            '5nds0apamgusmgzsumln@hotmail.com',
            '44p13m1tvl60pl8mo0ze@hotmail.com',
            'j9jjbmxp2wxq3fojozx6@hotmail.com',
            '3i3uzcx8a3uf0iyqlzgs@hotmail.com',
            'ejt9j8x32nk5ixj7sqq6@hotmail.com',
            'nzgzr3jqdge9zycwke72@hotmail.com',
            'hsaymyy6qy5dsa8ikfl5@hotmail.com',
            'p0ljgux799qa252pjq6s@hotmail.com',
            'iad2e29ruvkyoxfv7x17@hotmail.com',
            'kw7wvjlosxdlj7dgonl6@hotmail.com',
            'jcdb2zaf0f2ugqvdk4wu@hotmail.com',
            'a1hutyvpqg87px9po0hp@hotmail.com',
            'zvhzgo2llnq6fbz7qmvy@hotmail.com',
            'cj6ycio15gms6kw94yfi@hotmail.com',
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
        $log = $validator->getLog();
        return Response::json(array($results, $log));



    }
}
