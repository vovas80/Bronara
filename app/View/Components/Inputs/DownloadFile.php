<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class DownloadFile extends Component
{
    public $isFile;
    public $isSold;
    public $name;
    public $idbooking;
    public $document;
    public $active;
    public $name_document;
    

    public function __construct($isFile = false, $isSold = false, $name = '', $idbooking = 0, $document = '', $active = false, $name_document = '')
    {
        $this->isFile = $isFile;
        $this->isSold = $isSold;
        $this->name = $name;
        $this->idbooking = $idbooking;
        $this->document = $document;

        if(!empty($document)) {
            $this->active = true;
            $this->name_document = explode('/', $document)[4];
        }
    }


  
    public function render()
    {
        return view('components.inputs.download-file');
    }
}
