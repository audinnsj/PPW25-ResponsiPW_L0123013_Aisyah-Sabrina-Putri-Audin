<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('menus', function (Illuminate\Database\Schema\Blueprint $table) {
            $table->string('gambar')->nullable();
        });
    }

    public function down()
    {
        Schema::table('menus', function (Illuminate\Database\Schema\Blueprint $table) {
            $table->dropColumn('gambar');
        });
    }

};
