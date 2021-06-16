<<<<<<< HEAD
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
=======
<?php
namespace Page\Acceptance;

/**
 * Класс MainPage
 */

class MainPage
{
    /**
     * УРЛ главной страницы товаров
     */

    public static $url = '';

    /**
     * Селектор для кнопки Sign In
     */

    public static $signInButton = '//a[@class="login"]';

    /**
     * Селектор для попадания в аккаунт
     */

    public static $myAccountLink = '//a[@class="account"]';

    /**
     * Селектор первой карточки товара
     */

    public static $nthProductBlock = '//*[@id="homefeatured"]/li[%d]/div/div[2]/h5/a';

    /**
     * Селектор кнопки Quick View первой карточки товара
     */

    public static $nthProductQuickViewButton = '//*[@id="homefeatured"]/li[%d]/div/div[1]/div/a[2]';

}
>>>>>>> 4a94011bc424b3ff7825ba00a5077911d5cf9227
