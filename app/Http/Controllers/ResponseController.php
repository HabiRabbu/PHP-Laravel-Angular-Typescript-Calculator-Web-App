<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\CalculationModel;

class ResponseController extends BaseController
{

    public function ReturnHistory(){


        return response()->json(CalculationModel::paginate(5));
    }

}
