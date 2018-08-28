<?php

use \dott\migrations\Migration;

class CreateBusinessTable extends Migration
{
    public function up()
    {
        $this->schema->create('business', function (Illuminate\Database\Schema\Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('construction_year');
            $table->enum('class', [1, 2, 3]);
            $table->boolean('governmental');
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->schema->drop('business');
    }
}
