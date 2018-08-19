<?php

namespace dott\repos;

use dott\models\Business;
use Illuminate\Support\Facades\Request;


class BusinessRepo extends BaseRepo
{

    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request){
//        $business = new Business();
//        $business->name                 = $request->name ;
//        $business->construction_year    = $request->construction_year;
//        $business->class                = $request->class;
//        $business->governmental         = $request->governmental;
//        $business->save();
        $business = Business::create($request->all());
        if($business){
            return $business;
        }
    }

    /**
     * @return array
     */
    public function listing(){
        $business = new Business();
        return $business->getList();
    }
}