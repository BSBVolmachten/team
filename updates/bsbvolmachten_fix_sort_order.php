<?php namespace Bsbvolmachten\Team\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBsbvolmachtenTeamMedewerker2 extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_team_medewerker', function($table)
        {
            $table->integer('sort_order')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('bsbvolmachten_team_medewerker', function($table)
        {
            $table->integer('sort_order')->nullable(false)->change();
        });
    }
}