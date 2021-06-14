<?php

use Page\OwnerPage;

/**
 * Класс для работы с User
 */
class UserCreateCest 
{
    /**
     * Количество созданных User
     */
    protected $userCount = 10;

    /**
     * Проверка количества созданных User на сайте и в базе данных
     */
    public function checkUserSnap(\Step\Acceptance\CreateUserStep $I) 
    {
        $ownerName = $I->sendRandomUsers($this->userCount);
        var_dump($ownerName);
        $I->amOnPage('?owner='.$ownerName);
        $I->waitForElementVisible(OwnerPage::$li);
        $I->seeNumberOfElements(OwnerPage::$li, $this->userCount);
        $I->click(OwnerPage::$snapButton);
        $I->dontSeeInCollection('people', array('canBeKilledBySnap' => 'true'));    

        for ($n = 1; $n <= (int)preg_replace('/[Count: ]/', '', $I->grabTextFrom(OwnerPage::$countSpan)); $n++)
        {
            $userNotSnapedSelector = OwnerPage::$li.'['.$n.']';
            $userNameData = $I->grabTextFrom($userNotSnapedSelector.OwnerPage::$userName);
            $user = $I->grabFromCollection('people', array('name' => $userNameData));
            $I->assertEquals($user['canBeKilledBySnap'], false);
        }       
    }
}