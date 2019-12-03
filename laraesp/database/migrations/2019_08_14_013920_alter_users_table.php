<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'fullname');
            $table->string('username')->unique()->after('id');
            $table->date('birthdate')->after('password');
            $table->string('gender')->after('birthdate');
            $table->string('photo')->after('gender')->default('imgs/nophoto.png');
            $table->string('role')->after('photo')->default('Editor');
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
            $table->renameColumn('fullname', 'name');
            $table->dropColumn(['birthdate', 'gender', 'photo', 'role']);
        });
    }
}
