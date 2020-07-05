<?php


namespace App\Http\Requests;

use App\Http\Controllers\Controller;
use EHttpError;

class PricingRequest extends Controller
{

    public static $rules = [
        'admissionCount' => 'required|integer',
    ];


}
