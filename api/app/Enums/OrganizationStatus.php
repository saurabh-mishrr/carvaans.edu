<?php namespace App\Enums;

/**
 * Class OrganizationStatus
 * @package App\Enums
 */
class OrganizationStatus
{
    private const FREE_TIER = 'free_tier'; //free trial
    private const SUBSCRIBED = 'subscribed'; //purchased
    private const SUSPENDED = 'suspended'; //temporary stop / still subscribed
    private const EXPIRED = 'expired'; //subscription / trial ended
    private const TRIAL_EXPIRY_DAYS = 7;
    private const SUBSCRIBED_EXPIRY_DAYS = 365;
}
