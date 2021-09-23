<?php

namespace App\Http\Livewire\Admin;

use App\Models\TeamMember;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditTeamMembersComponent extends Component
{
    use WithFileUploads;

    public $first_name;
    public $last_name;
    public $position;
    public $description;
    public $image;

    public $newimage;

    public function mount($member_id){
        $tmember = TeamMember::where('id',$member_id)->first();
        $this->first_name=$tmember->first_name;
        $this->last_name=$tmember->last_name;
        $this->position=$tmember->position;
        $this->description=$tmember->description;
        $this->image=$tmember->image;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'first_name'=>'required',
            'last_name'=>'required',
            'position'=>'required',
            'description'=>'required',

        ]);
        if($this->newimage)
        {
            $this->validateOnly($fields,
                [
                    'newimage'=>'required|mimes:jpeg,png',
                ]);
        }
    }
    public function updateTeamMember()
    {
        $this->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'position'=>'required',
            'description'=>'required',

        ]);
        if($this->newimage)
        {
            $this->validate(
                [
                    'newimage'=>'required|mimes:jpeg,png',
                ]);
        }

        $teamMember = new TeamMember();
        $teamMember->first_name=$this->first_name;
        $teamMember->last_name=$this->last_name;
        $teamMember->position=$this->position;
        $teamMember->description=$this->description;
        if($this->newimage)
        {
            $destinationPath = 'assets/images/members';
            File::delete($destinationPath.'/'.$teamMember->image);
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('members',$imageName);
            $teamMember->image  = $imageName;
        }
        $teamMember->update();
        session()->flash('message' ,'  Team Member has been Updated Successfully !');

    }
    public function render()
    {
        return view('livewire.admin.admin-edit-team-members-component')->layout('layouts.base');
    }
}
