<?php
namespace Page\Acceptance;

/**
 * Страница для авторизации
 */
class UsersGenerate
{
    /**
     * Url страницы авторизации
     */
    public static $URL = '?owner=';

    /**
     * селектор кнопки снап
     */
    public static $snapButton = '//*[@id="snap"]';

    /**
     * название коллекции в базе
     */
    public static $collection = 'people';


    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

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
