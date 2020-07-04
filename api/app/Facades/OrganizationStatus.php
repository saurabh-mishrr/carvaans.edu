<?php namespace App\Facades;

use App\Core\EnumFacade;

class OrganizationStatus extends EnumFacade
{

    /**
     * @return string
     * @author Saurabh.Mishra
     */
    public static function getFacadeAccessor()
    {
        return 'organization_status';
    }

}
