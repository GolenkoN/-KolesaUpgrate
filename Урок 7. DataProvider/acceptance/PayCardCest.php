<?php

namespace tests\Acceptance;

use Faker\Factory;
use Helper\FakerProvider;
use Page\Acceptance\PayCardPage;

/**Класс для тестирования наполнения формы */
class PayCardCest
{
    public function CardPayFilld(\AcceptanceTester $I)
    {
        $faker = Factory::create('ru_RU');
        $faker->addProvider(new FakerProvider(($faker))); 

        $Fname =  $faker-> firstName;
        $Lname =  $faker-> lastName;
        $Email =  $faker-> email;
        $phone =  $faker-> phoneNumber;
        $Adress = $faker-> address;
        $City =   $faker-> city;
        $State =  $faker-> region;
        $Postal = $faker-> postcode;
        $CardNumber =  $faker-> CardNumber();
        $CardCvv = $faker-> CreateCardCvv();

        $I->amOnPage(PayCardPage::$URL);
        $I->fillField(PayCardPage::$FirstName,$Fname);
        $I->fillField(PayCardPage::$LastName,$Lname);
        $I->fillField(PayCardPage::$Email,$Email);
        $I->fillField(PayCardPage::$PhoneNumber,$phone);
        $I->fillField(PayCardPage::$AdressFirst,$Adress);
        $I->fillField(PayCardPage::$City,$City);
        $I->fillField(PayCardPage::$State, $State);
        $I->fillField(PayCardPage::$PostalCode,$Postal);

        $I->click(PayCardPage::$PayCard);
        $I->fillField(PayCardPage::$FirstNamePay,$Fname);
        $I->fillField(PayCardPage::$LastNamePay,$Lname);
        $I->fillField(PayCardPage::$CartNumberPay,$CardNumber);
        $I->fillField(PayCardPage::$CvvCardPay,$CardCvv);
        $I->click(PayCardPage::$MonthCardPay);
        $I->click(PayCardPage::$YearEndCardPay);

        $I->fillField(PayCardPage::$BillingAdressPay,$Adress);
        $I->fillField(PayCardPage::$BillingCity,$City);
        $I->fillField(PayCardPage::$BillingZip,$Postal);
        $I->click(PayCardPage::$BillingCountry);
        $I->wait(10);
        $I->click(PayCardPage::$ApplyButton);
        $I->waitForText('Good job'); 
    }

} 