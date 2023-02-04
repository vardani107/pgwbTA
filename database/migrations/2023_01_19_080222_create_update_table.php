<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('update', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('ekstrakulikuler_id')->unsigned()->nullable();
            $table->foreign('ekstrakulikuler_id')->references('id')->on('ekstrakulikuler')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('deskripsi');
            $table->string('hari');
            $table->time('jam');
            $table->char('foto')->nullable();
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
        Schema::dropIfExists('update');
    }
};
