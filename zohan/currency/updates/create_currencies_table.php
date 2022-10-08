<?php namespace Zohan\Currency\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateCurrenciesTable Migration
 */
class CreateCurrenciesTable extends Migration
{
    public function up()
    {
        Schema::create('zohan_currency_currencies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->string('code', 50)->unique();
            $table->string('symbol', 5)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zohan_currency_currencies');
    }
}
