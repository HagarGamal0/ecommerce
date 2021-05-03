<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id();
            $table->integer('setting_id')->unsigned();
            $table->foreign('setting_id')->references('id')->on('settings')->onDelete('cascade')->onUpdate('cascade');

            $table->string('locale');
            $table->longText('value')->nullable();
            $table->unique(['setting_id','locale']);




         // $table->foreignId('setting_id')->constrained('settings')
       //     ->onDelete('cascade');

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
        Schema::dropIfExists('setting_translations');
    }
}
