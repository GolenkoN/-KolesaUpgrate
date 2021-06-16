<?php
namespace Helper;

use Faker\Provider\Base;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class FakerProvider extends Base
{

    /*
    *Банковские номера кард для выборки 
    *
    */

    public function CardNumber()
    {
        $cardCodes = 
        [
            '9219 2294 6509 8807',
            '9127 5688 2954 5657',
            '9569 7408 9646 2143',
            '9589 0111 8935 1429',
            '9857 1650 5632 6709'
        ];
        $key = array_rand($cardCodes);
        return ($cardCodes[$key]);
    }
    public function CreateCardCvv(){
        return(random_int(100,999));
    }
}