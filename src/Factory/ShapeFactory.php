<?php
class ShapeFactory {

    public static function create($class)
    {
        return new $class();
    }
}
