<?php

class SearchPageCest
{
    /*
    Проверка количества найденных товаров 
    */

    // tests
    public function SerchPage(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement ('#search_query_top');
        $I->fillField('#search_query_top', 'Printed dress');     
        $I->seeElement('#searchbox > button');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('.product-container', 5);
    }
}