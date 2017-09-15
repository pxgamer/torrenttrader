<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTorrentTrackersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torrent_trackers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('torrent_id');
            $table->unsignedInteger('tracker_id');
            $table->integer('seeds')->default(0);
            $table->integer('leechers')->default(0);
            $table->integer('completed')->default(0);

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
        Schema::dropIfExists('torrent_trackers');
    }
}
