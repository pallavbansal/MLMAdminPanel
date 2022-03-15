<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->integer('company_id');
            $table->integer('admin_percentage');
            $table->integer('price');
            $table->integer('a1_percentage');
            $table->integer('a2_percentage');
            $table->integer('a3_percentage');
            $table->integer('admin_percentage2');
            $table->integer('a1_percentage2');
            $table->integer('a2_percentage2');
            $table->integer('a3_percentage2');
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
        Schema::dropIfExists('packages');
    }
}
