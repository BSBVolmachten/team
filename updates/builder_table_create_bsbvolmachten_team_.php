<?php namespace BsbVolmachten\Team\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBsbvolmachtenTeam extends Migration
{
    public function up()
    {
        Schema::create('bsbvolmachten_team_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('job', 255);
            $table->string('description', 255);
            $table->integer('sort_order');
            $table->string('phone', 255);
            $table->string('email', 255);
            $table->string('facebook', 255);
            $table->string('twitter', 255);
            $table->string('skype', 255);
            $table->string('linkedin', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bsbvolmachten_team_');
    }
}
