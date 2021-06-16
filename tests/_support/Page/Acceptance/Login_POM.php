<?php
namespace Page\Acceptance;

class Login_POM
{
    public const USERNAME = 'locked_out_user';//заданное зачение для логина, которое присвоено переменной
    public const PASSWORD = 'secret_sauce';//заданное значение пароля, которое присвоено переменной
    public static $URL = ''; //обращение к адресу сайта, которое присвоено переменной 
    public static $loginInput = 'input[id="user-name"]';//поле для ввода логина
    public static $passwordInput = 'input[id="password"]';//поле для ввода паролья
    public static $loginButton = 'input[id="login-button"]';//кнопка для авторизации
    public static $errorMessage = 'div[class="error-message-container error"]';//проверяет что ошибка об авторизации действительно появилась
    public static $closeErrorMessage = '#login_button_container > div > form > div.error-message-container.error > h3 > button > svg'; //кнопка которая закрывает сообщение об ошибке
    public static $isErrorMessageClosed = 'div[class="error-message-container"]'; //проверяет действительно ли сообшщение об ошибке закрыто
///

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

    public function clickOnErrorMessage() //Метод для закрытия сообщения об ошибке
    {
        $this->acceptanceTester->click(self::$closeErrorMessage);
    }
   
}
