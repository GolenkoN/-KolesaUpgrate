<?php

use Page\Acceptance\LoginPage;
use Page\Acceptance\MainPage;
use Page\Acceptance\MyAccountPage;
use Page\Acceptance\MyWishlistPage;

/**
 * Класс для проверки добавления товара в WishList
 */

class WishListCest
{
    /**
     * Количество проверяемых товаров = 2
     */
    
    public const PRODUCT_NMB = 2;

    /**
     *  Выполняется вход в личный кабинет на сайте
     */

    public function _before(AcceptanceTester $I)
    {
        $loginPage = new LoginPage($I);
        $I->amOnPage(MainPage::$url);
        $I->click(MainPage::$signInButton);
        $loginPage->fillLoginFieldsWith('golenko_n.kz@mail.ru', 'Uthrektc1991');
        $I->click(LoginPage::$signInButton);
        $I->click(MyAccountPage::$mainPageLink);
    }

    /**
     * Удаление избранного и выход из личного кабинета
     */

    public function _after(AcceptanceTester $I)
    {
        $I->seeInCurrentUrl(MyWishListPage::$wishListUrl);
        $I->click(MyWishlistPage::$deleteFromWishlistIcon);
        $I->acceptPopup();
        $I->click(MyWishlistPage::$signOutLink);
    }

    /**
     * Проверяется счетчик товаров в My WishList
     */

    public function checkMyWishlistProductsQuantity(\Step\Acceptance\AddToWishlistStep $I)
    {
        $I->addProductToWishlist(self::PRODUCT_NMB);
        $I->waitForElementClickable(MainPage::$myAccountLink);
        $I->click(MainPage::$myAccountLink);
        $I->click(MyAccountPage::$wishListLink);
        $actualQuantity = $I->grabTextFrom(MyWishlistPage::$quantityColumn);
        $I->assertEquals(self::PRODUCT_NMB, $actualQuantity, "checks quantiti, is two");
    }
}