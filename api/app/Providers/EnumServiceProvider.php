<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \App\Enums\OrganizationStatus;
use \App\Enums\UserRoles;
class EnumServiceProvider extends ServiceProvider
{

    /**
     * registering classes.
     * @author Saurabh.Mishra
     */
    public function register()
    {
        $this->app->bind('organization_status', function ($app) {
            return new OrganizationStatus();
        });

        $this->app->bind('user_roles', function ($app) {
            return new UserRoles();
        });
    }

}
