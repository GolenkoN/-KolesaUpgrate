<?php

use Page\Acceptance\UsersGenerate;

/**
 * Класс для работы с пользователями через db и ui
 */
class GenerateThenDeleteUsersCest
{
    /**
     * тест проверяет страницу и базу на предмет добавления и удаления
     * @group t1
     */
    public function ChangefromGridToList(AcceptanceTester $I)
    {
        
        $faker = $I->getFaker();
        $data = [];

        for($i=0;$i<10;$i++){
        $data[] = [
            "job" => $faker->jobTitle,
            "superhero" => $faker->boolean(),
            "skill" => $faker->word,
            "email" => $faker->email,
            "name" => $faker->name,
            "DOB" => $faker->date("Y-m-d"),
            "avatar" => $faker->imageUrl(),
            "canBeKilledBySnap" => $faker->boolean(),
            "created_at" => $faker->date("Y-m-d"),
            "owner" => "assylbekabdrak",
        ];
        
        if($data[$i]['canBeKilledBySnap']) {
            $this->mustBeDeleted[] = $data[$i];
        }
        $this->mustStay[] = $data[$i];
        
        // добавляем в БД
        $I->haveInCollection(UsersGenerate::$collection, $data[$i]);
        // проверяем что запись села в БД
        $I->seeInCollection(UsersGenerate::$collection, $data[$i]);
        }
        $I->amOnPage(UsersGenerate::$URL . $data[0]["owner"]);
        $I->waitForElementVisible('//*[@class="user-card"]');
        $I->seeNumberOfElements('//*[@class="user-card"]', count($this->mustStay));
        $I->click(UsersGenerate::$snapButton);
        $I->dontSeeInCollection('people',$this->mustBeDeleted);
        for($i=0;$i<count($this->mustBeDeleted);$i++){
        $I->dontSee($this->mustBeDeleted[$i]['name']);
        }
    }
}
