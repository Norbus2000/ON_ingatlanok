<?php

use App\Models\ingatlanok;
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
        Schema::create('ingatlanoks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategoria')->references('id')->on('kategoriaks');
            $table->string("leiras");
            $table->date("hirdetesDatuma")->default(now());
            $table->boolean("tehermentes");
            $table->integer("ar");
            $table->string("kepUrl");
            $table->timestamps();
        });

        ingatlanok::create(["kategoria" =>"1", "leiras" =>"Szép", "tehermentes" => true, "ar" =>"423242", "kepUrl" =>"https://csic.hu/images/properties/elado-budapest-iii-ingatlan--520469.jpg"]);
        ingatlanok::create(["kategoria" =>"2", "leiras" =>"Nagyon szép", "tehermentes" => false, "ar" =>"42324323", "kepUrl" =>"https://k1.koltozzbe.hu/img2/640x480/47/e6fcc1618528ec846980b08aa1d490.jpg"]);
        ingatlanok::create(["kategoria" =>"3", "leiras" =>"Nem rossz", "tehermentes" => false, "ar" =>"4254343", "kepUrl" =>"https://k1.koltozzbe.hu/img2/640x480/3b/9d53519fcf17907ba7d99e5349fef4.jpg"]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingatlanoks');
    }
};
