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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 100);
            $table->string('Stazione_di_partenza');
            $table->string('Stazione_di_arrivo');
            $table->time('Orario_di_partenza');
            $table->time('Orario_di_arrivo');
            $table->string('Codice_Treno');
            $table->integer('Numero_Carrozze');
            $table->boolean('In_orario')->default(true);
            $table->boolean('Cancellato')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn([
                'Azienda',
                'Stazione_di_partenza',
                'Stazione_di_arrivo',
                'Orario_di_partenza',
                'Orario_di_arrivo',
                'Codice_Treno',
                'Numero_Carrozze',
                'In_orario',
                'Cancellato'
            ]);
        });
    }
};
