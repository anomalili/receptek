<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Receptek;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recepteks', function (Blueprint $table) {
            $table->id();
            $table->String("nev");
            $table->foreignId("kat_id")->references("id")->on("kategoriaks");
            $table->String("kep_eleresi_ut");
            $table->String("leiras");
            $table->date("datum")->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });

        Receptek::create(['nev'=>'Halászlé', 'kat_id'=>2, 'kep_eleresi_ut'=>'pic/p1.jpg', 'leiras'=>'legfinomabb leves a világon']);
        Receptek::create(['nev'=>'Sültcsirke', 'kat_id'=>1, 'kep_eleresi_ut'=>'pic/p1.jpg', 'leiras'=>'legfinomabb csirke a világon']);
        Receptek::create(['nev'=>'Csoki', 'kat_id'=>3, 'kep_eleresi_ut'=>'pic/p1.jpg', 'leiras'=>'legfinomabb csoki a világon']);
        Receptek::create(['nev'=>'Görög saláta', 'kat_id'=>4, 'kep_eleresi_ut'=>'pic/p1.jpg', 'leiras'=>'legfinomabb saláta a világon']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recepteks');
    }
};
