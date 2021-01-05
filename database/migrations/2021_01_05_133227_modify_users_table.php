<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->char('isAdmin', 1)->after('postcode');
            $table->string('gender', 9)->nullable()->change();
            $table->string('address')->nullable()->change();
            $table->unsignedInteger('city_id')->nullable()->change();
            $table->unsignedInteger('province_id')->nullable()->change();
            $table->string('postcode', 5)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('isAdmin');
            $table->string('gender', 9)->nullable(false)->change();
            $table->string('address')->nullable(false)->change();
            $table->unsignedInteger('city_id')->nullable(false)->change();
            $table->unsignedInteger('province_id')->nullable(false)->change();
            $table->string('postcode', 5)->nullable(false)->change();
        });
    }
}
