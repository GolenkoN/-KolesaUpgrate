<?php
namespace Page;

/**
 * Класс для работы с owner
 */
class OwnerPage 
{
    /**
     * Селектор кнопки Snap 
     */
    public static $snapButton = '//*[@id="snap"]';

    /**
     * Селектор элементов списка
     */
    public static $li = '//li';

    /**
     * Селектор имен элементов списка
     */
    public static $userName = '//b';

    /**
     * Селектор текста с количеством оставшихся юзеров
     */
    public static $countSpan = '//span';
}