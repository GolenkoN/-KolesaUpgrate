<?php

use Codeception\Example;
use Page\Acceptance\Habr;
use Page\Acceptance\MainPage;
use Page\Acceptance\SearchPage;

/**
 * Класс для рандомного выбора категории
 * @group random
 */
class SelectRandomCategoryCest
{
    /**
     * тест рандомно выбирает категорию и подтверждает это через урл
     * @param Example $data
     * @dataProvider getDataForCategorySelect
     * @group random
     */
    public function SelectThanAssertRandomCategory(AcceptanceTester $I,Example $data)
    {
        $I->amOnPage(Habr::$URL);
       // $I->waitForElementClickable(Habr::$randKeys[0], $data['menuPoint']);
       // $I->click(sprintf(Habr::$randKeys[0], $data['menuPoint']));
       // $I->seeInCurrentUrl(Habr::$randKeys[0], $data['name']);
    }


    protected function getDataForCategorySelect() {
        
        $getRandomCategory = [
        //['menuPoint' => '//li[@class="nav-links__item"]/a[@href="https://habr.com/ru/top/"]', 'name' => 'top'],
        ['menuPoint' => 'https://habr.com/ru/flows/develop/', 'name' => 'develop'],
        ['menuPoint' => 'https://habr.com/ru/flows/admin/', 'name' => 'admin'],
        ['menuPoint' => 'https://habr.com/ru/flows/design/', 'name' => 'design'],
        ['menuPoint' => 'https://habr.com/ru/flows/management/', 'name' => 'management'],
        ['menuPoint' => 'https://habr.com/ru/flows/marketing/', 'name' => 'marketing'],
        ['menuPoint' => 'https://habr.com/ru/flows/popsci/', 'name' => 'popsci']
        ];

        $randKeys = array_rand($getRandomCategory, 2);

        return $randKeys;
}

    public function getRandomCategory()
    {
        return sprintf(
            '%s',
            $this->getDataForCategorySelect[array_rand($this->getDataForCategorySelect)]
        );
    }
}
