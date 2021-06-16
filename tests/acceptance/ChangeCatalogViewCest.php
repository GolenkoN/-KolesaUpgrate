<?php

use Page\Acceptance\MainPage;
use Page\Acceptance\SearchPage;

/**
 * Класс для смены вида каталога
 */
class ChangeCatalogViewCest
{
    /**
     * тест проверяет смену раскладки каталога
     */
    public function ChangefromGridToList(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::$URL);
        $I->moveMouseOver(MainPage::$dressesNavBar);
        $I->waitForElementVisible(MainPage::$summerDresses);
        $I->click(MainPage::$summerDresses);
        $I->seeInCurrentUrl(SearchPage::CATEGORY_ID);
        $I->moveMouseOver(SearchPage::$productsListSelectedGrid);
        $I->seeElement(SearchPage::$productsListSelectedGrid);
        $I->click(SearchPage::$productsListSelectList);
        $I->seeElement(SearchPage::$productsListSelectedList);
        $I->dontSeeElement(SearchPage::$productsListSelectedGrid);
    }
}
