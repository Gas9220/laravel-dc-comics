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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 60);
            $table->text('description');
            $table->text('thumb');
            // Gestisco il prezzo come numero non negativo
            $table->float('price', 4, 2, true);
            $table->string('series', 60);
            $table->date('sale_date');
            $table->string('artists');
            $table->string('writers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
};
