<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('operatingUnit');
            $table->string('spatialCoverage');
            $table->string('region');
            $table->string('province');
            $table->string('commodityGroup');
            $table->string('commodity');
            $table->string('valueChainSegment');
            $table->string('function');
            $table->string('subprogram');
            $table->string('intervention');
            $table->text('interventionOthers');
            $table->string('unit');
            $table->text('interventionDetails');
            $table->string('multiYear');
            $table->decimal('target_1',14,2);
            $table->decimal('target_2',14,2);
            $table->decimal('target_3',14,2);
            $table->decimal('target_4',14,2);
            $table->decimal('target_5',14,2);
            $table->decimal('target_6',14,2);
            $table->decimal('investment_1',14,2);
            $table->decimal('investment_2',14,2);
            $table->decimal('investment_3',14,2);
            $table->decimal('investment_4',14,2);
            $table->decimal('investment_5',14,2);
            $table->decimal('investment_6',14,2);
            $table->decimal('investmentTotal',14,2);
            $table->integer('municipalities_1');
            $table->integer('municipalities_2');
            $table->integer('municipalities_3');
            $table->integer('municipalities_4');
            $table->integer('municipalities_5');
            $table->integer('municipalities_6');
            $table->text('fundSource');
            $table->text('remarks');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interventions');
    }
}
