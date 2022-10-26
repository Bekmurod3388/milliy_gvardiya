<?php

namespace App\Widgets;

use App\Models\Region;
use Arrilot\Widgets\AbstractWidget;

class RecentNews extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];
    public $reloadTimeout=1;
    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $regions=Region::all();

        return view('widgets.recent_news', [
            'config' => $this->config,
            'regions'=>$regions,
        ]);
    }
}
