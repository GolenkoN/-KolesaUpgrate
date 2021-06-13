<?php
namespace Page\Acceptance;

/**
 * Класс MainPage
 */

class MainPage
{
    /**
     * УРЛ главной страницы товаров
     */

    public static $url = '';

    /**
     * Селектор для кнопки Sign In
     */

    public static $signInButton = '//a[@class="login"]';

    /**
     * Селектор для попадания в аккаунт
     */

    public static $myAccountLink = '//a[@class="account"]';

    /**
     * Селектор первой карточки товара
     */

    public static $nthProductBlock = '//*[@id="homefeatured"]/li[%d]/div/div[2]/h5/a';

    /**
     * Селектор кнопки Quick View первой карточки товара
     */

    public static $nthProductQuickViewButton = '//*[@id="homefeatured"]/li[%d]/div/div[1]/div/a[2]';

}