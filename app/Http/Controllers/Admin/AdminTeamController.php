<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeamFormRequest;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class AdminTeamController extends Controller
{
    public function viewTeam()
    {
        $teams = Team::paginate(8);

        $images = Image::where('image_url','https://res.cloudinary.com/dvhfyuilj/image/upload/v1677074351/unpqsoitb6ixqiqb6ywi.png')->get();

        return view('pages.admin.team.view', compact('teams', 'images'));
    }

    public function addTeam()
    {
        return view('pages.admin.team.add-edit');
    }

    public function storeTeam(TeamFormRequest $request)
    {
        $image = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        
        $teams = array(
            'name' => $request->name,
            'position' => $request->position,            
            'image' => $image
        );

        if( Team::create($teams)){
            return redirect('dashboard/team/view')->with('success', 'Team member added successfully');
        }else{
            return redirect('dashboard/team/view')->with('danger', 'Image upload failed!');
        }  

        // Team::create($teams);
        // return redirect('dashboard/team/view')->with('success', 'Team member added successfully');
    }

    public function editTeam($id)
    {
        $team = Team::find($id);
        return view('pages.admin.team.add-edit')->with('team', $team);
    }

    public function updateTeam(TeamFormRequest $request)
    { 
        
        $team = Team::find($request->id);
        $team->name = $request->name;
        $team->position = $request->position;

        if($request->hasFile('image')) {
            $image = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $team->image = $image;
        }
    
        if($team->save()){
            return redirect('dashboard/team/view')->with('success', 'Team member Updated successfully');
        }else{
            return redirect('dashboard/team/view')->with('danger', 'Image upload failed!');
        }
    } 

    public function deleteTeam($id)
    {
        $team = Team::where('id', $id)->delete();
        return redirect('dashboard/team/view')->with('success', 'Team member Deleted successfully');
    }
}
