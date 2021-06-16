<?php
namespace Page\Acceptance;

/**
 * Страница для авторизации
 */
class Habr
{
    /**
     * Url страницы авторизации
     */
    public static $URL = 'ru';

    /**
     * селектор класса меню категорий
     */
    public static $topMenuCategorySelect = '//li[@class="nav-links__item"]/a[@href="%s"]';

    


    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Нажимает на кнопку закрытия текста ошибки
     */

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
