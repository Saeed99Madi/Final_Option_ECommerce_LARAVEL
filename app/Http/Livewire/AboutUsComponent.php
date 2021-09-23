<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\TeamMember;
use App\Models\User;
use Livewire\Component;

class AboutUsComponent extends Component
{
    public function render()
    {
        $n_o_p = Product::all()->count();
        $n_o_u = User::all()->count();
        $tmembers = TeamMember::all();

        return view('livewire.about-us-component',[
            'n_o_ p'=>$n_o_p,
            'n_o_ u'=>$n_o_u,
            'tmembers'=>$tmembers,
        ])->layout('layouts.base');
    }
}
