<?php

use App\Models\bejegyzesek;
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
        Schema::create('bejegyzeseks', function (Blueprint $table) {
            $table->id();
            $table->string('tevekenyseg_id')->references('tevekenyseg_id')->on('tevekenyseg');
            $table->integer('osztaly_id');
            $table->boolean('allapot')->nullable();
            $table->timestamps();
            
        });
        bejegyzesek::create(['id' => 1, 'tevekenyseg_id'=> 1, 'osztaly_id'=>1, 'pontszam' => 1]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bejegyzeseks');
    }
};
