<?php

namespace snalesh\DataObject;

use InvalidArgumentException;

abstract class DataObject
{
    public function __get($name)
    {
        throw new InvalidArgumentException('property "' . $name . '" does not exist');
    }

    public function __set($name, $value)
    {
        throw new InvalidArgumentException('property "' . $name . '" does not exist');
    }
}