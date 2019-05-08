<?php namespace BsbVolmachten\Team\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBsbvolmachtenTeamMedewerker extends Migration
{
    public function up()
    {
        Schema::rename('bsbvolmachten_team_', 'bsbvolmachten_team_medewerker');
        Schema::table('bsbvolmachten_team_medewerker', function($table)
        {
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::rename('bsbvolmachten_team_medewerker', 'bsbvolmachten_team_');
        Schema::table('bsbvolmachten_team_', function($table)
        {
            $table->string('name', 191)->change();
        });
    }
}
