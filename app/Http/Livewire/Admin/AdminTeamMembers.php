<?php

namespace App\Http\Livewire\Admin;

use App\Models\TeamMember;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;

class AdminTeamMembers extends Component
{

    use WithPagination;
    public function destroyMember($id)
    {

        $tmember = TeamMember::find($id);
        if($tmember->image)
        {
            $destinationPath = 'assets/images/members';
            File::delete($destinationPath.'/'.$tmember->image);

        }
        $tmember->delete();
        session()->flash('message',' Member has been Deleted Successfully !! ');
    }
    public function render()
    {
        $tmembers = TeamMember::paginate(5);
        return view('livewire.admin.admin-team-members',
        [
            'tmembers'=>$tmembers,
        ]
        )->layout('layouts.base');
    }
}
