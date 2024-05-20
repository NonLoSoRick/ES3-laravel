<?php

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
        Schema::create('libri', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libri');
    }
};



class CreateLibriTable extends Migration
{
    public function up()
    {
        Schema::create('libri', function (Blueprint $table) {
            $table->id();
            $table->string('titolo');
            $table->text('descrizione')->nullable();
            $table->unsignedBigInteger('autore_id');
            $table->timestamps();

            $table->foreign('autore_id')->references('id')->on('autori')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('libri');
    }
}
