<?php
namespace Page\Acceptance;

class WishList
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
     * селектор первой карточки товара
     */
    public static $ProductCard = '//*[@id="homefeatured"]/li[%s]//img';

    /**
     * селектор quick view первой карточки
     */
    public static $ProductCardQuickView = '//*[@id="homefeatured"]/li[%s]//div[1]/a[2]/span';

    /**
     * селектор iframe первой карточки
     */
    public static $ProductCardIFrame = '//*[@class="fancybox-iframe"]';

    /**
     * селектор iframe первой карточки добавления в избранное
     */
    public static $ProductCardAddToWishlistButton='//*[@id="wishlist_button"]';

    /**
     * селектор для кнопки sign in
     */
    public static $SignInNavBar = '//a[@class="login"]';
    
    /**
     * селектор для поля ввода логина
     */
    public static $LoginField = '//*[@id="email"]';

    /**
     * селектор для поля ввода пароля
     */
    public static $PasswordField = '//*[@id="passwd"]';

    /**
     * селектор для кнопки авторизации
     */
    public static $SignInButton = '//*[@id="SubmitLogin"]';

    /**
     * селектор имени в навбаре
     */
    public static $AuthorizedUserName = '//*[@id="header"]/div[2]//div[1]/a/span';
    
    /**
     * селектор кнопки закрыть iframe
     */
    public static $CloseIFrameButton='//*[@class="fancybox-item fancybox-close"]';

    /**
     * текст успешного добавления в избранное
     */
    public static $SuccessfulAddingToWishListText = 'Added to your wishlist.';

    /**
     * селектор крестика на плашке
     */
    public static $CrossOnTheAddingFrame = '//*[@id="product"]/div[2]/div/div/a';
    
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
