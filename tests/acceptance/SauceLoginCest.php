<?php

use Page\Acceptance\LoginPage;

/**
 * класс стартовой страницы
 */
class SauceLoginCest
{
    /**
     * Тест проверки авторизации заблокированного юзера
     */
    public function LockedOutUserAuthorizationCheck(AcceptanceTester $I)
    {
        $loginPage = new LoginPage($I);
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$loginTextField, LoginPage::LOCKEDUSER);
        $I->fillField(LoginPage::$passwordTextField, LoginPage::LOCKEDUSER);
        $I->click(LoginPage::$loginButton);
        $I->waitForElementVisible(LoginPage::$errorField, 10);
        $I->seeElement(LoginPage::$errorField);
        $loginPage->closeErrorField();
        $I->dontSee(LoginPage::$errorField);
    }
}
