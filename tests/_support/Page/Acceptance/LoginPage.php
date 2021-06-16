<<<<<<< HEAD
<?php
namespace Page\Acceptance;

/**
 * Страница для авторизации
 */
class LoginPage
{
    /**
     * Url страницы авторизации
     */
    public static $URL = '';

    /**
     * Селектор поля ввода логина
     */
    public static $loginTextField = '#user-name';

    /**
     * Селектор поля ввода пароля
     */
    public static $passwordTextField = '#password';

    /**
     * Селектор кнопки входа
     */
    public static $loginButton = '#login-button';

    /**
     * Селектор блока ошибки
     */
    public static $errorField = '.error-message-container';

     /**
     * Селектор кнопки закрытия блока ошибки
     */
    public static $errorFieldCloseButton = '.error-button';

    /**
     * Логин и пароль для авторизации
     */
    public const LOCKEDUSER = 'locked_out_user';
    public const PASSWORD = 'secret_sauce';
    
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Нажимает на кнопку закрытия текста ошибки
     */
    public function closeErrorField()
    {
        $this->acceptanceTester->click(self::$errorFieldCloseButton);
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
 * Класс для страницы логина
 */

class LoginPage
{
    /**
     * Локатор поля email
     */

    public static $emailInput = '//input[@id="email"]';

    /**
     * Селектор поля password
     */

    public static $passwordInput = '//input[@id="passwd"]';

    /**
     * Селектор кнопки  Sign In
     */

    public static $signInButton = '//button[@id="SubmitLogin"]';

    /**
     * @var \AcceptanceTester;
     */

    protected $acceptanceTester;

    /**
     * Конструктор LoginPage
     */

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Заполнение email и password 
     */

    public function fillLoginFieldsWith(string $email, string $password)
    {
        $this->acceptanceTester->fillField(self::$emailInput, $email);
        $this->acceptanceTester->fillField(self::$passwordInput, $password);
    }
} 
>>>>>>> 4a94011bc424b3ff7825ba00a5077911d5cf9227
