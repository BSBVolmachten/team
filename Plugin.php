<?php namespace Bsbvolmachten\Team;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Bsbvolmachten\Team\Components\Medewerkers' => 'medewerkers',
        ];
    }

    public function registerSettings()
    {
    }
}