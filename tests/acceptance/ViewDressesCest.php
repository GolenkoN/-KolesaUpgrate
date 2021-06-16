<?php

use Page\Acceptance\MainPage;
use Page\Acceptance\SearchPage;

/**
 * Класс для проверки визуального представления карточек на сайте 
*/  
class ViewDressesCest
{
    /**
     * Проверка что представление сменилось с Grid на  List
     */
    public function ViewList(AcceptanceTester $I)
    {
            $mainPage = new MainPage($I);
            $searchPage = new SearchPage($I);
            $I->amOnPage(MainPage::$URL);
            $mainPage->SummerDressesPage()
                      ->onSearchPage();
            $I->seeElement(SearchPage::$Grid);
            $I->seeElement(SearchPage::$productGrid);
            $searchPage->changeView();
            $I->seeElement(SearchPage::$productList);
    }
}  
