<?php
namespace Page\Acceptance;

class MainPage
{
    // include url of current page
    public static $URL = '';

    /**
     * селектор сектора платьев в navbar
     */
    public static $dressesNavBar = '//*[@id="block_top_menu"]/ul/li[2]/a[@title="Dresses"]';

    /**
     * селектор категории летних платьев
     */
    public static $summerDresses = '//*[@id="block_top_menu"]/ul/li[2]//a[@title="Summer Dresses"]';
    

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Метод-конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
