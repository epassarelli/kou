<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function(Blueprint $table){
            $table->id(); //integer unsigned increment 
            $table->string('codigo')->unique();
            $table->string('descripcion');
            $table->text('detalle')->nullable();
            $table->decimal('precio',12,2)->nullable();
            $table->string('slug');
            $table->timestamps(); //created_at updated_at
    
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
