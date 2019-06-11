<?php
namespace Bsbvolmachten\Team\components;

use Cms\Classes\ComponentBase;
use Bsbvolmachten\Team\Models\Medewerkers as Medewerker;

class Medewerkers extends ComponentBase {

    public function componentDetails()
    {
        return [
            'name' => 'Medewerkers',
            'description' => 'Laat alle medewerkers van het team zien.'
        ];
    }

    public function medewerkers()
    {
        $team = Medewerker::orderBy('sort_order', 'ASC')->get();

        if($team->isEmpty()) {
            return false;
        } else {
            return $team;
        }
    }
}