<?php

namespace App\View\Components\Touragent;

use Illuminate\View\Component;

class Application extends Component
{
    public $isWorking;
    public $application;

    public function __construct($isWorking = false, $application = [])
    {
        $this->isWorking = $isWorking;
        $this->application = $application;
    }

    public function render()
    {
        return view('components.touragent.application');
        // , [
        //         'isWorking' => $this->isWorking,
        //         'application' => $this->application,
        //     ])->render();
    }
}
