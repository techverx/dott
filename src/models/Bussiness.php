<?php
namespace dott\models;

use Illuminate\Database\Eloquent\Model;

class Bussiness extends Model {

    /**
     * @var string
     */
    protected $table = "business";

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'construction_year', 'class', 'governmental'
    ];
    /**
     * @return array
     */
    public function getList() {
        return self::all()->toArray();
    }

    public function get($id){
        return self::find($id);
    }

}