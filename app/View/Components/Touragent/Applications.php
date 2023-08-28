<?php

namespace App\View\Components\Touragent;

use Illuminate\View\Component;

class Applications extends Component
{
    public $isWorking;
    public $applications;

    public function __construct($isWorking = false, $applications = [])
    {
        $this->isWorking = $isWorking;
        $this->applications = $applications;
    }

    public function render()
    {
        return view('components.touragent.applications', [
            'isWorking'     => $this->isWorking,
            'applications'   => $this->applications,
        ])->render();
    }
}
