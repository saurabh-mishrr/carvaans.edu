<?php


namespace App\Http\Controllers;

use App\Http\Requests\PricingRequest;
use EHttpError;

class PricingController extends PricingRequest
{
    /**
     * returns quote as per admission count.
     * @return \Illuminate\Http\JsonResponse
     * @author Saurabh.Mishra
     */
    public function getQuote()
    {
        $admissionCount = $this->request->input('admissionCount');
        if ($admissionCount) {
            $allPlans = config('pricing.plans');
            foreach ($allPlans as $count => $perStudentCost) {
                if ($admissionCount < $count) {
                    return $this->send([
                        EHttpError::const('HTTP_SUCCESS') => [
                          'per_admission_cost' => $perStudentCost,
                          'total_cost' => $admissionCount * $perStudentCost
                        ],
                    ]);
                    break;
                }
            }
            return $this->send([EHttpError::const('HTTP_SUCCESS') => 'Write to us on '.config('mail.quote')]);
        }
    }

}
