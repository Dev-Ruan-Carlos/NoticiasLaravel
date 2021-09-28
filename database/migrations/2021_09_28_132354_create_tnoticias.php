<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTnoticias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tnoticias', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('controle')->primary();
            $table->string('funcionario', 50);
            $table->string('titulo', 40);
            $table->text('noticia');
            $table->timestamp('datahoracadastro')->default(DB::raw('CURRENT_TIMESTAMP()'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tnoticias');
    }
}
