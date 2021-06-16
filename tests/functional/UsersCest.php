<?php

use Codeception\Example;
use Faker\Factory;
use Helper\BaseHelper;
/**
 * класс для работы с пользователем по апи
 */
class UsersCest
{
    public static $defaultSchema =[
        'job'       => 'string',
        'superhero' => 'boolean',
        '_id'       => 'string',
        'email'     => 'string',
        'name'      => 'string',
        'owner'     => 'string',
    ];



    

    /**
     * тест на созданию пользователя
     * @group user1
     */
    public function CheckUserCreate(FunctionalTester $I)
    {
        $userData = [
            'email' => $I->getFaker()->email,
            'owner' => 'AssylbekAbdrakhmanov',
            'job'   => 'qa',
            'name'  => $I->getFaker()->name
        ];

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', $userData);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status' => 'ok']);
        $I->sendGet('people', $userData);
        $I->seeResponseMatchesJsonType(self::$defaultSchema);
    }

    /**
     * тест на update пользователя
     * @group user3
     */
    public function checkUserUpdate(FunctionalTester $I)
    {
        $userData = [
            'email' => $I->getFaker()->email,
            'owner' => 'AssylbekAbdrakhmanov',
            'job'   => 'qa',
            'name'  => $I->getFaker()->name
        ];

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', $userData);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status' => 'ok']);
        $_id = $I->grabDataFromResponseByJsonPath('$.._id');
        $url = 'human?_id=' . $_id[0];
        $I->sendPut($url, [ 'name' => $newName=$I->getFaker()->name]);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['nModified' => 1]);
        $I->seeResponseContainsJson(['ok' => 1]);
        $I->sendGet('people', ['owner' =>'AssylbekAbdrakhmanov']);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContains($newName);
    }

    /**
     * тест на удаление пользователя
     * @group user4
     */
    public function checkUserDelete(FunctionalTester $I)
    {
        $userData = [
            'email' => $I->getFaker()->email,
            'owner' => 'AssylbekAbdrakhmanov',
            'job'   => 'qa',
            'name'  => $I->getFaker()->name
        ];

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', $userData);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status' => 'ok']);
        $_id = $I->grabDataFromResponseByJsonPath('$.._id');
        $url = 'human?_id=' . $_id[0];
        $I->sendDelete($url);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['deletedCount' => 1]);
        $I->seeResponseContainsJson(['ok' => 1]);
        $I->sendGet('people', ['owner' =>'AssylbekAbdrakhmanov']);
        $I->seeResponseCodeIsSuccessful();
        $I->dontSeeResponseContains($_id[0]);
    }

    /**
     * Проверяем негативный сценарий создания пользователя без email
     * @group user2
     * @dataProvider getDataForCreateUserNegative
     * @param Example $data
     */
    public function checkUserCreateNegative(FunctionalTester $I, Example $data)
    {
        $email =  $I->getFaker()->email;
        $owner =  'AssylbekAbdrakhmanov';
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', [
            'email' => $data['email'] ? $email : null,
            'owner' => $data['owner'] ? $owner : null,
            ]);
        $I->seeResponseContains($data['messageText']);
        $I->seeResponseContainsJson($data['status']);
    }

    /**
     * dataprovider для теста
     */
    protected function getDataForCreateUserNegative()
    {
        return [
            [
                'email' => true,
                'owner' => false,
                'messageText' => 'Что-то пошло не так, проверьте поля: email, name, owner. p.s. учимся на своих ошибках',
                'status' => ['status' => false]
            ],
            [
                'email' => false,
                'owner' => true,
                'messageText' => 'email не передан',
                'status' => ['status' => false]
            ],
            ];
    }
}