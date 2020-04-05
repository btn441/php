<?php

/**
 * Класс объекта
 */
class Object
{
    /**
     * @var array - Параметры
     */
    public $params = [];

    /**
     * @param mixed $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }

}