<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalculationModel extends Model
{

    protected $table = 'calculationHistory';

    public $timestamps = false;

	protected $fillable = [
		'num1', 'num2','operand', 'result', 'timestamp',
	];
}