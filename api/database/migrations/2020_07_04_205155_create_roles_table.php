<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public $table = 'roles';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable($this->table)) {
            Schema::create($this->table, function (Blueprint $table) {
                $table->id();
                $table->enum('role', \ERoles::constArray(['SUPER_ADMIN', 'ADMIN', 'FACULTY', 'STUDENT', 'OTHER_STAFF']))->default(\ERoles::const('ADMIN'));
                $table->boolean('active')->default(true);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (config('app.env') == 'local') {
            Schema::dropIfExists($this->table);
        }
    }
}
