<?php

namespace App\Http\Controllers;
use Roles;
class ExampleController extends Controller
{
    /**
     * @author Saurabh.Mishra
     */
    public function home()
    {
        return response()->json([
           'data' => 'Welcome to ' . config('app.name')
        ]);
    }

    public function infoPhp()
    {
//        dd(config('organizations.all_statuses'));
    }
}
