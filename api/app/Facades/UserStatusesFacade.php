<?php


namespace App\Facades;


class UserStatusesFacade extends \App\Core\EnumFacade
{
    /**
     * @return string
     * @author Saurabh.Mishra
     */
    public static function getFacadeAccessor()
    {
        return 'user_statuses';
    }
}
