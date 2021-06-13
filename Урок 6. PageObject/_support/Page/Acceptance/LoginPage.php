<?php
namespace Page\Acceptance;
/**
 * страница для авторизаци
 */
class LoginPage
{
    /**
     * константа юзернейм для ошибочной  авторизации
     */
    public const USERNAME = 'locked_out_user';

    /**
     * константа пароль для  ошибочной  авторизации
     */
    public const PASSWORD = 'secret_sauce';

    /**
     *  УРЛ страницы авторизации
     */
    public static $URL = '';

    /**
     * селектор для поля ввода логина
     */
    public static $usernameField = '#user-name';

    /**
     * селектор для поля ввода пароля
     */
    public static $password = '#password';

    /**
     * селектор для кнопки Login
     */
    public static $loginButton = '#login-button';

    /**
     * селектор на поле с ошибкой
     */
    public static $errorBoxContainer = '.error-message-container';

    /**
     * селектор для кнопки закрытия бокса с ошибкой 
     */
    public static $closeErrorBoxButton = '.error-message-container .error-button';

    /**
     * объект of acceptance tester
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Для заполнения поля Юзернейм
     */
    public function fillUserNameField(){
        $this->acceptanceTester->fillField(self::$usernameField, self::USERNAME);
        return $this;
    }
    /**
     * Для заполнения поля Пароль
     */
    public function fillPasswordField(){
        $this->acceptanceTester->fillField(self::$password, self::PASSWORD);
        return $this;
    }
    /**
     * Для нажатия кнопки Логин 
     */
    public function clickLoginButton(){
        $this->acceptanceTester->click(self::$loginButton);
        return $this;
    }
    /**
     * Для нажатия кнопки закрытия бокса с ошибкой
     */
    public function closeErrorBox(){
        $this->acceptanceTester->click(self::$closeErrorBoxButton);
        return $this;
    }
}