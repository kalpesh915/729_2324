<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class content extends Component
{
    /**
     * Create a new component instance.
     */
    public $username, $city ;
    public function __construct($user = "", $city = "")
    {
        //
        if($user === ""){
            $this->username = "Not Available";
        }else{
            $this->username = $user;
        }

        if($city === ""){
            $this->city = "Rajkot";
        }else{
            $this->city = $city;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.content');
    }
}
