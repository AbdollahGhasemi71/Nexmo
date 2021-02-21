<?php


namespace Nexmo\Team\repositories;


use Nexmo\Team\Models\Team;

class TeamRepo
{
    public function teamIndex()
    {
        return Team::paginate(6);
    }

    public function teamStore($value)
    {
        $file = $value->file('image');
        if (!empty($file)) {
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/team/', $image);
        }
        Team::create([
            'alt' => $value->alt,
            'fullname' => $value->fullname,
            'image' => $image,
            'job' => $value->job,
            'linkdin' => $value->linkdin,
            'instagram' => $value->instagram,
            'telegram' => $value->telegram
        ]);
    }

    public function teamEdit($id)
    {
        Team::findOrfail($id);
    }

    public function teamUpdate($value, $id)
    {
        $file = $value->file('image');
        $team = Team::findOrFail($id);
        if (!empty($file)) {
            if (file_exists('images/team/' . $team->image)) {
                unlink('images/team/' . $team->image);
            }
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/team/', $image);
        } else {
            $image = $team->image;
        }
        $team->update([
            'image' => $image,
            'alt' => $value->alt,
            'fullname' => $value->fullname,
            'job' => $value->job,
            'linkdin' => $value->linkdin,
            'telegram' => $value->telegram,
            'instagram' => $value->instagram
        ]);
    }
    public function teamDestroy($id)
    {
        $team = Team::findOrFail($id);
        $imageTeam = $team->image;
        if (file_exists('images/team/' . $imageTeam)) {
            unlink('images/team/' . $imageTeam);
        }
        Team::destroy($id);
    }

}
