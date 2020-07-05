<?php


namespace App\Repositories;

use App\Models\RolesModel;
use \ERoles;


class RolesRepository implements RolesRepositoryInterface
{
    private $model;

    public $allRoles;

    public function __construct()
    {
        $this->model = app(RolesModel::class);
        $this->allRoles = ERoles::constArray(['SUPER_ADMIN', 'ADMIN', 'FACULTY', 'STUDENT', 'OTHER_STAFF']);
    }

    public function addBulkRoles(array $params)
    {
        foreach ($params as $record) {
            $this->model->firstOrCreate($record)->save();
        }
    }

    public function getAllRoles()
    {
        return $this->model->all();
    }
}
