<?php
namespace Page\Acceptance;

/*
POM для поиска товара на главной странице
*/

class searchPage_POM
{
    public const PRODUCT_NAME = 'Summer Dresses'; //название товара присвоенное переменной
    public static $URL = ''; //обращение к адресу сайта, которое присвоено переменной 
    public static $enterProductName = 'input[id="search_query_top"]';//поле для ввода названия товара
    public static $searchButton = 'button[class="btn btn-default button-search"]';//кнопка поиска
    
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
}
