<?php

namespace App\Http\Controllers;

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
        dd(phpinfo());
    }
}
