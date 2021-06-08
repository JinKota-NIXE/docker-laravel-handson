<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToBssTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bss_tables', function (Blueprint $table) {
            $table->integer('password')->comment('パスワード');
            $table->text('message')->comment('内容');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bss_tables', function (Blueprint $table) {
            $table->dropColumm('password');
            $table->dropColumm('message');
        });
    }
}
