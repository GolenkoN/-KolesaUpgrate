<?php

class SearchPageCest
{
    /*
    Проверить количество найденных товаров и переписать мелекторы
    */

    // tests
    public function SerchPage(FunctionalTester $I)
    {
    //#search_query_top
     $searchQueryTopCSS = '#search_query_top';
     $searchQueryTopXPath = '//*[@id="search_query_top"]';
     //#searchbox > button
     $searchboxButtonCSS = '#searchbox > button';
     $searchboxButtonXPath = '//*[@id="searchbox"]/button';
     //.product-container
     $productContainerCSS = '.product-container';
     $productContainerXPath = '//*[@class="product-container"]'; 


        $I->amOnPage('');
        $I->seeElement ('#search_query_top');
        $I->fillField('#search_query_top', 'Printed dress');     
        $I->seeElement('#searchbox > button');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('.product-container', 5);
    }
}