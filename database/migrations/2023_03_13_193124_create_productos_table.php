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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idUnidades')->unsigned();
            $table->foreign('idUnidades')->references('id')->on('unidades')->onDelete('cascade')->onUpdate('cascade');
            $table->string('prod_codigo', 100)->nullable()->unique();
            $table->string('prod_nombre', 150)->nullable()->default('');
            $table->decimal('prod_stock', 8, 2)->nullable()->default(0.00);
            $table->decimal('prod_precio', 8, 2)->nullable()->default(0.00);
            $table->boolean('activo')->nullable()->default(true); 
            $table->timestamps();
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
};
