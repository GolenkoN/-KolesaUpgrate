<?php

class BlouseSearchCest
{
    /*
    Проверить поиск товара "Blouse" на сайте и переписываем селекторы
     */

    // tests
    public function checkSearchBlouse(AcceptanceTester $I)
    {
     // #homefeatured > li:nth-child(2) > div > div.right-block > h5 > a
     $rightBlockDivCSS ='#homefeatured > li:nth-child(2) > div > div.right-block > h5 > a';
     $rightBlockDivXPath ='//*[@id="homefeatured"]/li[2]/div/div[2]/h5/a';
     //#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img
     $LeftBblockDivCSS ='#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img';
     $LeftBlockDivCSSXPath ='//*[@id="homefeatured"]/li[2]/div/div[1]/div';
     //#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view > span
     $quickViewCSS ='#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view';
     $quickViewXPath = '//*[@id="homefeatured"]/li[2]/div/div[1]/div/a[2]';
     //.fancybox-iframe
     $fancyboxIframeCSS = '.fancybox-iframe';
     $fancyboxIframeXPath = '//*[@class="fancybox-iframe"]';
     //'#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1'
     $textBlouseCSS = '#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1';
     $textBlouseXpath = '//*[@id="product"]/div/div/div[2]/h1';



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
