<?php

$BlouseMainPageTextCSS ='#homefeatured h5 [title="Blouse"]' ;
$BlouseMainPageTextXPath ='//*[@id="homefeatured"]//h5[2]//a[@title="Blouse"]';
$BlouseMainPageContainerCSS ='#homefeatured > li:nth-child(2) > div';
$BlouseMainPageContainerXPath ='//*[@id="homefeatured"]/li[2]/div';
$BlouseClickableElementCSS = '#homefeatured li:nth-child(2) a.quick-view span';
$BlouseClickableElementXPath = '//*[@id="homefeatured"]/li[2]//a[@class="quick-view"]/span';
$IFrameCSS = 'iframe.fancybox-iframe';
$IFrameXPath = '//iframe[@class="fancybox-iframe"]';
$IFrameImageCarouselCSS = 'iframe.img-responsive';
$IFrameImageCarouselXPath = '//iframe[@class="img-responsive"]';
$IFrameAddToCartButtonCSS = 'iframe.exclusive';
$IFrameAddToCartButtonXPath = '//iframe[@class="exclusive"]';


class IFrameBlouseCest
{
    // tests
    public function IFrameBlouseClick(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#homefeatured > li:nth-child(2) > div > div.right-block > h5 > a');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view > span');
        $I->waitForElementVisible('.fancybox-iframe');
        $I->switchToIFrame('.fancybox-iframe');
        $I->seeElement('.img-responsive');
        $I->seeElement('.exclusive');
        $I->see('Blouse');
    }
}
