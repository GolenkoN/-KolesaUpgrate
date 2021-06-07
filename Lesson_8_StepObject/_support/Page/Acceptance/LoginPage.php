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