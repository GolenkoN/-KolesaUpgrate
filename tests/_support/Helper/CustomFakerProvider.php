<?php
namespace Helper;

use Faker\Provider\Base;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class CustomFakerProvider extends Base
{


    /**
     * возвращает рандомную карту
     */
    public function getCreditCard()
    {
        return sprintf(
            '%d-%d-%d-%d',
            random_int(1000, 9999),
            random_int(1000, 9999),
            random_int(1000, 9999),
            random_int(1000, 9999)
        );
    }

    /**
     * возвращает рандомный CCV
     */
    public function getCCV()
    {
        return sprintf(
            '%d%d%d',
            random_int(1, 9),
            random_int(1, 9),
            random_int(1, 9)
        );
    }
}
