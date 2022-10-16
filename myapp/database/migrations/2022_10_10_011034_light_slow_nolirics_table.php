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
        Schema::create('light_slow_nolirics', function (Blueprint $table) {
            $table->id()->comment('明るくローテンポNoLiricsID');
            $table->string('artist_name', 128)->comment('アーティスト名');
            $table->string('music_title', 256)->comment('曲名');
            $table->dateTime('created_at')->nullable()->comment('作成日時');
            $table->dateTime('updated_at')->nullable()->comment('更新日時');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('light_slow_nolirics');
    }
};
