<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\CalculationModel;

class MathController extends BaseController
{

    public function add(Request $request){

        $num1 = $request->input('firstnumber');
        $num2 = $request->input('secondnumber');
        $operand = '+';
        $result = 0;
        $result = $num1 + $num2;

        $this->store($num1, $num2, $result, $operand);

        return response($result);
    }

    public function subtract(Request $request){

        $num1 = $request->input('firstnumber');
        $num2 = $request->input('secondnumber');
        $operand = '-';
        $result = 0;
        $result = $num1 - $num2;

        $this->store($num1, $num2, $result, $operand);

        return response($result);
    }

    public function multiply(Request $request){

        $num1 = $request->input('firstnumber');
        $num2 = $request->input('secondnumber');
        $operand = '*';
        $result = 0;
        $result = $num1 * $num2;

        $this->store($num1, $num2, $result, $operand);

        return response($result);
    }

    public function divide(Request $request){

        $num1 = $request->input('firstnumber');
        $num2 = $request->input('secondnumber');
        $operand = '/';
        $result = 0;
        $result = $num1 / $num2;

        $this->store($num1, $num2, $result, $operand);

        return response($result);
    }

    public function store($num1, $num2, $result, $operand)
    {

        $calculationModel = new CalculationModel;

        $calculationModel->num1 = $num1;
        $calculationModel->num2 = $num2;
        $calculationModel->operand = $operand;
        $calculationModel->result = $result;
        $calculationModel->timestamp = now();

        $calculationModel->save();
        //return response($result)
    }

}
