<?php
namespace Page\Acceptance;

/**
 * Класс iframe-страницы
 */

class FramePage
{
    /**
     * Селектор iframe
     */

    public static $productIframe = '//*[@class="fancybox-iframe"]';

    /**
     * Селектор кнопки Add to wishlist
     */

    public static $addToWishlistButton = '//*[@id="wishlist_button"]';

    /**
     * Селектор блока об успешном добавлении
     */

    public static $addSuccessParagraph = '//p[@class="fancybox-error"]';

    /**
     * Селектор кнопки закрытия блока об успешном добавлении
     */

    public static $addSuccessParagraphCloseButton = '//*[@id="product"]/div[2]/div/div/a';

    /**
     * Селектор кнопки закрытия iframe
     */

    public static $productIframeCloseButton = '//*[@title="Close"]';

}  