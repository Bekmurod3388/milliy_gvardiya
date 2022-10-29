<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Region extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];
    public $reloadTimeout=5;

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {


        return view('widgets.region', [
            'config' => $this->config,
            'regions'=>\App\Models\Region::all(),
            'districts'=>\App\Models\District::all(),
            'objects'=>\App\Models\Objectt::all(),
        ]);
    }
}
