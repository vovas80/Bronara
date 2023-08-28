<?php

namespace App\View\Components\Inc;

use App\Models\Region as RegionModel;
use App\Region;
use Single;
use Illuminate\View\Component;
use Auth; 

class Header extends Component
{
    
    public $is_user_login;
    public $isBtn;
    public $isIconBlue;
    public $isIconExit;
    public $isBackNone;
    public $isWhite;
    public $isUser;
    public $isTouragent;
    public $is_touragent_login;
    public $fields = [];

    public function __construct($isBtn = false, $is_touragent_login = false, $isIconBlue = false, $isBackNone = false, $isWhite = false, $isIconExit = false, $isUser = false, $isTouragent = false){

        // $s = new Single('Хедер', 10, 2);

        // $this->fields = [
        //     'search_text'       => $s->field('Поиск', 'Текст', 'text', true, 'Введите свой запрос'),
        // ];

        $this->isBtn        = $isBtn;
        $this->isIconBlue   = $isIconBlue;
        $this->isBackNone   = $isBackNone;
        $this->isWhite      = $isWhite;
        $this->isIconExit   = $isIconExit;
        $this->isUser       = $isUser;
        $this->isTouragent  = $isTouragent;
        

        $user = Auth::guard('tourist')->user();
       
        $this->is_user_login = false;
        
        if (!empty($user)){
            $this->is_user_login = true;
        }

        $touragent = Auth::guard('touragent')->user();

        $this->is_touragent_login = false;
        
        if (!empty($touragent)){
            $this->is_touragent_login = true;
        }

        $region_title = Region::get();			
        $list_regions = RegionModel::orderBy('title', 'ASC')->get();

        $this->fields = [
            'list_regions' => $list_regions,
            'region_title' => $region_title,
            'user'         => $user,
            'touragent'    => $touragent,
        ];

    }

    public function render(){
        return view('components.inc.header');
    }
}
