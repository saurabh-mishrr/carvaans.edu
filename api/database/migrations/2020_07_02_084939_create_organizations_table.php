<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    private $table = 'organizations';

    /**
     * Run the migrations.
     *
     * @return void
     * @author Saurabh.Mishra
     */
    public function up()
    {
        if (!Schema::hasTable($this->table)) {
            Schema::create($this->table, function (Blueprint $table) {
                $table->id();
                $table->string('organization_name')->unique();
                $table->string('domain', 50)->unique();
                $table->string('address', 100)->nullable();
                $table->uuid('uuid');
                $table->string('logo')->nullable();
                $table->boolean('active')->default(true);
                $table->enum('status', \EOrgStatus::constArray(['FREE_TIER', 'SUSPENDED', 'SUBSCRIBED', 'EXPIRED']))->default(\EOrgStatus::const('FREE_TIER'));
                $table->date('expiry_date');
                $table->json('settings')->nullable();
                $table->date('suspended_till')->nullable();
                $table->timestamps(0);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @author Saurabh.Mishra
     */
    public function down()
    {
        if (config('app.env') == 'local') {
            Schema::dropIfExists($this->table);
        }
    }
}
