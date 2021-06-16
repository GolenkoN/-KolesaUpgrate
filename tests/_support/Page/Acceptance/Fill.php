<?php
namespace Page\Acceptance;

/**
 * Страница заполнения форм
 */
class Fill
{
    /**
     * Url страницы авторизации
     */
    public static $URL = '';

    /**
     * селектор поля имени
     */
    public static $firstName = '//*[@id="firstName"]';
    
    /**
     * селектор поля фамилии
     */
    public static $lastName = '//*[@id="lastName"]';

    /**
     * селектор поля email
     */
    public static $email = '//*[@type="email"]';

    /**
     * селектор поля телефон
     */
    public static $phone='//*[@id="phoneNumber"]';

    /**
     * селектор поля адрес
     */
    public static $address='//*[@id="address"]';
    
    /**
     * селектор поля города
     */
    public static $city='//*[@id="city"]';

    /**
     * селектор поля state
     */
    public static $state='//*[@id="state"]';

    /**
     * селектор поля postal
     */
    public static $postal='//*[@id="postal"]';

    /**
     * селектор для радио кнопки карты
     */
    public static $paymentCardRadio='//*[@id="input_32_paymentType_credit"]';

    /**
     * селектор для поля заполнения номера кредитной карты
     */
    public static $paymentCardField='//*[@id="input_32_cc_number"]';

    /**
     * селектор для поля ccv
     */
    public static $cardCCV='//*[@id="input_32_cc_ccv"]';

    /**
     * селектор для кнопки регистрации
     */
    public static $registerButton='//*[@id="input_36"]';
  

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Метод-конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
