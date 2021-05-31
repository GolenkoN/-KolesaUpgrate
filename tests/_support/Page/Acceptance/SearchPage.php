<?php
namespace Page\Acceptance;

class SearchPage
{
    // include url of current page
    public static $URL = 'index.php?id_category=11&controller=category';

    /**
     * селектор Grid
     */
    public static $Grid = '#grid.selected';

    /**
     * селектор представления карточек Грид
     */
    public static $productGrid = '.product_list.grid';

     /**
     * селектор List
     */
    public static $List = '#list > a';

     /**
     * селектор представления карточек Лист
     */
    public static $productList = '.product_list.list';

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
     * объект AcceptanceTester
     *
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Переход на  страницу onSearchPage
     */
    public function onSearchPage()
    {
        $this->acceptanceTester->seeInCurrentUrl(self::$URL);
        return $this;
    }

    /**
     * Кликаем на представление карточек Лист
     */
    public function changeView()
    {
        $this->acceptanceTester->click(self::$List);
        return $this;
    }
}