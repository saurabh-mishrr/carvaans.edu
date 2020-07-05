<?php


namespace App\Facades;


class UserRolesFacade extends \App\Core\EnumFacade
{

    /**
     * @return string
     * @author Saurabh.Mishra
     */
    public static function getFacadeAccessor()
    {
        return 'user_roles';
    }
}
