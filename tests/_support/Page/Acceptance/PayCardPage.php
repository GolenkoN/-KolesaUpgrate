<?php
namespace Page\Acceptance;

use PHPUnit\Runner\StandardTestSuiteLoader;

/**Класс для заполния полей */
class PayCardPage
{
    /**
     * Url Для перехода 
     */

    public static $URL = '';

    /**
     *  Селектор имени
     */

    public static $FirstName = '//*[@id="firstName"]';

    /**
     * Селектор фамилии 
     */

    public static $LastName = '//*[@id="lastName"]';

    /**
     * Селектор email 
     */
    public static $Email = '//*[@name="q38_email38"]';

    /**
     * Селектор телефона 
     */

    public static $PhoneNumber = '//*[@id="phoneNumber"]';

    /**
     * Селектор адреса
     */

    public static $AdressFirst = '//*[@id="address"]';

    /**
     * Селектор Города 
     */

    public static $City = '//*[@id="city"]';

    /**
     * Селектор штата 
     */

    public static $State = '//*[@id="state"]';

    /**
     * Селектор постал кода 
    */
    public static $PostalCode = '//*[@id="postal"]';

    /**
     * Селектор кнопrb логин
     */

    public static $ApplyButton = '//*[@id="input_36"]';

    /**
     * Селектор выбора способа оплаты 
     */

    public static $PayCard = '//*[@id="input_32_paymentType_credit"]';

    /**
     * Селектор выбора имени в способе оплаты 
     */

    public static $FirstNamePay = '//*[@id="input_32_cc_firstName"]';

    /**
     * Селектор выбора фамилии в способе оплаты 
     */

    public static $LastNamePay = '//*[@id="input_32_cc_lastName"]';

    /**
     * Номер карты в способе оплаты 
     */
    public static $CartNumberPay = '//*[@id="input_32_cc_number"]';

    /**
     * Cvv код 
    */
    public static $CvvCardPay = '//*[@id="input_32_cc_ccv"]';

    /**
     * Месяц выпуска карты
    */
     
    public static $MonthCardPay = '//*[@id="input_32_cc_exp_month"]/option[7]';
    
    /**
     * Год окончания действия карты 
     */

    public static $YearEndCardPay = '//*[@id="input_32_cc_exp_year"]/option[5]';

    /**
     * Биллинг адресс 
    */

    public static $BillingAdressPay = '//*[@id="input_32_addr_line1"]';

    /**
     * Город в биллинг адресе 
     */

    public static $BillingCity = '//*[@id="input_32_city"]';

    /**
     * Штат в биллинг адресе 
     */

    public static $BillingState = '//*[@id="input_32_state"]';

    /**
     * Zip code в биллинг адресе 
    */

    public static $BillingZip = '//*[@id="input_32_postal"]';

    /**
     * Страна в биллинг адресе 
    */

    public static $BillingCountry = '//*[@id="input_32_country"]/option[44]';

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}