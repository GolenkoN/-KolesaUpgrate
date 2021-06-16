<?php
namespace Page\Acceptance;

/*
POM для работы с тем, как отображается товары grid/list
*/

class checkProductRow_POM
{
    public static $gridView = '#grid.selected';//проверяет что по умолчанию у нас список в формате grid
    public static $checkIfProductsInGridRow = 'ul.product_list.row.grid'; // проверяет отображаются ли товары в grid формате
    public static $switchToList = '#list > a > i'; //переключаемся на list 
    public static $checkIfProductsInListRow = 'ul.product_list.row.list';//проверяет отображаются ли товары в list формате

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
