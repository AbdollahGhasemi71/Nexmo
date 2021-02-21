<?php


namespace Nexmo\Social\repositories;


use Nexmo\Social\Models\Socail;

class SocialRepo
{

    public function socialIndex()
    {
        return Socail::paginate(5);
    }

    public function socialStore($value)
    {
        Socail::create([
            'instagram' => $value->instagram,
            'telegram' => $value->telegram,
            'twitter' => $value->twitter,
            'linkedin' => $value->linkedin
        ]);
    }

    public function socialEdit($id)
    {
        return Socail::findOrFail($id);
    }

    public function socialUpdate($value, $id)
    {
        $social = Socail::findOrFail($id);
        $social->update([
            'instagram' => $value->instagram,
            'telegram' => $value->telegram,
            'linkedin' => $value->linkedin,
            'twitter' => $value->twitter
        ]);
    }

    public function socialDestroy($id)
    {
        $social = Socail::findOrFail($id);
        $social->delete();
    }


}
