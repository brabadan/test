<?php
/**
 * Created by PhpStorm.
 * User: Ra
 * Date: 09.08.2017
 * Time: 20:16
 */

namespace Brabadan\Test;


class SkeletonClass
{
    /**
     * Создаём новый экземпляр шаблонного приложения
     */
    public function __construct()
    {
    }

    /**
     * Дружелюбное приветствие
     *
     * @param string $phrase Возвращаемая фраза
     *
     * @return string Возвращает переданную фразу
     */
    public function echoPhrase($phrase)
    {
        return $phrase;
    }
}