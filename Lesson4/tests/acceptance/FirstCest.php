<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {

        $I->amOnPage('');
        $I->seeElement('#homefeatured > li:nth-child(2) > div > div.right-block > h5 > a');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img');
        $I->seeElement('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img');
        $I->seeElement('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view > span');
        $I->switchToIFrame('.fancybox-iframe');
        $I->seeElement('#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1');
        codecept_debug($I->GrabTextfrom('#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1'));   
    }
}
