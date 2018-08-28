<?php

namespace dott\repos;

use dott\models\Bussiness;
use Illuminate\Http\Request as HttpRequest;


class BussinessRepo extends BaseRepo
{

    /**
     * @param HttpRequest $request
     * @return mixed
     */
    public function create( HttpRequest $request){
        $bussiness = Bussiness::create($request->all());
        if($bussiness){
            return $bussiness;
        }
    }

    /**
     * @return array
     */
    public function listing(HttpRequest $request){
        $bussiness = new Bussiness();
        return $bussiness->skip($request->offset * $request->perpage)->take($request->perpage)->get()->toArray();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function get($id){
        $bussiness = new Bussiness();
        return $bussiness->get($id);
    }

    /**
     * @param $id
     */
    public function update($id, HttpRequest $request){
        $bussiness = $this->get($id);
        $bussiness->name                = $request->name;
        $bussiness->construction_year   = $request->construction_year;
        $bussiness->class               = $request->class;
        $bussiness->governmental        = $request->governmental;
        $bussiness->save();
        return $bussiness;

    }

    /**
     * @param $id
     */
    public function delete($id){
        $bussiness = $this->get($id);
        $bussiness->destroy();
    }

    /**
     * @param HttpRequest $request
     * @return mixed
     */
    public function search(HttpRequest $request){
        $bussiness = new Bussiness();
        if($request->name != ''){
            $bussiness = $bussiness::where('name', 'LIKE', "%{$request->name}%");
        }
        if($request->construction_year != ''){
            $bussiness = $bussiness->where('construction_year', 'LIKE', "%{$request->construction_year}%");
        }
        if($request->class != ''){
            $bussiness = $bussiness->where('class', 'LIKE', "%{$request->class}%");
        }
        if($request->governmental != ''){
            $bussiness = $bussiness->where('governmental', 'LIKE', "%{$request->governmental}%");
        }
        return $bussiness->get();
    }
}