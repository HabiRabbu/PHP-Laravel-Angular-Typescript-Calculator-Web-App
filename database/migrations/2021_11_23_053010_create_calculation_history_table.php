<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalculationHistoryTable extends Migration
{

 public function up()
 {
 Schema::create('calculationHistory', function (Blueprint $table) {
 $table->double('num1');
 $table->double('num2');
 $table->char('operand', 1);
 $table->double('result');
 $table->datetime('timestamp');
 
 });
 }

 public function down()
 {
 Schema::drop('calculationHistory');
 }
}
