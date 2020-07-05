<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Laravel\Lumen\Routing\Controller as BaseController;
use EHttpError;
class Controller extends BaseController
{
    public static $rules = [];

    public $request;

    /**
     * if validation rules are present validate request
     * Controller constructor.
     * @param Request $request
     * @author Saurabh.Mishra
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
        if ($this->isRuleSet()) {
            $validation = Validator::make($this->request->all(), static::$rules);
            $errors = $validation->errors();
            if ($validation->fails()) {
                if (!empty($errors)) {
                    $data = [];
                    foreach ($errors->all() as $message) {
                        $data[] = $message;
                    }
                    return response()->json([
                        'error' => $data
                    ], EHttpError::const('HTTP_VALIDATION_FAILED'));
                    return false;
                }
            }
        }
    }


    /**
     * sends json response.
     * @param array $successMessage
     * @param array $failureMessage
     * @return \Illuminate\Http\JsonResponse
     * @author Saurabh.Mishra
     */
    public function send(array $successMessage = [], array $failureMessage = [])
    {
        $responseArray = [];
        if (!empty($successMessage)) {
            $responseArray['success'] = [
                'code' => key($successMessage),
                'message' => $successMessage[key($successMessage)]
            ];
        }
        if (!empty($failureMessage)) {
            $responseArray['error'] = [
                'code' => key($failureMessage),
                'message' => $failureMessage[key($failureMessage)]
            ];
        }
        return response()->json($responseArray);
    }

    /**
     * checks if rules are present.
     * @return bool
     * @author Saurabh.Mishra
     */
    private function isRuleSet()
    {
        return !empty(static::$rules);
    }
}
