<?php

class BlouseSearchCest
{
    /**
     * 1. Зайти на http://automationpractice.com/index.php
     * 2. Найти на странице товар «Blouse»
     * 3. Навести на него мышью
     * 4. Кликнуть на кнопку «Quick view» внутри блока с товаром
     * 5. Дождаться появления модального окна
     * 6. Убедиться, что это нужный нам товар, проверив текст «Blouse» внутри модального окна
     */
    public function checkSearchBlouse(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->waitForElementVisible('#homefeatured > li:nth-child(2) > div:nth-child(1) > div:nth-child(1) > div:nth-child(1) > a:nth-child(1) > img:nth-child(1)');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div:nth-child(1) > div:nth-child(1) > div:nth-child(1) > a:nth-child(1) > img:nth-child(1)');
        $I->waitForElementVisible('#homefeatured > li:nth-child(2) > div:nth-child(1) > div:nth-child(1) > div:nth-child(1) > a:nth-child(3) > span:nth-child(1)');
        $I->click('#homefeatured > li:nth-child(2) > div:nth-child(1) > div:nth-child(1) > div:nth-child(1) > a:nth-child(3) > span:nth-child(1)');
        $I->switchToIFrame('.fancybox-iframe');
        $I->see('Blouse', '#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1');
    }
}
