<?php


namespace App\Facades;


class HttpErrorCodeFacade extends \App\Core\EnumFacade
{

    /**
     * @return string
     * @author Saurabh.Mishra
     */
    public static function getFacadeAccessor()
    {
        return 'http_error_code';
    }

}
