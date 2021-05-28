<?php

class SearchBlouseCest
{
    /*
     Проверить поиск товара "Blouse" на сайте
     */
    // tests
    public function checkSearchBlouse(AcceptanceTester $I)
    {

        $I->amOnPage('');
        $I->waitForElement('#homefeatured > li:nth-child(2) > div > div.right-block > h5 > a', 10);
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img');
        $I->waitForElement('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img', 10);
        $I->waitForElement('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view', 10);
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view > span');
        $I->switchToIFrame('.fancybox-iframe');
        $I->waitForElement('#product', 10);
        codecept_debug($I->GrabTextfrom('#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1'));
        $I->waitForText('Blouse', 10, '#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1');   
    }
}
