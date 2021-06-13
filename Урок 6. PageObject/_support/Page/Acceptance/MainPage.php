<?php
namespace Page\Acceptance;

class MainPage
{
    /**
     * УРЛ страницы товаров
     */
    public static $URL = 'index.php';

    /**
     * селектор меню Дресс
     * 
     */
    public static $FerstMenu = '#block_top_menu > ul > li:nth-child(2) > a';

    /**
     * селектор меню СаммерДресс 
     */
    public static $BlockSammerDressesMenu = '#block_top_menu > ul > li:nth-child(2) > ul > li:nth-child(3) > a';

    /**
     * объект AcceptanceTester
     *
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Переход на  страницу поиска Summer Dress
     */
    public function SummerDressesPage()
    {
        $this->acceptanceTester->moveMouseOver(self::$FerstMenu);
        $this->acceptanceTester->click(self::$BlockSammerDressesMenu);
        
        return new SearchPage ($this->acceptanceTester);
    }

}