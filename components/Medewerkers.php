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

    public function onRun() {
        $team = $this->getEmployee();
        if ($team->isNotEmpty()) {
            $this->page['medewerkers'] = $team;
        } else {
            $this->page['medewerkers'] = false;
        }
    }

    public function getEmployee()
    {
        return Medewerker::orderBy('sort_order', 'ASC')->get();
    }
}