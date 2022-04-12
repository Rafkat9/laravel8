<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyModel;
use App\Http\Resources\ApiClientResource;

class ApiClientController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        for( $i = 1; $i <= 10; $i++ ) {
            $arrInn = new ApiClientResource(CompanyModel::find(rand(1, 2)));
            $ourTime = rand(0, 9);
                if($ourTime <= 1){
                    return $arrInn;
                }
        }

    }
}

