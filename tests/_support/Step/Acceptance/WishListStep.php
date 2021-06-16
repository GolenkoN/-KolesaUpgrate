<?php
namespace Step\Acceptance;

use Page\Acceptance\WishList;

/**
 * класс для добавления товаров в избранное
 */

class WishListStep extends \AcceptanceTester
{
    public const PRODUCTS_NMB = 2;

    /**
     * шаг по добавлению товаров в избранное
     */
    public function addProductToWishList()
    {
        $I = $this;

        for($i = 1; $i<= self::PRODUCTS_NMB; $i++ ) {
            $I->moveMouseOver(sprintf(WishList::$ProductCard, $i));
            $I->click(sprintf(WishList::$ProductCardQuickView, $i));
            $I->waitForElementVisible(WishList::$ProductCardIFrame);
            $I->switchToIFrame(WishList::$ProductCardIFrame);
            $I->seeElement(WishList::$ProductCardAddToWishlistButton);
            $I->click(WishList::$ProductCardAddToWishlistButton);
            $I->waitForElementVisible(WishList::$CrossOnTheAddingFrame);
            $I->click(WishList::$CrossOnTheAddingFrame);
            $I->switchToIFrame();
            $I->click(WishList::$CloseIFrameButton);
            $I->wait(2);
        }

    }
}