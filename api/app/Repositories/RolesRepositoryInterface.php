<?php


namespace App\Repositories;


interface RolesRepositoryInterface
{
    public function getAllRoles();

    public function addBulkRoles(array $params);
}
