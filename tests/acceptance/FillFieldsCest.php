<?php


use Faker\Factory;
use Page\Acceptance\Fill;

/**
 * Класс для заполнения полей
 * @group random2
 */
class FillFieldsCest
{
    /**
     * тест на проверку заполнения полей с помощью фейкера
     * 
     * @group random2
     */
    public function checkFillFormFields(AcceptanceTester $I)
    {
        $faker = Factory::create('kk_KZ');

        $name = $faker->firstName;
        $lastName = $faker->lastName;
        $email = $faker->email;
        $phone = $faker->phoneNumber;
        $address = $faker->address;
        $city = $faker->city;
        $state = $faker->region;
        $postal = $faker->postcode;
        $paymentCard = $I->getFaker()->getCreditCard();
        $cardCCV = $I->getFaker()->getCCV();

        $I->amOnPage(Fill::$URL);
        $I->fillField(Fill::$firstName, $name);
        $I->fillField(Fill::$lastName, $lastName);
        $I->fillField(Fill::$email, $email);
        $I->fillField(Fill::$phone, $phone);
        $I->fillField(Fill::$address, $address);
        $I->fillField(Fill::$city, $city);
        $I->fillField(Fill::$state, $state);
        $I->fillField(Fill::$postal, $postal);
        $I->click(Fill::$paymentCardRadio);
        $I->fillField(Fill::$paymentCardField, $paymentCard);
        $I->fillField(Fill::$cardCCV, $cardCCV);
        $I->click(Fill::$registerButton);
        $I->waitForText('Good job');
    }
}
