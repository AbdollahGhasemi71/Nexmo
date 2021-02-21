<?php


namespace Nexmo\Info\repositories;


use Nexmo\Info\Models\Info;

class InfoRepo
{

    public function infoIndex()
    {
        return Info::paginate(5);
    }

    public function infoCreate($value)
    {
        Info::create([
            'phone' => $value->phone,
            'email' => $value->email,
            'hours' => $value->hours
        ]);
    }

    public function infoEdit($id)
    {
        return Info::findOrFail($id);

    }

    public function infoUpdate($value, $id)
    {
        $info = Info::findOrFail($id);
        $info->update([
            'phone' => $value->phone,
            'email' => $value->email,
            'hours' => $value->hours
        ]);
    }

    public function infoDelete($id)
    {
        $info = Info::findOrFail($id);
        $info->delete();
    }


}
