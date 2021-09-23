<?php

namespace App\Http\Livewire\Admin;

use App\Models\TeamMember;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddTeamMemberComponent extends Component
{
    use WithFileUploads;
    public $first_name;
    public $last_name;
    public $position;
    public $description;
    public $image;

    public function updated($fields){
        $this->validateOnly($fields,[
            'first_name'=>'required',
            'last_name'=>'required',
            'position'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpeg,png',
        ]);
    }
    public function StoreTeamMember()
    {
        $this->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'position'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpeg,png',
        ]);
        $teamMember = new TeamMember();
        $teamMember->first_name=$this->first_name;
        $teamMember->last_name=$this->last_name;
        $teamMember->position=$this->position;
        $teamMember->description=$this->description;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('members',$imageName);
        $teamMember->image = $imageName;
        $teamMember->save();
        session()->flash('message' ,'  Team Member has been Added Successfully !');

    }
    public function render()
    {
        return view('livewire.admin.admin-add-team-member-component')->layout('layouts.base');
    }
}
