<?php

/**
 * Класс для данных User
 */
class UsersCest
{
    /**
     * Тест на создание, изменение и удаление User
     */
    public function checkUser(FunctionalTester $I) 
    {
        $defaultSchema = [
            "_id" => 'string',
            "email" => 'string',
            "superhero" => 'boolean',
            "name" => 'string',
            "owner" => 'string'
        ];

        $userData = [
            'email' => $I->getFaker()->email,
            'owner' => $I->getFaker()->name.'Nady',
            'job'   => $I->getFaker()->company,
            'name'  => $I->getFaker()->name
        ];

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', $userData);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status' => 'ok']);
        $I->sendGet('people', $userData);
        $I->seeResponseMatchesJsonType($defaultSchema);

        $userIdArray = $I->grabDataFromResponseByJsonPath('$.._id');
        $userId = $userIdArray[sizeof($userIdArray)-1];
        $I->sendPut('/human?_id=' . $userId, array('job' => 'Company'));
        $I->seeResponseContainsJson(['nModified' => 1]);
        $I->sendGet('people', $userData);
        $I->assertEquals($userData['name'], json_decode($I->grabResponse())[0]->name, 'check name is updated');

        $I->seeResponseContainsJson(['job' => 'Company']);
        $I->sendDelete('/human?_id=' . $userId);
        $I->seeResponseContainsJson(['deletedCount' => 1]);
        $I->sendGet('people', $userData);
        $I->dontSeeResponseContainsJson(['_id' => $userId]);
        $I->assertEquals(array(), json_decode($I->grabResponse()), 'check user is deleted');
    }
} 