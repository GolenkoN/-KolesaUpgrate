<?php
namespace Page\Acceptance;

class SearchPage
{
    // include url of current page
    public static $URL = '';

    /**
     * id категории летних платьев
     */
    public const CATEGORY_ID = 'id_category=11';

    /**
     * селектор каталога продуктов в форме grid выбранный
     */
    public static $productsListSelectedGrid = '//*[@id="grid"][@class="selected"]';

    /**
     * селектор каталога продуктов в форме list выбранный
     */
    public static $productsListSelectedList = '//*[@id="list"][@class="selected"]';
    
    /**
     * селектор каталога продуктов в форме list
     */
    public static $productsListSelectList = '//*[@id="list"]';

    /**
     * селектор каталога продуктов в форме grid
     */
    public static $productsListSelectGrid = '//*[@id="list"]';
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

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
