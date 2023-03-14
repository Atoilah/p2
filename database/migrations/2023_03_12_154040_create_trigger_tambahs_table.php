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
        DB::unprepared('
            CREATE TRIGGER tambahData AFTER UPDATE ON transactions FOR EACH ROW
            BEGIN
                IF new.status =  2 THEN
                UPDATE rooms
                SET jumlah = jumlah + old.jumlah
                WHERE id = old.room_id;
                END IF;
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('
            DROP TRIGGER "tambahData"
        ');
    }
};
