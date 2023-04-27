<?php

use App\Models\kategoriak;
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
            $table->string("nev");
            $table->timestamps();
        });

        kategoriak::create(["nev" =>"Ház"]);
        kategoriak::create(["nev" =>"Lakás"]);
        kategoriak::create(["nev" =>"Építési telek"]);
        kategoriak::create(["nev" =>"Garázs"]);
        kategoriak::create(["nev" =>"Garázs"]);
        kategoriak::create(["nev" =>"Mezőgazdasági terület"]);
        kategoriak::create(["nev" =>"Ipari ingatlan"]);
        
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
