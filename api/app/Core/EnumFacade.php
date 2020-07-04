<?php namespace App\Core;
use Illuminate\Support\Facades\Facade;

/**
 *
 * Class EnumFacade
 * @package App\Core
 * @author Saurabh.Mishra
 */
abstract class EnumFacade extends Facade
{
    /**
     * returns single constant value.
     * @param $property
     * @return mixed
     * @throws \ReflectionException
     * @author Saurabh.Mishra
     */
    public static function const($property)
    {
        $instance = static::getFacadeRoot();
        $reflectClass = new \ReflectionClass($instance);
        return $reflectClass->getConstant($property);
    }

    /**
     * returns array constant values.
     * @param array $properties
     * @return array
     * @author Saurabh.Mishra
     */
    public static function constArray(array $properties)
    {
        return array_map(function($constVar){
            return self::const($constVar);
        }, $properties);
    }

}
