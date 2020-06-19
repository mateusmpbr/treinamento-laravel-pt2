<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersHasToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members_has_tools', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('members_id')->unsigned();
            $table->bigInteger('tools_id')->unsigned();
            $table->timestamps();

            $table->foreign('members_id')
                    ->references('id')
                    ->on('members')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('tools_id')
                    ->references('id')
                    ->on('tools')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members_has_tools');
    }
}
