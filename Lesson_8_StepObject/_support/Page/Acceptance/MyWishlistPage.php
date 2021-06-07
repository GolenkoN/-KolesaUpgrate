<?php
namespace Page\Acceptance;

/**
 * Класс страницы  My Wish List
 */

class MyWishlistPage
{
    /**
     * Селектор столбца с количеством добавленного в ВишЛист
     */

    public static $quantityColumn = '//td[@class="bold align_center"]';

    /**
     * Селектор пиктограммы удаления товаров из ВишЛист
     */

    public static $deleteFromWishlistIcon = '//a[@class="icon"]';

    /**
     * Селектор для кнопки Выход из учетной записи
     */

    public static $signOutLink = '//a[@class="logout"]';
    
    public static $wishListUrl = 'index.php?fc=module&module=blockwishlist&controller=mywishlist';

}