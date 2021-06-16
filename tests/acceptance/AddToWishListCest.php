<?php


use Page\Acceptance\WishList;
use Page\Acceptance\MyCabinet;

/**
 * Класс для добавления товаров в избранное
 */
class AddToWishListCest
{
    public const PRODUCTS_NMB = 2;    
    /**
     * метод который выполняется перед тестом
     */
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(WishList::$URL);
        $I->seeElement(WishList::$SignInNavBar);
        $I->click(WishList::$SignInNavBar);
        $I->waitForElementVisible(WishList::$LoginField);
        $I->fillField(WishList::$LoginField, WishList::EMAIL);
        $I->fillField(WishList::$PasswordField, WishList::PASS);
        $I->click(WishList::$SignInButton);
        $I->waitForText(WishList::USERNAME, 10, WishList::$AuthorizedUserName);
        $I->click(MyCabinet::$FromCabinetToHomePageButton);
    }

    /**
     * метод который выполняется после теста
     */
    public function _after(AcceptanceTester $I)
    {
        $I->seeElement(MyCabinet::$DeleteWishList);
        $I->click(MyCabinet::$DeleteWishList);
        $I->acceptPopup();
        $I->waitForElementNotVisible(MyCabinet::$DeleteWishList);
        $I->click(MyCabinet::$SignOutButton);
        $I->waitForElementVisible(WishList::$SignInNavBar);
        $I->dontSeeElement(WishList::$AuthorizedUserName);
    }

    /**
     * тест проверяет что товары добавились в избранное
     * @group wish
     */
    public function CheckObjectsAddedToList(\Step\Acceptance\WishListStep $I)
    {
        $I->comment('Добавляю товары в wishlist');
        $I->addProductToWishList();

        $I->seeElement(WishList::$AuthorizedUserName);
        $I->click(WishList::$AuthorizedUserName);
        $I->waitForElementVisible(MyCabinet::$MyWishlistButton);
        $I->click(MyCabinet::$MyWishlistButton);
        $quantity= $I->grabTextFrom(MyCabinet::$WishListQuantityField);
        $I->assertEquals(self::PRODUCTS_NMB, $quantity);
    }
}
