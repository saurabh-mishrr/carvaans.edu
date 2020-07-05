<?php

return [
    'all_statuses' => \OrganizationStatus::constArray(['FREE_TIER', 'SUSPENDED', 'SUBSCRIBED', 'EXPIRED']),
    'default_status' => \OrganizationStatus::const('FREE_TIER'),
    'FREE_TIER' => \OrganizationStatus::const('FREE_TIER'), //free trial
    'SUBSCRIBED' => \OrganizationStatus::const('SUBSCRIBED'), //purchased
    'SUSPENDED' => \OrganizationStatus::const('SUSPENDED'), //temporary stop / still subscribed
    'EXPIRED' => \OrganizationStatus::const('EXPIRED'), //subscription / trial ended
    'TRIAL_EXPIRY_DAYS' => \OrganizationStatus::const('TRIAL_EXPIRY_DAYS'),
    'SUBSCRIBED_EXPIRY_DAYS' => \OrganizationStatus::const('SUBSCRIBED_EXPIRY_DAYS'),
];
