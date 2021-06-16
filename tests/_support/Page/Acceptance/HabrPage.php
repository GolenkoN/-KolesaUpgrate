<?php
namespace Page\Acceptance;

class HabrPage
{
    public static $URL = '';

    /** 
     * Селектор категорий статей на сайте Хабр  
     * 
    */
    
    public static $WaitSelector = '//*[@id="navbar-links"]/li[1]';
    public static $HabrSelector = '//*[@id="navbar-links"]/li[%s]';

}


