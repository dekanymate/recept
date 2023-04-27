<?php

use App\Models\Kategoriak;
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
        Schema::create('kategoriaks', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->timestamps(false);
        });

        Kategoriak::create(['nev'=>"főétel"]);
        Kategoriak::create(['nev'=>"leves"]);
        Kategoriak::create(['nev'=>"édesség"]);
        Kategoriak::create(['nev'=>"saláta"]);
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
