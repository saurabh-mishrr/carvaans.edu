<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Repositories\RolesRepositoryInterface;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(RolesRepositoryInterface $rolesRepository)
    {
        DB::beginTransaction();
        try {
            $preparedData = $this->prepareData($rolesRepository->allRoles);
            $rolesRepository->addBulkRoles($preparedData);
        } catch (\Throwable $e) {
            DB::rollBack();
            echo($e->getMessage());
        }
        DB::commit();
    }

    private function prepareData(array $allRoles)
    {
        return array_map(function($roleName){
            return ['role' => $roleName];
        }, $allRoles);
    }
}
