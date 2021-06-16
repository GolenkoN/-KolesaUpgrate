<?php
namespace Page\Acceptance;

class MyCabinet
{
    // include url of current page
    public static $URL = '';

    /**
     * логин и пароль для входа, email вместо логина
     */
    public const EMAIL = 'Asyl13@yandex.ru';
    public const PASS = '12345';

    /**
     * имя Юзера
     */
    public const USERNAME = 'Assylbek Abdrakhmanov';

    /**
     * селектор кнопки home из личного кабинета
     */
    public static $FromCabinetToHomePageButton='//*[@id="center_column"]/ul//a';

    /**
     * селектор кнопки моего избранного в личном кабинете
     */
    public static $MyWishlistButton = '//a[@title="My wishlists"]';

    /**
     * селектор поля количества товаров в избранном
     */
    public static $WishListQuantityField = '//tr[contains(@id, "wishlist")]/td[2]';

    /**
     * селектор кнопки удаления wishlist
     */
    public static $DeleteWishList = '//i[@class="icon-remove"]';

    /**
     * селектор кнопки сохранения избранного
     */
    public static $SubmitWishListButton = '//*[@id="submitWishlist"]';

    /**
     * селектор кнопки выхода 
     */
    public static $SignOutButton = '//a[@class="logout"]';

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
