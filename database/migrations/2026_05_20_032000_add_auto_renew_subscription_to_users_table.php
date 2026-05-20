<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('users', 'auto_renew_subscription')) {
            Schema::table('users', function (Blueprint $table) {
                $table->boolean('auto_renew_subscription')->default(false);
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
        if (Schema::hasColumn('users', 'auto_renew_subscription')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('auto_renew_subscription');
            });
        }
    }
};
