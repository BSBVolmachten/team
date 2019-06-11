<?php
namespace Bsbvolmachten\Medewerkers\components;

use Cms\Classes\ComponentBase;
use Bsbvolmachten\Medewerkers\Models\Medewerkers as Medewerker;

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
        return Medewerker::orderBy('sort_order', 'ASC')->get();
    }
}