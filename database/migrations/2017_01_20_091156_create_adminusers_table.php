<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateAdminusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminusers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('email', 255);
            $table->integer('has_notify');
            $table->integer('has_report');
            $table->integer('can_export')->comment('puo exportare le richieste');
            $table->integer('region_id');
            $table->string('password', 60);
            $table->string('real_password', 255)->nullable();
            $table->tinyInteger('is_active')->default(1);
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->unique('email', 'users_email_unique');

            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adminusers');
    }
}
