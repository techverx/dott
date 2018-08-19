<?php
namespace dott\models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model {

    protected $table = "business";

    /**
     * @return array
     */
    public function getList() {
        return self::all()->toArray();
    }

}