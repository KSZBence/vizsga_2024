<?php

use App\Models\tevekenyseg;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tevekenysegs', function (Blueprint $table) {
            $table->id('tevekenyseg_id');
            $table->string('tevekenyseg_nev')->nullable();
            $table->integer('pontszam');
            $table->timestamps();
        });

        tevekenyseg::create(['tevekenyseg_id' => 1, 'tevekenyseg nev'=> 'kerékpárral jöttem iskolába', 'pontszam' => 1]);
        Tevekenyseg::create(['tevekenyseg_id' => 2, 'tevekenyseg nev'=> 'rollerrel jöttem iskolába ', 'pontszam' => 1]);
        Tevekenyseg::create(['tevekenyseg_id' => 3, 'tevekenyseg nev'=> 'ültettem fát ', 'pontszam' => 1]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tevekenysegs');
    }
};
