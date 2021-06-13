<?php

use Page\Acceptance\LoginPage;

/**
 * Класс для проверки авторизации
 */
class AuthorizationCest
{
    /**
     * Проверка неудачной авторизации пользователя
     */
    public function AuthorizationCest(AcceptanceTester $I)
    {
        $loginPage = new LoginPage($I);
        $I->amOnPage(LoginPage::$URL);
        $loginPage->fillUserNameField()
                  ->fillPasswordField()
                  ->clickLoginButton();
        $I->waitForElementVisible(LoginPage::$errorBoxContainer);
        $loginPage->closeErrorBox();
        $I->waitForElementNotVisible(LoginPage::$errorBoxContainer, 10);
    }
}