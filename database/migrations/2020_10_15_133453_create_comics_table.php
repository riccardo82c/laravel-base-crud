<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('titolo', 50);
            $table->string('autore', 50);
            $table->decimal('prezzo', 8, 2)->nullable();
            $table->integer('quantita');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('comics');
    }
}
