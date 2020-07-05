<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \App\Enums\OrganizationStatusEnum;
use \App\Enums\UserRolesEnum;
class EnumServiceProvider extends ServiceProvider
{

    /**
     * registering classes.
     * @author Saurabh.Mishra
     */
    public function register()
    {
        $this->app->bind('organization_status', function ($app) {
            return new OrganizationStatusEnum();
        });

        $this->app->bind('user_roles', function ($app) {
            return new UserRolesEnum();
        });
    }

}
