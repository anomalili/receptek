<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Kategoriak;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategoriaks', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->String("nev");
            $table->timestamps();
        });

        Kategoriak::create(['nev'=>'főétel']);
        Kategoriak::create(['nev'=>'leves']);
        Kategoriak::create(['nev'=>'édesség']);
        Kategoriak::create(['nev'=>'saláta']);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategoriaks');
    }
};
