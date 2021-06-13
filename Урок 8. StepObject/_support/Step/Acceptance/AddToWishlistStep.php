<?php
namespace Step\Acceptance;

use Page\Acceptance\FramePage;
use Page\Acceptance\MainPage;

/**
 * StepObject для добавления товаров в wishlist
 */

class AddToWishlistStep extends \AcceptanceTester
{
    /**
     * Добавление карточек товара в wishlist
     */

    public function addProductToWishlist(int $product_NMB)
    {
        $I = $this;

        for ($n = 1; $n <= $product_NMB; $n++) {
            $I->moveMouseOver(sprintf(MainPage::$nthProductBlock, $n));
            $I->waitForElementVisible(sprintf(MainPage::$nthProductQuickViewButton, $n));
            $I->click(sprintf(MainPage::$nthProductQuickViewButton, $n));
            $I->waitForElementVisible(FramePage::$productIframe);
            $I->switchToIFrame(FramePage::$productIframe);
            $I->click(FramePage::$addToWishlistButton);
            $I->waitForElementVisible(FramePage::$addSuccessParagraphCloseButton);
            $I->click(FramePage::$addSuccessParagraphCloseButton);
            $I->switchToIFrame();
            $I->click(FramePage::$productIframeCloseButton);
        }
    }
} 