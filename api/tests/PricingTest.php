<?php


class PricingTest extends TestCase
{

    /**
     * @test
     */
    public function error_on_invalid_value_for_admissionCount()
    {
        $this->post('/api/get_quote', ['admissionCount' => '11mk00'])
            ->seeJson([
                'error' => [
                    'code' => 500,
                    'message' => 'A non well formed numeric value encountered'
                ]
            ]);
    }

}
