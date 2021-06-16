<?php

use Codeception\Application;
use Codeception\Example;
use Page\Acceptance\HabrPage;

class HabrCest
{
    /**
    *Проверка категорий на сайте Хабр
    * @param Example $data
    * @dataProvider HabCategory
    */
    public function HabTest(\AcceptanceTester $I,Example $data)
    {
        $I->amOnPage(HabrPage::$URL);
        $I->waitForElementClickable(HabrPage::$WaitSelector);
        var_dump(sprintf(HabrPage::$HabrSelector,$data['HabrSelector']));
        $I->click(sprintf(HabrPage::$HabrSelector,$data['HabrSelector']));
        $I->wait(5);
        $I->seeInCurrentUrl($data['url']);
        $I->waitForText($data['catheader'],null,'//div[@class="page-header page-header_110 "]');
    }

    /**
     * DataProvider, селекторы для категорий на сайте ХАбр 
     * 
     */

    private function HabCategory()
    {
        $arrayWithCategory = [['HabrSelector'=>'1','url'=>'top','catheader'=>'Все потоки'],
                              ['HabrSelector'=>'2','url'=>'develop','catheader'=>'Разработка'],
                              ['HabrSelector'=>'3','url'=>'admin','catheader'=>'Администрирование'],
                              ['HabrSelector'=>'4','url'=>'design','catheader'=>'Дизайн'],
                              ['HabrSelector'=>'5','url'=>'management','catheader'=>'Менеджмент'],
                              ['HabrSelector'=>'6','url'=>'marketing','catheader'=>'Маркетинг'],
                              ['HabrSelector'=>'7','url'=>'popsci','catheader'=>'Научпоп']];
         $key = array_rand($arrayWithCategory);
         $value = $arrayWithCategory[$key];
         return[$value];
                             
        }
} 
